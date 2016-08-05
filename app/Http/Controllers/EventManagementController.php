<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Event;
use View;
use DB;
use Redirect;
use Input;
class EventManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $events = DB::table('events')
        ->leftJoin('eventtype', 'events.eventType', '=', 'eventType.id')
        ->get();
         return \View::make('admin.event.manage_event')->withEvents($events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event = DB::table('eventtype')->get();
        if($event != null){
            return \View::make('admin.event.add_event')->withEvent($event);
        }
        else
        {
            return redirect(url().'/admin/events/addEventType');
        }
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
                'eventCategory' => 'required',
                'title' => 'required',
                'location'    => 'required',
                'fromDate' => 'required',
                'toDate' => 'required',
                'description' => 'required',
                'price' => 'required',
                'uploadpicture' => 'required'
                );
                $validator = \Validator::make(\Input::all(),$rules);
                if($validator->fails())
                    //return ($validator->messages());
                    return \Redirect::to('admin/events/create')
                    ->withInput()
                    ->witherrors($validator->messages());
                $filname = \Input::file('uploadpicture')->getClientOriginalName();
                $imageName = \Input::file('uploadpicture')->getClientOriginalExtension();
                Input::file('uploadpicture')->move(base_path() . '/public/images/events/', $filname);
                $eventCategory = Input::get('eventCategory');
                $title = Input::get('title');
                $location = Input::get('location');
                $fromDate = Input::get('fromDate');
                $toDate = Input::get('toDate');
                $description = Input::get('description');
                $price = Input::get('price');
                
                DB::table('events')->insert(
                    ['eventType' => $eventCategory, 'title' => $title, 'start' => $fromDate, 'endDate' => $toDate, 'eventLocation' => $location,'desc' => $description,'eventPrice' => $price,'image' => $filname]
                );
                 return redirect(url().'/admin/events');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return \View::make('admin.event.edit_event')->withEvent($event);
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
    //return 'form posted';
        $rules = array(
                'eventCategory' => 'required',
                'title' => 'required',
                'location'    => 'required',
                'fromDate' => 'required',
                'toDate' => 'required',
                'description' => 'required',
                'price' => 'required',
                'uploadpicture' => 'required'
                );
                $validator = \Validator::make(\Input::all(),$rules);
                if($validator->fails())
                    //return ($validator->messages());
                    return \Redirect::to('admin/events/create')
                    ->withInput()
                    ->witherrors($validator->messages());
                $filname = \Input::file('uploadpicture')->getClientOriginalName();
                $imageName = \Input::file('uploadpicture')->getClientOriginalExtension();

                $eventCategory = Input::get('eventCategory');
                $title = Input::get('title');
                $location = Input::get('location');
                $fromDate = Input::get('fromDate');
                $toDate = Input::get('toDate');
                $description = Input::get('description');
                $price = Input::get('price');
                
                DB::table('events')->insert(
                    ['eventType' => $eventCategory, 'title' => $title, 'start' => $fromDate, 'endDate' => $toDate, 'evenLocation' => $location,'desc' => $description,'eventPrice' => $price,'image' => $filname]
                );
                 return redirect(url().'/admin/events');
               
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $event = Event::find($id);
        $event->delete();
        // redirect
        \Session::flash('message', 'Successfully deleted the slide!');
        return \Redirect::to('admin/events');
    }


    public function eventTypeForm(){


        return View::make('admin.event.add_event_type');

    }


    public function eventTypePost(Request $request){

        $categoryName = Input::get('categoryName');
        $ageFromMale = Input::get('ageFromMale');
        $ageToMale = Input::get('ageToMale');
        $ageFromFemale = Input::get('ageFromFemale');
        $ageToFemale = Input::get('ageToFemale');
        DB::table('eventtype')->insert(
            ['name' => $categoryName, 'ageFromMale' => $ageFromMale, 'ageToMale' => $ageToMale, 'ageFromFemale' => $ageFromFemale, 'ageToFemale' => $ageToFemale]
        );
         return redirect(url().'/admin/events');


        

    }
}
