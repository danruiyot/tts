<?php

namespace App\Http\Controllers;

use App\Packages;
use Illuminate\Http\Request;

class PackagesController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = "packages";
        $data['packages'] = Packages::orderby('id', 'DESC')->get();
        return view('/admin/packages/index', $data)->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = "create package";
        return view('/admin/packages/create',$data)->render();
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Packages::create($request->all());
        return redirect("/packages")->with("success","inert successfull");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Packages  $packages
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['title'] = "show package";
        $data['package']= Packages::findorfail($id);
        return view('/admin/packages/show', $data)->render();

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Packages  $packages
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $data['title'] = "edit package";
        $data['package']= Packages::findorfail($id);
        return view('/admin/packages/edit', $data)->render();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Packages  $packages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $inputs = $request->except('_token','_method');
        Packages::whereId($id)->update($inputs);
        return redirect("/packages")->with("success","inert successfull");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Packages  $packages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Packages $packages)
    {
        $package = Packages::findOrFail($id);
        $package->delete();
        return back()->with('success', 'Packages   is successfully deleted');

    }
}
