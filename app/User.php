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

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable;
    use CanResetPassword;
    use EntrustUserTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['email', 'password'];

    protected $fillable = ['username','password','email','firstName','lastName','verified','profileType','photo','photoType','role','active','online','timeActivated','unsubscribe','relationshipGoal','jobAndJobSchedule','yourSocialSituation','haveChildren','howMany','doYouOwnACar','areYouOnAnyMedication','howAmbitiousAreYou','whatIsTheLongestRelationshipYouHaveBeenIn','yourBirthFatherAndMotherAre','partnerDependability','sexualCompatibility','friendshipBetweenPartners','drugs','hairColor','hairStyle','eyeColor','height','bodyType','zodicSign','smoke','drink','excercise','excerciseSchedule','educationLevel','language','ethnicity','religiousBeliefs','occupation','income','movie','travel','gender','age','zipcode','tatoos','wantKids','relationshipStatus','motherBorn','fatherBorn','remember_token','verify_key','latitude','longitude'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
}
