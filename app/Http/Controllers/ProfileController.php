<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use \App\User;
use \App\Http\Controllers\Auth;
use DB;
class ProfileController extends Controller
{


    public function getIndex()
    {

        $current_user = \Auth::user();
        $all_users = User::all();
        $friends = DB::table('friends')
                     ->leftJoin('users', function($join)
                         {
                             $join->on('friends.friend_id', '=', 'users.id');
                             
                         })
                     ->where('friends.user_id', '=', $current_user -> id)
                     ->get();
        
        $url = "http://maps.googleapis.com/maps/api/geocode/json?address=".urlencode($current_user -> zipcode)."&sensor=false";
        $result_string = file_get_contents($url);
        $result = json_decode($result_string, true);
        $result1[]=$result['results'][0];
        $formatted_address=$result1[0]['formatted_address'];
       
        foreach ($friends as $friend) {
            
            $friend->formatted_address = $formatted_address;
        }


        $data = array(
            'current_user' 	=> $current_user,
            'all_users'		=> $all_users,
            'friends'       => $friends
        );
        //dd($data);
        return View::make('after_login')->withData($data);
    }





}
