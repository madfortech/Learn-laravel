<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SettingsController extends Controller
{
    public function index()
    {
       
        return view('settings.index');
        
    }

    public function create()
    {
       
        return view('settings.create');
        
    }


    public function update(Request $request, $id)
    {
       
        if (! Auth::guard('auth')->validate([
            'password' => $request->user()->old('password'),
            'password' => $request->password,
            'password' => $request->password_confirmation,
        ]));
        
     
        return redirect($request->session()->put('auth.login', time()));

        
        
    }

}
 