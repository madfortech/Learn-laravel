@extends('layouts.app')
@section('title', 'Post Create')
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
                <!-- create -->
                <div class="border-2 rounded-lg w-1/2 text-center">
                    <a href="{{route('posts.create')}}" class="uppercase">
                        add new post
                    </a>
                </div>
                
               
                    <div class="sm:grid grid-cols-1">

                        <div class="w-full mx-auto mt-16">
                            <!--  Create Form -->
                
                            <div class="sm:px-3 p-3">
                            <form 
                            class="px-2 py-2"
                            method="POST" 
                            action="{{ route('posts.store') }}"
                            class="border-0 p-3 mt-4">
                            @csrf

                            <div class="mt-2">
                                <label for="name">
                                    {{ __('Title *') }}
                                </label>
                                <input 
                                id="name" type="text" 
                                class="@error('title') is-invalid @enderror w-full bg-gray-300 p-1
                                focus:outline-none rounded-lg" 
                                name="title" value="{{ old('title') }}" 
                                placeholder="title" 
                                autocomplete="title" 
                                autofocus="">

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- title field -->

                            <div class="mt-2">
                                <label for="description">
                                    {{ __('Description *') }}
                                </label>
                                <textarea 

                                name="description" 
                                class="@error('description') is-invalid @enderror w-full bg-gray-300 p-1
                                focus:outline-none rounded-lg"
                                placeholder="description"
                                id="description" cols="30" rows="10">

                                </textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- title field -->
                            
 

                           
                            <div class="mt-2">
                                <button type="submit" 
                                    class="w-full bg-gray-900 p-1 capitalize text-white rounded-lg
                                    hover:bg-gray-700">
                                    {{ __('Post') }}
                                </button>
                            </div>
                            <!-- button -->
  
                        </form>
                            </div>
            
                            <!--  end Form -->
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

