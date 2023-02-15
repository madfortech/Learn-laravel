@extends('layouts.app')
@section('title', 'Reset Password')
@section('content')
        <div class="flex">
            <div class="mx-auto w-7/12">
                <h1 class="text-center text-5xl capitalize mt-24">
                    reset password
                </h1>
                <div class="lg:w-2/4 mx-auto">

                    <div>
                        <!-- Session Status -->
                        <div class="mb-4" :status="session('status')"></div>

                        <!-- Validation Errors -->
                        <div class="mb-4" :errors="$errors"></div>

                        <form 
                            method="POST" 
                            class="px-2 py-2"
                            action="{{ route('password.email') }}"
                            class="border-0 p-3 mt-4">
                            @csrf
                    
                            <div class="mt-2">
                                <label for="email">
                                    Email *
                                </label>
                                <input 
                                class="@error('password') is-invalid @enderror w-full bg-gray-300 p-1
                                focus:outline-none rounded-lg" 
                                type="email" name="email" 
                                autofocus="" 
                                :value="old('email')" 
                                autocomplete="off" 
                                placeholder="mail@example.com">
                                @error('email')
                                <span role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <!-- email field -->

                            <div class="mt-2">
                                <button type="submit" 
                                    class="w-full bg-gray-900 p-1 capitalize text-white rounded-lg
                                    hover:bg-gray-700">
                                    {{ __('Email Password Reset Link') }}
                                </button>
                            </div>
                            <!-- button -->
 
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection