<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Mail;
use DB;
class VerifyController extends Controller
{
 
	
	public function getIndex($id)
    {
    	
    	//dd(\Config::get("mail"));
    	$username = $id;
        $user_id = DB::table('users')->where('username',$id)->pluck('id');
        $email = DB::table('users')->where('username',$id)->pluck('email');
        $image = "images/users/".$username."/".DB::table('users')->where('username',$id)->pluck('photo');
        $name =  DB::table('users')->where('username',$id)->pluck('firstName')." ".DB::table('users')->where('username',$id)->pluck('lastName');
        $verify = DB::table('users')->where('username',$id)->pluck('verify_key');
        $verification_link = "http://localhost/seriousdatings_app/public/users/".$user_id."/verify/".$verify;
        $data= array();
    	$data = [
            'email' => $email,
            'image' => $image,
            'name' => $name,
    		'username' => $id,
    		'verification_link' => $verification_link,
            'image_link'        => 'http://seriousdatings.com/images/logo.jpg',
            'contact_address'   =>  ''
    	];
		
      	Mail::send('mailtemplate', $data, function($message) {
    		$message->to('softechsgd@gmail.com','ID')->subject('Verify your seriousdatings account');
    	});
		
    	//Session::flush();
		 return View::make('verify_email')->withData($data);
	
    }
    
   	
    
 }
 