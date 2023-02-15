@extends('layouts.app')
@section('title', 'Register')
@section('content')
            <div class="flex">
                <div class="mx-auto w-7/12">
                    <h1 class="text-center text-5xl capitalize mt-24">
                        register
                    </h1>
                    <div class="lg:w-2/4 mx-auto">
                        <form 
                            class="px-2 py-2"
                            method="POST" 
                            action="{{ route('register') }}"
                            class="border-0 p-3 mt-4">
                            @csrf

                            <div class="mt-2">
                                <label for="name">
                                    {{ __('Name *') }}
                                </label>
                                <input 
                                id="name" type="text" 
                                class="@error('name') is-invalid @enderror w-full bg-gray-300 p-1
                                focus:outline-none rounded-lg" 
                                name="name" value="{{ old('name') }}" 
                                placeholder="full name" 
                                autocomplete="name" 
                                autofocus="">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- name field -->

                            <div class="mt-2">
                                <label for="email">
                                    {{ __('Email Address*') }}
                                </label>
                                <input 
                                id="email" 
                                type="email" 
                                class="@error('email') is-invalid @enderror w-full bg-gray-300 p-1
                                focus:outline-none rounded-lg" 
                                name="email" value="{{ old('email') }}" 
                                autofocus=""
                                placeholder="name@email.com" 
                                autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- email field -->

                            <div class="mt-2">
                                <label for="password">
                                    {{ __('Password*') }}
                                </label>
                                <input 
                                id="password" 
                                type="password" 
                                class="@error('password') is-invalid @enderror w-full bg-gray-300 p-1
                                focus:outline-none rounded-lg" 
                                name="password" 
                                autofocus=""
                                placeholder="new password"
                                autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- password field -->

                            <div class="mt-2">
                                <label for="password-confirm">
                                    {{ __('Password*') }}
                                </label>
                                <input 
                                id="password-confirm" 
                                type="password"
                                name="password_confirmation" 
                                autofocus=""
                                class="w-full bg-gray-300 p-1
                                focus:outline-none rounded-lg" 
                                placeholder="confirm password"
                                autocomplete="new-password">
                            </div>
                            <!-- password confirm field -->

                            
                            <div class="mt-2">
                                <button type="submit" 
                                    class="w-full bg-gray-900 p-1 capitalize text-white rounded-lg
                                    hover:bg-gray-700">
                                    {{ __('Register') }}
                                </button>
                            </div>
                            <!-- button -->
  
                        </form>

                        <div class="text-center">
                            all ready have an account
                            <a class="text-blue-900" href="{{route('login')}}">
                                login
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
