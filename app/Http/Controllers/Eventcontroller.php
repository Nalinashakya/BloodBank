<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event; 

class Eventcontroller extends Controller
{
    public function add(){
    	return view("events.add-event");
    }
    public function store(Request $request){
    	$this->validate($request,[
    		'event_name'=>'required',
    		'event_organized_by'=>'required',
    		'event_venue'=>'required',
    		'event_time'=>'required|numeric'
    	]);
 $events = new Event;
 $events->name = $request->event_name;
  $events->organized_by= $request->event_organized_by;
   $events->venue= $request->event_venue;
    $events->time = $request->event_time;
     $events->save();
     return redirect('/view-event');

    }

    public function view(){
    	$event = Event::get()->all();
    	return view('events.event-show',compact('event'));
    }

    public function deleteevent($id){
    	$event = Event::where('id',$id)->get()->first()->delete();
    	return redirect('/view-event');
    }
    public function edit($id){
$event = Event::where('id',$id)->get()->first();
    	return view('events.edit-event',compact('org'));
    
    }
    public function update(Request $request,$id){
    	$events= Event::where('id',$id)->get()->first();
    	 $events->name = $request->event_name;
 		 $events->organized_by= $request->event_organized_by;
      	$events->venue= $request->event_venue;
  	     $events->time = $request->event_time;
 	 	  $events->save();
     return redirect('/view-event');
}
}

