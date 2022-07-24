@extends('layouts.app')

@section('content')
        


<div class="col-auto col-md-6">
    <h2 class="display-4 text-capitalize fw-bold text-info mt-2">
        {{ Auth::user()->name }}
    </h2>
</div>

@endsection
                  
                        