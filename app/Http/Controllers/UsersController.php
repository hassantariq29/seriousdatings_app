<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Input;
use App\User;

class UsersController extends Controller 

	
{
    
	public function __construct(){
	
		$this ->beforefilter('exists',array('only' => array('show', 'edit', 'update', 'destroy') ));
	}	
	
	
	public function index()
    {
    	if(isset($_GET['email'])){ 
	    	$email = $_GET['email'];
	    	$result = DB::table('users')->where('email', $email)->get();
	    		if($result == null){
	    			return '1';
	    		}
	    		else{
	    			return '0';
	    		}
	  	}
        return View::make('user')->withusers(User::all());
    }

    public function create()
    {
    	return View::make('signup_form');
        
    }

 	public function store()
    {
	
				$rules = array(
    			'username' => 'required | unique:users',
    			'email'	   => 'required | unique:users',
    			'password' => 'required | min:2',
    			'firstName' => 'required',
    			'lastName' => 'required',
    			'yourSocialSituation' => 'required',
    			'movies' => 'required',
    			'travel' => 'required',
				'photoType' => 'required'
    			);
    	
    	$validator = \Validator::make(Input::all(),$rules);
    	if($validator->fails())
			return $validator->messages();
			/*
    		return \Redirect::to('users/create')
    				->withInput()
    				->witherrors($validator->messages());
			*/
    	$filname = Input::file('photo')->getClientOriginalName();
    	$imageName = Input::file('photo')->getClientOriginalExtension();
    	Input::file('photo')->move(base_path() . '/public/images/users/'.Input::get('username').'/', $filname);
    	
    	$movies   	=  Input::get('movies');
    	$travels  	=  Input::get('travel');
    	$socials 	=  Input::get('yourSocialSituation');
    	$movie="";
    	$travel="";
    	$social_sitatuion = "";
    	
    	//foreach ($movies as $movi ){$movie .= $movi.",";}
    	//foreach ($travels as $travl ){$travel  .= $travl.",";}
    	//foreach ($socials as $social ){$social_sitatuion .= $social.",";}
    	
    	$zipcode = 0;
    	$query = @unserialize(file_get_contents('http://ip-api.com/php/'));
    	if($query && $query['status'] == 'success') {
    		$zipcode = $query['zip'];
    	}
    	else{
    		$zipcode = 0;
    	}
    	$email_key = str_random(40);
    	 $user= User::create(array(
		    'username'			=> Input::get('username'),
			'password' 			=> \Hash::make(Input::get('password')),
			'email' 			=> Input::get('email'),
			'firstName' 		=> Input::get('firstName'),
			'lastName' 			=> Input::get('lastName'),
			'verified' 			=> '0',
			'profileType' 		=> '0',
			'photo' 			=> $filname,
			'photoType' 		=> Input::get('photoType'),
			'role' 				=> '0',
			'active' 			=> '0',
			'online' 			=> '0',
			'unsubscribe' 		=> '0',
			'relationshipGoal' 	=> Input::get('relationshipGoal'),
			'jobAndJobSchedule' 	=> Input::get('jobAndJobSchedule'),
			'yourSocialSituation'	=>  $social_sitatuion,
			'haveChildren'			=> Input::get('haveChildren'),
			'howMany' 				=> Input::get('howMany'),
			'doYouOwnACar' 			=> Input::get('doYouOwnACar'),
			'areYouOnAnyMedication' => Input::get('areYouOnAnyMedication'),
			'howAmbitiousAreYou' 	=> Input::get('howAmbitiousAreYou'),
			'whatIsTheLongestRelationshipYouHaveBeenIn' => Input::get('whatIsTheLongestRelationshipYouHaveBeenIn'),
			'yourBirthFatherAndMotherAre' => Input::get('yourBirthFatherAndMotherAre'),
			'partnerDependability' => Input::get('partnerDependability'),
			'sexualCompatibility' => Input::get('sexualCompatibility'),
			'friendshipBetweenPartners' => Input::get('friendshipBetweenPartners'),
			'drugs' => Input::get('drugs'),
			'hairColor' => Input::get('hairColor'),
			'hairStyle' => Input::get('hairStyle'),
			'eyeColor' => Input::get('eyeColor'),
			'height' => Input::get('height'),
			'bodyType' => Input::get('bodyType'),
			'zodicSign' => Input::get('zodicSign'),
			'smoke' => Input::get('smoke'),
			'drink' => Input::get('drink'),
			'excercise' => Input::get('excercise'),
			'excerciseSchedule' => Input::get('excerciseSchedule'),
			'educationLevel' => Input::get('educationLevel'),
			'language' => Input::get('language'),
			'ethnicity' => Input::get('ethnicity'),
			'religiousBeliefs' => Input::get('religiousBeliefs'),
			'occupation' => Input::get('occupation'),
			'income' => Input::get('income'),
			'movie' => $movie,
			'travel' => $travel,
			'gender' => Input::get('gender'),
			'age' => Input::get('age'),
			'zipcode' => $zipcode,
			'tatoos' => Input::get('tatoos'),
			'wantKids' => Input::get('wantKids'),
			'relationshipStatus' => Input::get('relationshipStatus'),
    	 	'verify_key'  =>  $email_key
		));
    	$lastInsertedId= $user->id;
    	\Session::set('verify_key', $email_key);
    	return \Redirect::to('users/'.Input::get('username').'/about_your_date')->with("verify_key",$email_key);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     
    	$path = "users/".$id."/edit";
    	return View::make('about_your_date')->withusername($path);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
           return 'form db operation will perform here for username: '.$id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function getVerify(){
    	
    	
    }
}
