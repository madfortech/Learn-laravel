<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\sample;

use Illuminate\Support\Facades\DB;


class Sampledatacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {
        

        $sample = DB::select('select * from samples');

        return view('sample-data-show', [
            'sample' => $sample,
             
        ]);
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('sample-data-show', [
            'sample' => sample::find($id)
             
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    
    {
        // $sample = DB::select('select * from samples where id = :id', ['id' => $id]);

        $sample = DB::delete('delete from samples where id = :id',['id => $id']);


        return view('sample-data-delete', [
            'sample' => $sample
        ]);
         
    }
}
