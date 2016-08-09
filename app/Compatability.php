<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use DB;

class compatability extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable;
    use CanResetPassword;
    use EntrustUserTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'compatability';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'match_id', 'percentage'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['password', 'remember_token'];


     public function  haversineGreatCircleDistance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 3959)
        {
          // convert from degrees to radians
          $latFrom = deg2rad($latitudeFrom);
          $lonFrom = deg2rad($longitudeFrom);
          $latTo = deg2rad($latitudeTo);
          $lonTo = deg2rad($longitudeTo);

          $latDelta = $latTo - $latFrom;
          $lonDelta = $lonTo - $lonFrom;

          $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
            cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
          return $angle * $earthRadius;
        }   

     public function generateCompatibles($id){

       
       $users = DB::table('users')->get();
       $about_your_date = DB::table('about_your_date')->where('user_id', $id)->first();
       

       
       foreach ($users as $user) {
             $count = 0;
           
                if($user -> relationshipGoal == $about_your_date['relationshipGoal']){ $count++;}
                if($user -> haveChildren == $about_your_date[' haveChildren']){ $count++;}
                if($user -> whatIsTheLongestRelationshipYouHaveBeenIn == $about_your_date['whatIsTheLongestRelationshipYouHaveBeenIn']){ $count++;}
                if($user -> partnerDependability == $about_your_date['partnerDependability']){ $count++;}
                if($user -> sexualCompatibility == $about_your_date['sexualCompatibility']){ $count++;}
                if($user -> friendshipBetweenPartners == $about_your_date['friendshipBetweenPartners']){ $count++;}
                if($user -> drugs == $about_your_date['drugs']){ $count++;}
                if($user -> hairColor == $about_your_date['hairColor']){ $count++;}
                if($user -> hairStyle == $about_your_date['hairStyle']){ $count++;}
                if($user -> eyeColor == $about_your_date['eyeColor']){ $count++;}
                if($user -> height == $about_your_date['height']){ $count++;}
                if($user -> bodyType == $about_your_date['bodyType']){ $count++;}
                if($user -> zodicSign == $about_your_date['zodicSign']){ $count++;}
                if($user -> smoke == $about_your_date['smoke']){ $count++;}
                if($user -> drink == $about_your_date['drink']){ $count++;}
                if($user -> excercise == $about_your_date['excercise']){ $count++;}
                if($user -> excerciseSchedule == $about_your_date['excerciseSchedule']){ $count++;}
                if($user -> educationLevel == $about_your_date['educationLevel']){ $count++;}
                if($user -> language == $about_your_date['language']){ $count++;}
                if($user -> ethnicity == $about_your_date['ethnicity']){ $count++;}
                if($user -> religiousBeliefs == $about_your_date['religiousBeliefs']){ $count++;}
                if($user -> income == $about_your_date['income']){ $count++;}
                if($user -> gender == $about_your_date['gender']){ $count++;}
                if($user -> tatoos == $about_your_date['tatoos']){ $count++;}
                if($user -> relationshipStatus == $about_your_date['relationshipStatus']){ $count++;}
                if($user -> wantKids == $about_your_date['wantKids']){ $count++;}
                if($user -> motherBorn == $about_your_date['motherBorn']){ $count++;}
                if($user -> fatherBorn == $about_your_date['fatherBorn']){ $count++;}
                $compatability = new compatability();
                $distance = $compatability -> haversineGreatCircleDistance($about_your_date['latitude'], $about_your_date['longitude'], $user -> latitude, $user -> longitude);
                if($distance <= $about_your_date['rangeOfMiles']){$count++;}
                //if($user -> rangeOfMiles == $about_your_date['rangeOfMiles']){ $count++;}
                if($user -> age >= $about_your_date['age_from'] && $user -> age <= $about_your_date['age_to']){ $count++;}
                
                $percentage = ($count*100) / 30;
                DB::table('compatability')->insert(
                    ['user_id' => $id, 'match_id' => $user->id, 'percentage' => $percentage]
                );
     }

     

    }

    
    public function  showCompatability($id){


        $result  = array(
                             'slider'        =>  array(
                                                        '0' => array('i' => '1','username' => 'hasan', 'firstName' => 'Hassan', 'lastName' => 'Tariq', 'image' => '20150222_115424.jpg','percentage' => '15'),
                                                        '1' => array('i' => '2','username' => 'hasan', 'firstName' => 'Hassan', 'lastName' => 'Tariq', 'image' => '20150222_115424.jpg','percentage' => '15'),
                                                        '2' => array('i' => '3','username' => 'hasan', 'firstName' => 'Hassan', 'lastName' => 'Tariq', 'image' => '20150222_115424.jpg','percentage' => '15'),
                                                        '3' => array('i' => '4','username' => 'hasan', 'firstName' => 'Hassan', 'lastName' => 'Tariq', 'image' => '20150222_115424.jpg','percentage' => '15')
                            
                                                ),
                             
                             'newsFeed'      =>  array(
                                                        '0' => array('i' => '1','username' => 'hasan', 'firstName' => 'Hassan', 'lastName' => 'Tariq', 'image' => '20150222_115424.jpg','percentage' => '15'),
                                                        '1' => array('i' => '2','username' => 'hasan', 'firstName' => 'Hassan', 'lastName' => 'Tariq', 'image' => '20150222_115424.jpg','percentage' => '15'),
                                                        '2' => array('i' => '3','username' => 'hasan', 'firstName' => 'Hassan', 'lastName' => 'Tariq', 'image' => '20150222_115424.jpg','percentage' => '15'),
                                                        '3' => array('i' => '4','username' => 'hasan', 'firstName' => 'Hassan', 'lastName' => 'Tariq', 'image' => '20150222_115424.jpg','percentage' => '15')
                            
                                                ),
                             

                            'justRegistered' =>  array(
                                                        '0' => array('i' => '1','username' => 'hasan', 'firstName' => 'Hassan', 'lastName' => 'Tariq', 'image' => '20150222_115424.jpg','percentage' => '15'),
                                                        '1' => array('i' => '2','username' => 'hasan', 'firstName' => 'Hassan', 'lastName' => 'Tariq', 'image' => '20150222_115424.jpg','percentage' => '15'),
                                                        '2' => array('i' => '3','username' => 'hasan', 'firstName' => 'Hassan', 'lastName' => 'Tariq', 'image' => '20150222_115424.jpg','percentage' => '15'),
                                                        '3' => array('i' => '4','username' => 'hasan', 'firstName' => 'Hassan', 'lastName' => 'Tariq', 'image' => '20150222_115424.jpg','percentage' => '15')
                            
                                                ),

                            'verifyKey'     =>  'verify/thiswillbeverifykey'
                            
        );
        $compatibles = DB::table('compatability')
                     ->leftJoin('users', function($join)
                         {
                             $join->on('compatability.match_id', '=', 'users.id');
                             
                         })
                     ->where('compatability.user_id', '=', $id)
                     ->get();
        
        $slider  = array();
        $i=0;
        foreach ($compatibles as $c ) {
            
            $slider[$i]  = array(
                'i' =>  ++$i,
                'username' => $c -> username,
                'firstName' => $c -> firstName,
                'lastName' => $c -> lastName,
                'image' => $c -> photo
                );
            
        }

        $justRegistered = DB::table('users')->orderBy('id', 'desc')->get();

         $just  = array();
         $i=0;
        foreach ($justRegistered as $j ) {
            
            $just[$i]  = array(
                'i' =>  ++$i,
                'username' => $j -> username,
                'firstName' => $j -> firstName,
                'lastName' => $j -> lastName,
                'image' => $j -> photo
                );
            
        }

        $verifyKey = DB::table('users')->where('username', '=', $id)->pluck('verify_key');
        $result  = array(
                             'slider'        =>  $slider,
                             
                             'newsFeed'      =>  $just,
                             

                            'justRegistered' =>  $just,

                            'verifyKey'     =>  'verify'
                            
        );


        
       return $result;
       

    }

}
