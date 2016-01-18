<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Event;

class EventManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $events = Event::all();
         if ($events === null) {
            $events = null;
        }
         return \View::make('admin.event.manage_event')->withEvents($events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \View::make('admin.event.add_event');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return 'form posted';
        $rules = array(
                'title' => 'required',
                'location'    => 'required',
                'fromDate' => 'required',
				'toDate' => 'required',
				'fromAge' => 'required',
				'toAge' => 'required',
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
                \Input::file('uploadpicture')->move(base_path() . '/public/images/events/', $filname);
                 $event= Event::create(array(
                    'title'          => \Input::get('title'),
					'location'          => \Input::get('location'),
					'fromDate'          => \Input::get('fromDate'),
					'toDate'          => \Input::get('toDate'),
					'ageFrom'          => \Input::get('fromAge'),
					'ageTo'          => \Input::get('toAge'),
					'description'    => \Input::get('description'),
					'charge'   		 => \Input::get('price'),
					'image'          => $filname
                ));
                return \Redirect::to('admin/events');
    
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
                'title' => 'required',
                'location'    => 'required',
                'fromDate' => 'required',
				'toDate' => 'required',
				'fromAge' => 'required',
				'toAge' => 'required',
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
                \Input::file('uploadpicture')->move(base_path() . '/public/images/events/', $filname);
                $event = Event::find($id);
                $event->title = \Input::get('title');
                $event->location = \Input::get('location');
				$event->fromDate = \Input::get('fromDate');
				$event->toDate = \Input::get('toDate');
				$event->ageFrom = \Input::get('fromAge');
				$event->ageTo = \Input::get('toAge');
				$event->description = \Input::get('description');
				$event->charge = \Input::get('price');
				$event->image = $filname;
                $event->save();
                \Session::flash('message', 'Successfully updated slide!');
                return \Redirect::to('admin/events');
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
}
