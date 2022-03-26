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
                            <h5 class="card-title">Settings</h5>
                            
                             
                                <a href="{{route('settings.create)}}" class="btn btn-primary">
                                    Change Password 
                                </a>
                          
                           
                        </div>
                    </div>

                   
                    

                   
                </div>
            </div>
        </div>
    </div>    
</main>                      

@endsection
                  
                        