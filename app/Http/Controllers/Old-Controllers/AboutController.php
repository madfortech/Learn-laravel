<?php
namespace App\Http\Controllers;
use App\Models\Sample;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AboutController extends Controller
{
    public function index()
    {
        $sample = DB::table('samples')->get();
 
        return view('abouts.index', compact('sample', $sample));
         
    }

    public function create()
    {
       
        return view('abouts.create');
        
    }

    public function store(Request $request)
    {
       
        $user = Sample::insert([
            'name' => $request->name,
            
        ]);

        return view('abouts.index', compact('user', $user));
        
    }

    public function edit(Sample $Sample)
    {

        //
        
    }

    public function update()
    {
        
        
        
    }


}
 