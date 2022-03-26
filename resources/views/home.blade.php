@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
        
@include('navbar.nav')

<main class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="py-5 px-3 shadow-sm">
                    <h1>Dashboard</h1>

                    {{ Auth::user()->name }}
                    
                </div>

              
            </div>
        </div>
    </div>    
</main>                      

@endsection
                  
                        