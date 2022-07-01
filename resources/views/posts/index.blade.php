@extends('layouts.app')

@section('title', 'Post Index')

@section('content')

@include('layouts.nav')
        
    <main class="main">
        <div class="container">
            <div class="row g-0">
                <div class="col-6 offset-3">
                    <article class="mb-2">
                        <div class="card">
                            <img class="img-fluid card-img-top w-100 d-block" src="{{asset('img/img4.jpg')}}" alt="alt-image">
                            <div class="card-header">
                                <h4>Title</h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-inline mb-2 text-muted">
                                    <li class="list-inline-item">author</li>
                                    <li class="list-inline-item">comment</li>
                                </ul>
                                <p class="card-text">
                                    Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio,
                                    dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                                    gravida at eget metus.
                                </p>
                                <a class="card-link text-decoration-none" href="#">
                                    Readmore
                                </a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </main>

@endsection