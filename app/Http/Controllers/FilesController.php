<?php

namespace App\Http\Controllers;

use App\Files;
use Illuminate\Http\Request;
use File;

class FilesController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = "media";
        $data['filez'] = Files::orderBy("id", "DESC")->get();
        return view('admin/media/index', $data)->render();
        // return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'file' => 'required',
            'file.*' => 'mimes:doc,pdf,docx,txt,zip,jpg,png,jpeg'
            ]);
            $insert[]="";
            if($request->hasfile('file'))

            {
   
   
               foreach($request->file('file') as $file)
   
               {
                   $filename=$file->getClientOriginalName();
   
                   $file->move(public_path().'/images/', $filename);  

                   $insert['name'] = $filename;
                   $insert['file_path'] = $filename;
                   $check = Files::create($insert);
   
               }
   
            }
   
   
                return back()
                ->with('success','File has been uploaded.');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function show(Files $files)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function edit(Files $files)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Files $files)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = Files::findOrFail($id);
        if (File::exists(public_path('images/'.$file->name))) {
            File::delete(public_path('images/'.$file->name));
            # code...
        }else {
            dd("file does not exists");
        }
        $file->delete();

        return back()->with('success', 'Imagen   is successfully deleted');

    }
}
