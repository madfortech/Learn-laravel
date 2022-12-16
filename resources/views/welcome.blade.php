@extends('layouts.app')
@section('title', 'Learn Laravel')
@section('content')
<div class="row g-0">
    <div class="col-auto col-md-6 offset-md-3">
        <article class="py-4 px-4 article">
            <div class="card px-md-2 py-md-2">
                <img class="img-fluid card-img-top w-100 d-block card-img" 
                    src="{{asset('img/img4.jpg')}}" 
                    alt="alt-image">
                <h4 class="display-3 fw-bold py-sm-2 my-sm-2">
                    post Title
                </h4>
                <div class="card-body">
                    <ul class="list-inline mb-2 text-muted">
                        <li class="list-inline-item">
                            author
                        </li>
                        <li class="list-inline-item">
                            comment
                        </li>
                    </ul>
                    <p class="fw-light card-text">
                        Nullam id dolor id nibh ultricies vehicula ut id elit. Cras 
                        justo odio, dapibus ac facilisis in, egestas eget quam. Donec id 
                        elit non mi porta gravida at eget metus.
                    </p>
                    <a class="text-capitalize fw-bold link-primary card-link text-decoration-none" href="#">
                        Readmore
                    </a>
                </div>
            </div>
        </article>
    </div>
</div>
@endsection