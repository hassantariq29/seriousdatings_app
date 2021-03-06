<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Mail;
use DB;
class UserPublicPhotoController extends Controller
{
 
	
	public function getIndex($id)
    {
    	
    	$username = $id;
        $user_id = DB::table('users')->where('username',$id)->pluck('id');
        $profile_pic = DB::table('users')->where('username',$id)->pluck('photo');

        $pictures = DB::table('user_pictures')->where('user_id',$user_id)->get();
        
        
       
         $data = array(
                        'pictures' => $pictures,
                        'username' => $username,
                         'profile_pic' => $profile_pic
      

                  );
       	//Session::flush();
		 return View::make('UserPublicPhoto')->withData($data);
	
    }
    
   	
    
 }
 