<?php

namespace App\Http\Controllers;

use App\Events;
use Illuminate\Http\Request;

class EventsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["title"] = "Events";
        $data['events'] = Events::orderby('id', 'DESC')->get();
        return view('/admin/events/index', $data)->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data["title"] = "Create event";
        return view('/admin/events/create',$data)->render();
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'venue' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);
            Events::create($request->all());
    
            return redirect('/events')->with('success', 'event is successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data["title"] = "show event";
        $data['event']= Events::findorfail($id);
        return view('/admin/events/show',$data)->render();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data["title"] = "edit event";
        $data['event']= Events::findorfail($id);
        return view('/admin/events/edit',$data)->render();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'venue' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);
        Events::whereId($id)->update($request->except("_token","_method"));
    
            return redirect('/events')->with('success', 'event is successfully edited');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(Events $events)
    {
        $event = Events::findOrFail($id);
        $event->delete();

        return redirect('/events')->with('success', 'Event is successfully deleted');
    }
}
