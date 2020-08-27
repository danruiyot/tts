<?php

namespace App\Http\Controllers;

use App\Offers;
use Illuminate\Http\Request;

class OffersController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']="Offers";
        $data['offers']=Offers::all();
        return view('admin/offers/index', $data)->render();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']="create offer";
        return view('admin/offers/create', $data)->render();
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Offers::create($request->all());
    
        return redirect('/offers')->with('success', 'Product is successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offers  $offers
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['offer'] = Offers::findOrFail($id);
        $data['title']="create offer";
        return view('admin/offers/show', $data)->render();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offers  $offers
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['offer'] = Offers::findOrFail($id);
        $data['title']="edit offer";
        return view('admin/offers/edit', $data)->render();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offers  $offers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Offers::whereId($id)->update($request->except("_method", "_token"));
    
        return redirect('/offers')->with('success', 'Product is successfully updated');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offers  $offers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offers $offers)
    {
        $offer = Offers::findordfail($id);
        $offer->delete();
        return back()>with('success', 'Offer is successfully deleted');
    }
}
