<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Mail;
use DB;
class UserPublicVideoController extends Controller
{
 
	
	public function getIndex($id)
    {
    	
    	$username = $id;
        $user_id = DB::table('users')->where('username',$id)->pluck('id');
        $profile_pic = DB::table('users')->where('username',$id)->pluck('photo');

        $videos = DB::table('user_videos')->where('user_id',$user_id)->get();
        
        

$data = array(
                        'videos' => $videos,
                        'username' => $username,
                         'profile_pic' => $profile_pic
      

                  );
       
       	//Session::flush();
		 return View::make('UserPublicVideo')->withData($data);
	
    }
    
   	
    
 }
 