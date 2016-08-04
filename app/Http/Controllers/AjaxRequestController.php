<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use \App\User;
use App\Compatability;
use DB;

class AjaxRequestController extends Controller
{


    public function getSearchType()
    {
        $dataReceived = Input::get("data");
       
        $data_arr = $dataReceived['data'][0];
       
       $action = $data_arr['action'];
       $type = $data_arr['type'];
       $gender = $data_arr['gender'];
       $ageFrom = intval($data_arr['ageFrom']);
       $ageTo = intval($data_arr['ageTo']);
       $range = intval($data_arr['range']);
       $lati = doubleval($data_arr['lati']) ;
       $longi = doubleval($data_arr['longi']);
    
        $distance = new Compatability();
        
        $users =  $users = DB::table('users')->orderBy($type, 'desc')->get();
        
        $result = array();
        $i=0;
        foreach ($users as $user) {
            $newDistance = $distance -> haversineGreatCircleDistance($lati,$longi,$user -> latitude,$user -> longitude);
            if($newDistance <= $range && $user -> age >= $ageFrom && $user -> age <= $ageTo && $user -> gender == $gender){
                $geocodeFromLatLong = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($user -> latitude).','.trim($user -> longitude).'&sensor=false'); 
                $output = json_decode($geocodeFromLatLong);
                $status = $output->status;
                $location = ($status=="OK")?$output->results[1]->formatted_address:'';


                $geocodeFromLatLong2 = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($lati).','.trim($longi).'&sensor=false'); 
                $output2 = json_decode($geocodeFromLatLong);
                $status2 = $output->status;
                $location2 = ($status=="OK")?$output->results[1]->formatted_address:'';
                $result[$i]  = array('username' => $user -> username,'age' => $user -> age,'firstName' => $user -> firstName,'lastName' => $user -> lastName,'photo' => $user -> photo,'locations' => $location,'location2' => $location2,'gender' => $gender,'ageFrom' => $ageFrom,'ageTo' => $ageTo,'range' => $range,'lati' => $lati, 'longi' => $longi,'gendr' => $gender,'distance' => $newDistance);
                $i++;
            }
        }

      
       // dd($result);
        return json_encode($result);
    }


    public function getIndex()
    {

        //dd($id);
      //  return 'Form Not Submitted Properly';
    }


    public function profileData(){


      $dataReceived = Input::get("data");
      $data_arr = $dataReceived['data'][0];
     
      $action = $data_arr['action'];

      if($action == "sendRequest"){
        $user_id = $data_arr['user_id'];
        $friend_id = $data_arr['friend_id'];
        DB::table('friends')->insert(
            ['user_id' => $user_id, 'friend_id' => $friend_id]
        );
        return 1;
      }
      else if($action == "removeFriendRequest"){
        $user_id = $data_arr['user_id'];
        $friend_id = $data_arr['friend_id'];
        $matchThese = ['user_id' => $user_id, 'friend_id' => $friend_id];
        DB::table('friends')->where($matchThese)->delete();
        return 1;
      }
      else{

        return 0;
      }
    }

    public function updateGroupMember(){

      $dataReceived = Input::get("data");
      $data_arr = $dataReceived['data'][0];
      $action = $data_arr['action'];
      $groupID = $data_arr['groupID'];
      $userID = $data_arr['userID'];
      if($action == "join"){
        DB::table('group_member')->insert(
          ['group_id' => $groupID, 'user_id' => $userID]
        );
      }
      else{
        $matchThese = ['group_id' => $groupID, 'user_id' => $userID]; 
        DB::table('group_member')->where($matchThese)->delete();
      }
      return "1";
    }

}
