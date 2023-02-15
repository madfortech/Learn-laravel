@extends('layouts.app')
@section('title', 'Welcome')
@section('content')
        @foreach($posts as $post)
        <div class="sm:grid grid-cols-1 sm:w-2/4 mx-auto gap-2">
            
            <div class="sm:w-4/6 mx-auto mt-16	bg-gray-100">
                <!--  start Article -->
                
                <div class="sm:px-3 p-3">
                <a href="{{route('posts.show', $post->id)}}">
                    <h1 class="text-5xl">
                        {{ $post->title }}
                    </h1>
                </a>
                    <article>
                        <p class="text-lg mt-2 tracking-wide">
                            {{ $post->description }}
                        </p>
                    </article>
                </div>
            
                <!--  end Article -->
            </div>
           
        </div>
        @endforeach
@endsection