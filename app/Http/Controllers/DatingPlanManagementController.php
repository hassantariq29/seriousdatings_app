<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\DatingPlan;
class DatingPlanManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datingPlans = DatingPlan::all();
        if ($datingPlans === null) {
            $datingPlans = null;
		}
		return $datingPlans;
        // return \View::make('admin.manage_datingPlans')->withDatingPlans($datingPlans);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return \View::make('admin.add_datingPlan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
                'name' 				=> 'required',
				'price' 			=> 'required',
                'description'    	=> 'required'
                );
        $validator = \Validator::make(\Input::all(),$rules);
                if($validator->fails())
                    return Redirect::to('admin/dating_plans/create')
                    ->withInput()
                    ->witherrors($validator->messages());
                 $datingPlan= DatingPlan::create(array(
                    'name'          => \Input::get('name'),
                    'price'         => \Input::get('price'),
                    'description'   => \Input::get('description')
                ));
                return \Redirect::to('admin/dating_plans');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $datingPlan = DatingPlan::find($id);
        //return \View::make('admin.view_dating_plan')->withDatingPlan($datingPlan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datingPlan = DatingPlan::find($id);
        //return \View::make('admin.edit_dating_plan')->withDatingPlan($datingPlan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = array(
                'name' 				=> 'required',
				'price' 			=> 'required',
                'description'    	=> 'required'
                );
        $validator = \Validator::make(\Input::all(),$rules);
                if($validator->fails())
                    return Redirect::to('admin/dating_plans/create')
                    ->withInput()
                    ->witherrors($validator->messages());
					
				$datingPlan = DatingPlan::find($id);
                $datingPlan->name = \Input::get('name');
				$datingPlan->price = \Input::get('price');
				$datingPlan->description = \Input::get('description');
                $datingPlan->save();
                \Session::flash('message', 'Successfully updated!');
                return \Redirect::to('admin/dating_plans');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datingPlan = DatingPlan::find($id);
        $datingPlan->delete();
        // redirect
        \Session::flash('message', 'Successfully deleted!!');
        return \Redirect::to('admin/dating_plans');
    }
}
