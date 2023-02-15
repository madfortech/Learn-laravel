@extends('layouts.app')
@section('title', 'Single post')
@section('content')
 
<div class="sm:grid grid-cols-2 gap-2">

    <div class="sm:w-4/6 mx-auto mt-16	bg-gray-100">
        <!--  start Article -->
        
        <div class="sm:px-3 p-3">
           <a href="">
                <h1 class="text-5xl">
                    {{ $post->title }}
                </h1>
           </a>
            <article>
                <p class="text-lg mt-2 tracking-wide">
                    {{ $post->description }}
                </p>
                
                <a href="{{route('posts.edit', $post->id')}}">edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}" 
                    method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">
                        Delete
                    </button>
                </form>

            </article>
        </div>
       
        <!--  end Article -->
    </div>
</div>
@endsection