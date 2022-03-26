@extends('layouts.app')

@section('title', 'About edit')

@section('content')
        
@include('navbar.nav')

<main class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="py-5 px-3 shadow-sm">
                    <h1>Edit Data</h1>
                </div>
                
                <!-- Form -->
                <form method="POST" action="{{('/abouts/{{$sample->id}}')}}" class="py-3">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">About name</label>
                        <input type="text" name="name" class="form-control" id="name" value="name">
                    </div>

                    
                    
                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>
                </form>
                <!-- End Form -->
            </div>
        </div>
    </div>    
</main>                      

@endsection
                  
                        