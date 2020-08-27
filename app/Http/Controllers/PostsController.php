<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class PostsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['posts'] = Posts::all();

        $data['title'] = "posts";
        return view("admin/posts/index", $data);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = "create post";
        return view('admin/posts/create',$data)->render();
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
            'content' => 'required',
            'image' => 'required',
        ]);
        Posts::create($request->all());
        
        return redirect("posts")->with("success","saved sucessfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['title'] = "show post";
        $data['post'] = Posts::findorfail($id);
        return view('admin/posts/show', $data)->render();
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title'] = "edit post";
        $data['post'] = Posts::findorfail($id);
        return view('admin/posts/edit', $data)->render();
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        Posts::whereId($id)->update($request->except('_token','_method'));
        return redirect("posts")->with('success', "update sucessful");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Posts::whereId($id)->delete();
        
        return redirect("posts")->with('success', "delete sucessful");
    }
}
