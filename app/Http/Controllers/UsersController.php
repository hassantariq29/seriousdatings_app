<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Input;
use App\User;
use DB;
use Auth;
class UsersController extends Controller 

	
{
    
	public function __construct(){
	
		$this ->beforefilter('exists',array('only' => array('show', 'edit', 'update', 'destroy') ));
	}	
	
	
	public function index()
    {
    	if(isset($_GET['email'])){ 
	    	$email = $_GET['email'];
	    	$result = \DB::table('users')->where('email', $email)->get();
	    		if($result == null){
	    			return '1';
	    		}
	    		else{
	    			return '0';
	    		}
	  	}
        return redirect(url());
    }

    public function create()
    {
    	return View::make('signup');
        
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
				'photoType' => 'required',
                'photo' => 'required',
                'relationshipStatus' => 'required',
                'birthYear' => 'required',
                'birthMonth' => 'required',
                'birthDay' => 'required',
                'gender' => 'required',
                'tatoos' => 'required',
                'wantKids' => 'required',
                'relationshipGoal' => 'required',
                'occupation' => 'required',
                'income' => 'required',
                'jobAndJobSchedule' => 'required',
                'haveChildren' => 'required',
                'doYouOwnACar' => 'required',
                'fatherBorn' => 'required',
                'areYouOnAnyMedication' => 'required',
                'motherBorn' => 'required',
                'howAmbitiousAreYou' => 'required',
                'whatIsTheLongestRelationshipYouHaveBeenIn' => 'required',
                'partnerDependability' => 'required',
                'sexualCompatibility' => 'required',
                'friendshipBetweenPartners' => 'required',
                'drugs' => 'required',
                'hairColor' => 'required',
                'hairStyle' => 'required',
                'eyeColor' => 'required',
                'height' => 'required',
                'bodyType' => 'required',
                'zodicSign' => 'required',
                'smoke' => 'required',
                'drink' => 'required',
                'excercise' => 'required',
                'educationLevel' => 'required',
                'language' => 'required',
                'ethnicity' => 'required',
                'religiousBeliefs' => 'required'
                );
    	
    	$validator = \Validator::make(Input::all(),$rules);
    	if($validator->fails()) {
			//return $validator->messages();
			
            \Session::flash('message', $validator->messages());
           // return \Redirect::back();
    		/*
            return \Redirect::to('users/create')
    				->withInput()
    				->witherrors($validator->messages());
                    */
                    
                    
			
		}
    	$filname = Input::file('photo')->getClientOriginalName();
    	$imageName = Input::file('photo')->getClientOriginalExtension();
    	Input::file('photo')->move(base_path() . '/public/images/users/'.Input::get('username').'/', $filname);
    	
    	$movies   	=  Input::get('movies');
    	$travels  	=  Input::get('travel');
    	$socials 	=  Input::get('yourSocialSituation');
    	$movie="";
    	$travel="";
    	$social_sitatuion = "";
    	
    	foreach ($movies as $movi ){$movie .= $movi.",";}
    	foreach ($travels as $travl ){$travel  .= $travl.",";}
    	foreach ($socials as $social ){$social_sitatuion .= $social.",";}
    	
        $zipcode = 0;
        $lati = 0;
        $longi = 0;
    	$query = @unserialize(file_get_contents('http://ip-api.com/php/'));
        // dd($query);
    	if($query && $query['status'] == 'success') {
    		$zipcode = $query['zip'];
            $lati = $query['lat'];
            $longi = $query['lon'];
    	}
        else{
    		$zipcode = 0;
            $lati = 0;
            $longi = 0;
    	}
        

        //dd($lati." ".$longi);
    	$email_key = str_random(40);

        $birthYear =  Input::get('birthYear');
        $birthMonth =  Input::get('birthMonth');
        $birthDay =  Input::get('birthDay');
        $birthFrom = $birthYear."-".$birthMonth."-".$birthDay;
        $to   = new \DateTime('today');
        $age =  date_diff(date_create($birthFrom), date_create('today'))->y;
        if($zipcode == ""){
            $zipcode = "85054";
        }
       // dd($zipcode);
       // dd($birthFrom);

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
			'role' 				=> 'user',
			'active' 			=> '0',
			'online' 			=> '0',
			'unsubscribe' 		=> '1',
			'relationshipGoal' 	=> Input::get('relationshipGoal'),
			'jobAndJobSchedule' 	=> Input::get('jobAndJobSchedule'),
			'yourSocialSituation'	=>  $social_sitatuion,
			'haveChildren'			=> Input::get('haveChildren'),
			'howMany' 				=> Input::get('howMany'),
			'doYouOwnACar' 			=> Input::get('doYouOwnACar'),
			'areYouOnAnyMedication' => Input::get('areYouOnAnyMedication'),
			'howAmbitiousAreYou' 	=> Input::get('howAmbitiousAreYou'),
			'whatIsTheLongestRelationshipYouHaveBeenIn' => Input::get('whatIsTheLongestRelationshipYouHaveBeenIn'),
			'yourBirthFatherAndMotherAre' => '',
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
			'age' => $age,
			'zipcode' => $zipcode,
			'tatoos' => Input::get('tatoos'),
			'wantKids' => Input::get('wantKids'),
			'relationshipStatus' => Input::get('relationshipStatus'),
    	 	'verify_key'  =>  $email_key,
            'fatherBorn'  =>  Input::get('fatherBorn'),
            'motherBorn'  =>  Input::get('motherBorn'),
            'latitude'  =>  $lati,
            'longitude'  =>  $longi
             
		));
    	$lastInsertedId= $user->id;

    	\Session::set('verify_key', $email_key);

        $id = \DB::table('role_user')->insertGetId(
        ['user_id' => $lastInsertedId, 'role_id' => 3]
        );

        $cred = array(
                
                'username' => Input::get('username'),
                'password' => Input::get('password')
        );
        //dd($cred);
        if(\Auth::attempt($cred)){
    	   return \Redirect::to('users/'.Input::get('username').'/about_your_date')->with("verify_key",$email_key);
        }
        
        
        
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		//dd($id);
		//$user = User::whereUsername($id)->first();
		$results = User::all();
		//$results = array();
		//dd($results);
		//return \View::make('search')->withResults($results);
		//return \View::make('search')->withUser($user);
		$logged_in = 0;
            if (Auth::check())
                {
                     $logged_in = Auth::user() -> id;
                
            $current_user = User::where('username', $id)->first();
            $user_id = $current_user -> id;
            $role_user = DB::table('role_user')->where('user_id', $logged_in)->pluck('role_id');
            if($role_user != 4){
                $role_user_status = 0;
            }
            else{
                $role_user_status = 1;
            }
            
                

            $matchThese = ['user_id' => $logged_in, 'friend_id' => $user_id]; 
            //dd($matchThese);       
             $friend_user = DB::table('friends')
                ->where( $matchThese)
                ->pluck('id');
            if($friend_user < 1){

                      $friend_status = 0;
          
            }
            else{

                $friend_status = 1;
            }

            $current_user->role_user_status = $role_user_status;
            $current_user->friend_status = $friend_status;
            $current_user->user_id = $logged_in;
            $current_user->friend_id = $user_id;
        
        
       // dd($current_user);
        //$current_user = User::findOrNew($id);
		//dd($current_user);

		//$all_users = User::all();

		return View::make('user_profile')->withUser($current_user);
        }
        else{

            return redirect(url().'/login');
        }

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
