<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\Compatability;
use DB;
use Auth;
use Redirect;
use Input;

class DatingPlanController extends Controller
{
 
	
    public function getIndex()
    {
    	if (Auth::check())
        {
            $plans = DB::table('dating_plan')->get();
            foreach ($plans as $plan) {
                $total_cycle = $plan -> noOfDay;
                $discountPrice = ($plan -> discountPercentage / 100 ) * $plan -> price;
                $cycle_amount = round(($plan -> price - $discountPrice) / $total_cycle,2);
                $plan->discountPrice = $cycle_amount;
            }
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
        //dd($plan);

        if($plan -> type == "Daily"){
           
            $cycle = 'D';
            $total_cycle = $plan -> noOfDay;
            $discountPrice = ($plan -> discountPercentage / 100 ) * $plan -> price;
            $cycle_amount = round(($plan -> price - $discountPrice) / $total_cycle,2);
            
       
        }
        else if($plan -> type == "Monthly"){
            $cycle = 'M';
            $total_cycle = $plan -> noOfDay;
            $discountPrice = ($plan -> discountPercentage / 100 ) * $plan -> price;
            $cycle_amount = round(($plan -> price - $discountPrice) / $total_cycle,2);
        }
        else{
            $cycle = 'Y';
            $total_cycle = $plan -> noOfDay;
            $discountPrice = ($plan -> discountPercentage / 100 ) * $plan -> price;
            $cycle_amount = round(($plan -> price - $discountPrice) / $total_cycle,2);
        }
        $product_name = $plan -> name;
        $product_currency = 'USD';
        //Here we can use paypal url or sanbox url.
        $paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
        //Here we can used seller email id. 
        $merchant_email = 'zicake-facilitator-1@lackmail.ru';
        //here we can put cancle url when payment is not completed.
        $cancel_return = url()."/datingPlan/".$planID."/cancel";
        //here we can put cancle url when payment is Successful.
        $success_return = url()."/datingPlan/".$planID."/success";
        
        $result  = array(
                        
                        'url' => $paypal_url,
                        'merchant_email' => $merchant_email,
                        'product_name' => $plan -> name,
                        'total_cycle' => $total_cycle,
                        'cycle_amount' => $cycle_amount,
                        'cycle' => $cycle,
                        'product_currency' => $product_currency,
                        'cancel_return' => $cancel_return,
                        'success_return' => $success_return,
                        'planID' => $planID,
                        'user_id' => Auth::user() -> id
                        
                        );
        return \View::make('paypalSubscribe')->with("data",$result);
        
 
    }
    
    public function cancel ($planID){

    }

    public function success ($planID){

        dd($_POST);
        $product_no = $_REQUEST['item_number']; // Product ID
            $product_transaction = $_REQUEST['tx']; // Paypal transaction ID
            $product_price = $_REQUEST['amt']; // Paypal received amount value
            $product_currency = $_REQUEST['cc']; // Paypal received currency type
            $product_status = $_REQUEST['st']; // Paypal product status  


        dd($product_transaction);
    }

    public function succes(){

        
        $user_id = Input::Get('user_id'); 
        $planID = Input::Get('plan_id');
        dd($_POST);

        DB::table('friends')->insert(
            ['user_id' => $user_id, 'friend_id' => $friend_id]
        );
    }
    
    	
 
}
