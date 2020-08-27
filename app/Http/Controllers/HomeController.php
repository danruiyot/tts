<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ads;
use App\Offers;
use App\Events;
use App\Products;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {        
        $data["ads"] = Ads::orderBy('id', 'DESC')->get();
        $data["offers"] = Offers::orderBy('id', 'DESC')->get();
        $data["events"] = Events::orderBy('id', 'DESC')->get();
        $data["products"] = Products::orderBy('id', 'DESC')->get();
        // dd($data);
        return view('home',$data);
    }
}
