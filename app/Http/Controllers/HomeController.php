<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DB;

class HomeController extends Controller
{
    public function getImages()
    {
        $data = \DB::table('images')->get();
        return view('partials.home')->with('data', $data);
    }
}
