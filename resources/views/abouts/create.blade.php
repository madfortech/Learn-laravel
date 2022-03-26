@extends('layouts.app')

@section('title', 'About create')

@section('content')
        
@include('navbar.nav')

<main class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="py-5 px-3 shadow-sm">
                    <h1>About Us</h1>
                </div>
                
                <!-- Form -->
                <form method="POST" action="{{('/abouts')}}" class="py-3">
                    @csrf
                
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">About name</label>
                        <input type="text" name="name" 
                        class="form-control" id="name" placeholder="name">
                    </div>

                    
                    
                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>
                </form>
                <!-- End Form -->
            </div>
        </div>
    </div>    
</main>                      

@endsection
                  
                        