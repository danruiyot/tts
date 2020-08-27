<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Files;
use DB;

class BaseController extends Controller
{
    public function __construct()
    {
        // parent::__construct();
        $data['files'] = DB::table('files')->get();

        view()->share($data);
        // dd($data);
        // print_r($data);
        // return $data;
        
    }
}
