@extends('layouts.app')

@section('title', 'About us')

@section('content')
        
@include('navbar.nav')

<main class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="py-5 px-3 shadow-sm">
                   
                    <div class="card" style="width: 100%;">
                         
                        <div class="card-body">
                             
                            @foreach ($sample as $key)  
                            
                                <h5 class="card-title">{!!$key->id;!!} </h5>
                                <p>{!!$key->name;!!}</p>
                                <a href="{{('abouts.edit')}}" class="btn btn-primary">
                                    Edit 
                                </a>

                                <a href="{{('abouts.delete')}}" class="btn btn-danger">
                                    Delete 
                                </a>
                            @endforeach    
                             
                            
                            
                            <hr>

                             
                            <a href="{{route('abouts.create')}}" class="btn btn-primary">
                                Create 
                            </a>

                           
                        </div>
                    </div>

                   
                   

                   
                </div>
            </div>
        </div>
    </div>    
</main>                      

@endsection
                  
                        