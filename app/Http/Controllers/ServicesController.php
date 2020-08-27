<?php

namespace App\Http\Controllers;

use App\Services;
use Illuminate\Http\Request;

class ServicesController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["services"] = Services::all();

        $data['title'] = "services";
        return view('admin/services/index', $data)->render();
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = "create service";
        return view('admin/services/create',$data)->render();
        
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
            'service_name' => 'required',
            'icon' => 'required'
        ]);
        Services::create($request->all());
        return redirect("services")->with("success", "sucessfully added");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data["service"] = Services::findorfail($id);
        $data['title'] = "show service";

        return view('admin/services/show', $data)->render();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data["service"] = Services::findorfail($id);
        $data['title'] = "edit service";

        return view('admin/services/edit', $data)->render();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validated = $request->validate([
            'service_name' => 'required',
            'icon' => 'required'
        ]);
            Services::whereId($id)->update($validated);
        return redirect("services")->with("success", "sucessfully updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services $services)
    {
        
        $service = Services::findOrFail($id);
        $service->delete();

        return redirect("services")->with("success", "sucessfully deleted");
    }
}
