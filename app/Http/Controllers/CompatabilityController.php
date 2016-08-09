<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\Compatability;
use Auth;
use Redirect;

class CompatabilityController extends Controller
{
 
	
    public function getIndex($id)
    {
        if(Auth::check()){
    	// First Generating List
    	$compat = new Compatability();
    	$compat->generateCompatibles($id);
    	// Getting List Of Compatibles From Model Class and Passing To View
    	$result = $compat->showCompatability($id);
    	 
    	//dd($result);
    	
    
         
        return \View::make('compatability_slider')->with("data",$result);
        }
        else{
            return redirect(url().'/login');
        }

        
    }
    
    
    	
 }
 