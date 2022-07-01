@extends('layouts.app')

@section('title', 'Settings')

@section('content')
        
@include('navbar.nav')

<main class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="py-5 px-3 shadow-sm">
                   
                    <div class="card" style="width: 100%;">
                        
                        <div class="card-body">

                            <h4 class="card-header mb-3">
                                Settings
                            </h4>
                            
                            <p class="card-link">
                                <a href="{{route('settings.create')}}" class="bg-primary text-white p-3 text-decoration-none">
                                    Change Password 
                                </a>
                            </p>
                               
                        </div>
                    </div>

                   
                    

                   
                </div>
            </div>
        </div>
    </div>    
</main>                      

@endsection
                  
                        