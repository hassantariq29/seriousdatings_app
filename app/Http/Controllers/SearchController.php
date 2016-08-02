<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use \App\User;
use App\Compatability;
use DB;

class SearchController extends Controller
{



    public function getLnt($zip){
        $url = "http://maps.googleapis.com/maps/api/geocode/json?address=".urlencode($zip)."&sensor=false";
        $result_string = file_get_contents($url);
        $result = json_decode($result_string, true);
        $result1[]=$result['results'][0];
        $result2[]=$result1[0]['geometry'];
        $result3[]=$result2[0]['location'];
        return $result3[0];
    }

    public function postIndex()
    {


        $myGender = Input::get("myGender");
        $gender = Input::get("gender");
        $ageFrom = Input::get("age_from");
        $ageTo = Input::get("age_to");
        $zipCode = Input::get("zipcode");
        $range = Input::get("range");

        $getLocation = new SearchController();
        $val = $getLocation -> getLnt($zipCode);
        $lati = $val['lat'];
        $longi = $val['lng'];


        $distance = new Compatability();
        
        $users =  $users = DB::table('users')->get();
        
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
                $result[$i]  = array('username' => $user -> username,'age' => $user -> age,'firstName' => $user -> firstName,'lastName' => $user -> lastName,'photo' => $user -> photo,'location' => $location,'location2' => $location2,'gender' => $gender,'ageFrom' => $ageFrom,'ageTo' => $ageTo,'range' => $range,'lati' => $lati, 'longi' => $longi,'gendr' => $gender);
                $i++;
            }
        }

        return View::make('search')->withusers($result);
       // dd($_POST);

        //return 'search';
    }

    public function getIndex()
    {

        //dd($id);
        return 'Form Not Submitted Properly';
    }



}
