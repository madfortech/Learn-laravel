<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemosettingController extends Controller
{
    public function index()
    {
        return view('user.profile');
    }
}
