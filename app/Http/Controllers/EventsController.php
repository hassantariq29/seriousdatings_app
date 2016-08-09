<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Redirect;
use Auth;
use View;
use Input;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $events = DB::table('events')
        ->leftJoin('eventType', 'events.eventType', '=', 'eventType.id')
        ->get();

         $eventCategory = DB::table('eventType')->get();

        $encodedEvents = json_encode($events);

        $data = array(
                        'events'           => $events,
                        'encodedEvents'    => $encodedEvents,
                        'eventCategory'    => $eventCategory
                    );
       // dd($data);
        return \View::make('events')->withEvents($data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eventId = Input::get('eventId');
        if($eventId != null){
            $logged_in = 0;
            if (Auth::check())
            {
                $user_id = Auth::user() -> id;
            }
            DB::table('me_events')->insert(
                ['user_id' => $user_id, 'eventId' => $eventId]
            );
            return View::make('eventRegisterSuccess');
        }
        else{

            return "Form not submitted properly";
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $logged_in = 0;
             if (Auth::check())
            {
                 $logged_in = Auth::user() -> id;
            }
        $singleEvent = DB::table('events')
                     ->leftJoin('eventType', function($join)
                         {
                             $join->on('events.eventType', '=', 'eventType.id');
                             
                         })
                     ->where('events.title', '=', $id)
                     ->get();
        if($singleEvent != null){
        $eventId = $singleEvent['0'] -> id;

        $matchThese = ['user_id' => $logged_in, 'eventId' => $eventId]; 
        //dd($matchThese);       
         $eventCheck = DB::table('me_events')
            ->where( $matchThese)
            ->pluck('id');
        $eventRegisterStatus = 0;
        if($eventCheck != null){

                    $eventRegisterStatus = 1;
                }
                else{

                   $eventRegisterStatus = 0;

                }
                $role_user = DB::table('role_user')->where('user_id', $logged_in)->pluck('role_id');
                $role_user_status = 0;
                if($role_user != null){
                    if($role_user != 4){
                        $role_user_status = 1;
                    }
                    else{
                        $role_user_status = 2;
                    }
                }
                else{

                    $role_user_status = 0;
                }
        
                $singleEvent[0]->role_user_status = $role_user_status;
                $singleEvent[0]->eventRegisterStatus = $eventRegisterStatus;
        }
         //dd($singleEvent);
         return View::make('eventsSingle')->withEvent($singleEvent);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function eventCategory($id)
    {
        
        $events = DB::table('events')
        ->leftJoin('eventType', 'events.eventType', '=', 'eventType.id')
        ->where('events.eventType', '=', $id)
        ->get();
        if($events != null){
        $eventTypeString = $events['0'] -> name." Women ".$events['0'] -> ageFromFemale." - ".$events['0'] -> ageToFemale." / Men ".$events['0'] -> ageFromMale." - ".$events['0'] -> ageToMale;

        $encodedEvents = json_encode($events);
        

        $data = array(
                        'events'           => $events,
                        'encodedEvents'    => $encodedEvents,
                        'eventTypeString'   =>$eventTypeString
                    );
    }
    else{

        $data = array();
    }
        //dd($data);
        //dd($data);
        return \View::make('eventsGroup')->withEvents($data);
    }

    
}
