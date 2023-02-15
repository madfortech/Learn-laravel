@extends('layouts.app')
@section('title', 'Admin Homepage')
@section('content')

<div class="sm:grid grid-cols-3 gap-2">
    <div class="sm:w-1/3  mx-auto mt-16 border-2 border-gray-100">
        <div class="sm:px-3 p-3">
            <div class="text-center">
                
                <strong>
                    {{ Auth::user()->name }}   
                </strong>
                    <ul class="list-none p-2 my-3 leading-8">
                        <li>
                            <a href="{{url('home')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{url('settings')}}">Settings</a>
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
            <!-- home main -->
            <div class="border-b-2">
                {{ Auth::user()->email }}   
            </div>

            <div class="sm:grid grid-cols-1 gap-2">
             
               
            </div>
        </div>
    </div>

    <!-- <div class="sm:w-1/3 mx-auto mt-16 border-2 border-gray-100">
        <div>
            sidebar
        </div>
    </div> -->
    <!-- right sidebar -->
</div>            
@endsection

<!-- https://play.tailwindcss.com/zDOU2CjQXv -->

