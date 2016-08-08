<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Redirect;
use Input;
use View;
use Carbon\carbon;
class HomeController extends Controller
{
 
	
    public function getIndex()
    {
		$just_registered = \DB::table('users')->get();
    	$online = \DB::table('user_online') ->leftJoin('users', 'users.id', '=', 'user_online.user_id')->get();
    	 
    	$count = 0;
    	foreach ($just_registered as $registered){
	    	$count = $count++;
	    	if($count ==  0){
	    		$registered->count = 1;
	    	}
	    	else if($count < 6){
	    		$registered->count = 0;
	    	}
	    	else if($count == 6){
	    		$registered->count = 2;
	    		$count = 0;
	    	}
	    }
	    $count = 0;
	    foreach ($online as $on){
	    	$count = $count++;
	    	$on->online = 0;
	    	if($count ==  0){
	    		$on->count = 1;
	    	}
	    	else if($count < 6){
	    		$on->count = 0;
	    	}
	    	else if($count == 6){
	    		$on->count = 2;
	    		$count = 0;
	    	}
	    	if(strlen($on->time) > 0){
	    		$on->online = 1;
	    	}
	    		
	    	
	    }
	    
	    $video = DB::table('videos')->first();

	    $giftCards = DB::table('gift_cards')->get();


	    $slides = DB::table('slider')->get();
	    
	    //dd($giftCards);
	    $events = DB::table('events')->select(\DB::raw("*,DATE_FORMAT(start,'%d') AS single_date,DATE_FORMAT(endDate,'%b') AS single_month,DATE_FORMAT(start,'%d-%m-%Y') AS fromDate,DATE_FORMAT(endDate,'%d-%m-%Y') AS toDate"))
	    ->orderBy('start', 'desc')->take(2)->get();
		
	   // / dd($video);
		return View::make('homepage')->with(array("just_registered" => $just_registered, "online" => $online, "events" => $events,"video" => $video,'giftCards' => $giftCards,'slides' => $slides));
    	
    
	}

    public function getLogin(){
    	
    	if(Auth::check()){
			
			return Redirect::intended('/');
		}	
		else{
			return \View::make('login');
		}
    }
    
    public function postLogin(){
    	
    	$cred = array(
    			
    			'username' => Input::get('username'),
    			'password' => Input::get('password')
    	);
        //dd($cred);
		if(\Auth::attempt($cred)){

			 $user_id = Auth::user() -> id;
			 $date_time = Carbon::now();
			 DB::table('user_online')->insert(
			    ['user_id' => $user_id,'time' => $date_time]
			);

			 	$id = DB::table('role_user')->where('user_id','=',$user_id)->first();
			  	if($id -> role_id == 2){
			  		return redirect(url().'/admin');
			  	}
			  	else{
    				return Redirect::intended('/');
    			}
    	}
    	else{
    		return Redirect::guest('login');
    	}
		
    	//$creds = array('username' => 'hasan' , 'password' => 'abc');
    	//\Auth::attempt($creds);
    	//Redirect::to('users');
		
    	 
    }
    
    public function getLogout(){
    	
    	$user_id = Auth::user() -> id;
    	Auth::logout();
    	DB::table('user_online')->where('user_id', '=', $user_id)->delete();
    	//dd("logged out");
    	return Redirect::to('/');
    }
    
   
    
}
