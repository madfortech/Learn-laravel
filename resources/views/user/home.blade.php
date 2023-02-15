@extends('layouts.app')
@section('title', 'User Homepage')
@section('content')

<div class="sm:grid grid-cols-3 gap-2">
        <div class="sm:w-1/3  mx-auto mt-16 border-gray-100">
            <div class="sm:px-3 p-3">
               @include('sidebar.sidenav')
            </div>
        </div>
        <!-- left sidebar -->

        <div class="sm:w-full mt-16">
            <div class="sm:px-3 p-3">
                <!-- home main -->
                <div class="border-2 rounded-lg w-1/2 text-center">
                    <a href="{{route('posts.create')}}" class="uppercase">
                        add new post
                    </a>
                </div>
                
               
                    <div class="sm:grid grid-cols-1 gap-2">
                       
                        <div class="w-full mx-auto mt-16 ">
                            <!--  start Article -->
                            @foreach(\App\Models\Post::all() as $post)
                            <div class="sm:px-3 p-3 border-2 border-gray-200 rounded-lg mb-2">
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
                                <div class="flex flex-row">
                                    <a href="" class="mx-2">Edit</a>
                                    <form action="{{ route('posts.destroy', $post->id) }}" 
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                            @endforeach
                            <!--  end Article -->
                        </div>
                       
                    </div>
                
            </div>
        </div>

    <div class="sm:w-1/3 mx-auto mt-16 border-gray-100">
        <div>
            sidebar
        </div>
    </div>
    <!-- right sidebar -->
</div>            
@endsection

<!-- https://play.tailwindcss.com/zDOU2CjQXv -->

