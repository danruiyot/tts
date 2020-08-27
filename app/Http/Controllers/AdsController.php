<?php

namespace App\Http\Controllers;

use App\Ads;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["ads"] = Ads::all();
        $data["title"] = "Advertisement";

        return view("admin/ads/index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data["title"] = "Create Advertisement";
        return view('admin/ads/create',$data)->render();

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
        'ad_name' => 'required',
        'country' => 'required',
        'description' => 'required',
        'price' => 'required'
    ]);
        Ads::create($request->all());

        return redirect('/ads')->with('success', 'Ad is successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data["title"] = "Show Advertisement";
        $data["ad"] = Ads::findOrFail($id);
        return view('admin/ads/show', $data)->render();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data["title"] = "Edit Advertisement";
        $data["ad"] = Ads::findOrFail($id);
        return view('admin/ads/edit', $data)->render();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'ad_name' => 'required',
            'country' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);
            Ads::whereId($id)->update($request->except("_method","_token"));
    
            return redirect('/ads')->with('success', 'Ad is successfully update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ad = Ads::findOrFail($id);
        $ad->delete();

        return redirect('/ads')->with('success', 'Ad is successfully deleted');
    }
}
