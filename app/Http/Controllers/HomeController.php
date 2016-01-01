<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
 
	
    public function getIndex()
    {
		$just_registered = \DB::table('users')->get();
    	$online = \DB::table('users') ->leftJoin('user_online', 'users.id', '=', 'user_online.user_id')->get();
    	 
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
	    $events = \DB::table('me_events')->select(\DB::raw("*,DATE_FORMAT(fromDate,'%d') AS single_date,DATE_FORMAT(fromDate,'%b') AS single_month,DATE_FORMAT(fromDate,'%d-%m-%Y') AS fromDate,DATE_FORMAT(toDate,'%d-%m-%Y') AS toDate"))
	    ->orderBy('fromDate', 'desc')->take(2)->get();
		return \View::make('homepage')->with(array("just_registered" => $just_registered, "online" => $online, "events" => $events));
    	
    
	}

    public function getLogin(){
    	
	return \View::make('login');	
    }
    
    public function postLogin(){
    	
    	$cred = array(
    			
    			'username' => \Input::get('username'),
    			'password' => \Input::get('password')
    	);
		if(\Auth::attempt($cred)){
    		return \Redirect::intended('/');
    	}else{
    		return \Redirect::guest('login');
    	}
		
    	//$creds = array('username' => 'hasan' , 'password' => 'abc');
    	//\Auth::attempt($creds);
    	//Redirect::to('users');
		
    	 
    }
    
    public function getLogout(){
    	
    	\Auth::logout();
    	return \Redirect::to('/');
    }
    
   
    
}
