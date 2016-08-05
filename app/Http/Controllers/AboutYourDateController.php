<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Input;

use Redirect;

use Illuminate\Support\Facades\View;
use Auth;


class AboutYourDateController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        if(Auth::user())
    	{
        	$zipcode = "0";
        	$query = @unserialize(file_get_contents('http://ip-api.com/php/'));
        	if($query && $query['status'] == 'success') {
        		if(strlen($zipcode) < 1){
        			$zipcode = "0";
        		}
        		else{
        			$zipcode = $query['zip'];
        		}
        	}
        	else{
        		$zipcode = "0";
        	}
        	return \View::make('about_your_date')->with(array("id" => $id, "zipcode" => $zipcode));
        }
        else{

            return redirect(url().'/login');
        }
    	
   }
	public function create()
    {
    	//return Redirect::to('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {


    	$rules = array(
    			'ageFrom' => 'required',
    			'ageTo'	   => 'required',
    			'rangeOfMiles' => 'required',
    			'gender' => 'required',
                'user_id' => ' unique:about_your_date'
                

    	);
    	$validator = \Validator::make(Input::all(),$rules);
    	if($validator->fails())
    		return Redirect::to('users/'.Input::get('user_id').'/about_your_date')
    		->withInput()
    		->witherrors($validator->messages());
    	
    			\DB::table('about_your_date')->insert([
    					'relationshipGoal' => Input::get('relationshipGoal'),
    					'haveChildren' => Input::get('haveChildren'),
    					'whatIsTheLongestRelationshipYouHaveBeenIn' => Input::get('whatIsTheLongestRelationshipYouHaveBeenIn'),
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
    					'income' => Input::get('income'),
    					'gender' => Input::get('gender'),
    					'zipcode' => Input::get('zipcode'),
    					'tatoos' => Input::get('tatoos'),
    					'relationshipStatus' => Input::get('relationshipStatus'),
    					'wantKids' => Input::get('wantKids'),
    					'rangeOfMiles' => Input::get('rangeOfMiles'),
    					'age_from' => Input::get('ageFrom'),
    					'age_to' => Input::get('ageTo'),
    					'user_id' =>  Input::get('user_id'),
    					'motherBorn' => Input::get('motherBorn'),
    					'fatherBorn' => Input::get('fatherBorn'),
                        'latitude' => Input::get('lati'),
                        'longitude' => Input::get('longi')
                        

    			]);
    			return Redirect::to('users/'.Input::get("user_id").'/compatability');
    			
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
    
}
