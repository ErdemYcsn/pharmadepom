<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepolaController extends Controller
{
    public function index(Request $request)
    {
        return view('depolar.index');
    }
}