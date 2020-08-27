<?php

namespace App\Http\Controllers;

use App\Files;
use App\Products;
use Illuminate\Http\Request;

class ProductsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["products"] = Products::all();
        $data["title"] = "Products";

        return view("admin/products/index", $data);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data["title"] = "Products Create";
        $data['files'] = Files::orderBy("id", "DESC")->get();
        return view('admin/products/create',$data)->render();
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
            'name' => 'required',
            'country' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);
            Products::create($request->all());
    
            return redirect('/products')->with('success', 'Product is successfully created');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data["title"] = "Show Product";
        $data["product"] = Products::findOrFail($id);
        return view('admin/products/show', $data)->render();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $data["title"] = "Edit Product";
        $data['files'] = Files::orderBy("id", "DESC")->get();
        $data["product"] = Products::findOrFail($id);
        return view('admin/products/edit', $data)->render();
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                
        $validated = $request->validate([
            'name' => 'required',
            'country' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required',
            'location',
            'link',
            'location',
        ]);
        Products::whereId($id)->update($validated);
    
            return redirect('/products')->with('success', 'Product is successfully updated');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $product = Products::findOrFail($id);
        $product->delete();

        return redirect('/products')->with('success', 'Product is successfully deleted');

    }
}
