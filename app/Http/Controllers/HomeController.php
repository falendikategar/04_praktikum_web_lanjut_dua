<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $data = Homepage::all();
        return view('homepage')->with('data', $data);
    }
}
