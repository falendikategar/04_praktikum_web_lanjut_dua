<?php

namespace App\Http\Controllers;

use App\Models\Pengalaman;
use Illuminate\Http\Request;

class PengalamanController extends Controller
{
    public function index()
    {
        $data = Pengalaman::all();
        return view('pengalaman-kuliah')->with('data', $data);
    }
}
