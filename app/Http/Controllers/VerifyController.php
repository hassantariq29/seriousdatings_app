<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Mail;
class VerifyController extends Controller
{
 
	
	public function getIndex($id)
    {
    	
    	//dd(\Config::get("mail"));
    	$verify = \DB::table('users')->where('username',$id)->pluck('verify_key');
    	$data= array();
    	$data = [
    		'username' => $id,
    		'contact_address' => "Contact Address",
    		'verification_link' => 'http://localhost/seriousdatings/public/users/hasan/verify/'.$verify,
    		'image_link' => "https://fbcdn-photos-b-a.akamaihd.net/hphotos-ak-xfa1/v/t1.0-0/s200x200/559269_406773439369176_1323302822_n.jpg?oh=edf92db24d1577bcc57c7f1426fd98ef&oe=569B6FEE&__gda__=1453511003_b485a20c04e986aa3105e2c638b2fd96"
    	];
		/*
		Mail::send('mailtemplate', $data, function($message) {
    		$message->to('softechsgd@gmail.com','ID')->subject('Verify your seriousdatings account');
    	});
		*/
    	//Session::flush();
		return "Mail Sent !!";
	
    }
    
   	
    
 }
 