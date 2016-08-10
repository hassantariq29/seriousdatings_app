<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\Compatability;
use DB;
use Auth;
use Redirect;

class DatingPlanController extends Controller
{
 
	
    public function getIndex()
    {
    	if (Auth::check())
        {
            $plans = DB::table('dating_plan')->get();
            // return "Dating Plan";
            $result  = array(
                'current_user' => array(
                                'username' => 'abc'
                                ),
                'plans'         => $plans 
            );
            return \View::make('datingPlan')->with("data",$result);
        }
        else{

            return redirect(url().'/login');
        }

        
    }

    public function subscribe($planID){

        $plan = DB::table('dating_plan')->where('id','=',$planID)->first();
        dd($plan);
    }
    
    
    	
 }
 