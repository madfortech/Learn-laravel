<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class AddTagsController extends Controller
{
    public function index()
    {
        return view('user.create-tag');
    }

    public function StoreTag(Request $request)
    {
         

        $validator = Validator::make($request->all(), [
            'storetitle' => 'required|unique:tags|max:255',
             
        ]);

        return($validator);
    
    }
}
 