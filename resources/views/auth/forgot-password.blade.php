@extends('layouts.app')

@section('title', 'Forget Password')

@section('content')
        
@include('navbar.nav')

<main class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <!-- Session Status -->
                <div class="mb-4" :status="session('status')"></div>

                <!-- Validation Errors -->
                <div class="mb-4" :errors="$errors"></div>

                <form method="POST" 
                class="py-2 px-3"
                action="{{ route('password.email') }}">
                @csrf
                
                <h1 class="display-2">
                    Forget Password
                </h1>

                <!-- Email Address -->
                <div class="row">
                    <label for="email" :value="__('Email')">Email *</label>
                
                    <div class="col-md-6">
                        <input 
                        id="email" 
                        class="form-control @error('password') is-invalid @enderror   rounded-0 border-2" 
                        type="email" 
                        name="email" 
                        placeholder="mail@example.com"
                        :value="old('email')" 
                        required autofocus />
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-primary border-0 rounded-0">
                            {{ __('Email Password Reset Link') }}
                        </button>
                    </div>
                </div>

                </form>
            </div>
        </div>
    </div>
</main>

@endsection