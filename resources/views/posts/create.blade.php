@extends('layouts.app')
@section('title', 'Add new post')
@section('content')

<div class="sm:grid grid-cols-3 gap-2">
    <div class="sm:w-1/3  mx-auto mt-16 border-2 border-gray-100">
        <div class="sm:px-3 p-3">
            <div class="text-center">
                <img src="{{asset('img/img6.jpg')}}" 
                class="border-1 w-24 h-24 mx-auto rounded-full"
                alt="">
                <strong>
                    john doe
                </strong>
               
              
                    <ul class="list-none p-2 my-3 leading-8">
                        <li>
                            <a href="{{url('home')}}">home</a>
                        </li>
                        <li>
                            <a href="{{url('settings')}}">settings</a>
                        </li>
                        <li>
                            <form 
                            method="POST" 
                            action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="route('logout')"
                                onclick="event.preventDefault();
                                this.closest('form').submit();">
                                Logout
                            </a>
                            </form>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
    <!-- left sidebar -->

    <div class="sm:w-full mt-16	bg-gray-100">
        <div class="sm:px-3 p-3">
            <!-- posts create form -->
            <form 
                method="POST"
                action="{{ route('posts.store') }}"
                class="border-0 p-3  bg-gray-600 mt-4">
                @csrf
                <div class="mt-2">
                    <label for=""> post title *</label>
                    <br>
                    <input type="text" 
                    class=" @error('title') is-invalid @enderror w-full bg-gray-300 p-1
                    focus:outline-none" 
                    name="title" 
                    value="{{ old('title') }}"
                    placeholder="title" />
                    @error('title')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!-- title -->

                <div class="mt-2">
                    <label for="">post  description *</label>
                    <br>
                    <textarea 
                        name="description" 
                        id="" cols="30" 
                        rows="10"
                        class="w-full"
                        placeholder="write description here">
                    </textarea>
                    @error('description')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!-- email -->
 

                <div class="mt-2">
                    <button type="submit" 
                        class="w-full bg-gray-900 p-1 capitalize text-white hover:bg-gray-700">
                        posts
                    </button>
                </div>
                <!-- button -->
            </form>

        </div>
    </div>

    <div class="sm:w-1/3 mx-auto mt-16 border-2 border-gray-100">
        <div>
            sidebar
        </div>
    </div>
    <!-- right sidebar -->
</div>            
@endsection

<!-- https://play.tailwindcss.com/gfwX627DRZ -->

