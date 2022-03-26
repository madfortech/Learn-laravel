@extends('layouts.app')

@section('title', 'Register')

@section('content')
        
@include('navbar.nav')


<main class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">

            <div class="py-5 px-3 shadow-sm">
                

                    <form method="POST" action="{{ route('register') }}">
                        @csrf 
                        
                        <h1 class="display-2">
                           Register
                        </h1>
                        <div class="row">
                            <label for="name">
                                {{ __('Name *') }}
                            </label>
                            
                            <div class="col-md-6">
                                <input 
                                    id="name" 
                                    type="text" 
                                    class="form-control @error('name') 
                                    is-invalid @enderror rounded-0 border-2" 
                                    name="name" 
                                    value="{{ old('name') }}" 
                                    required autocomplete="name" 
                                    autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="email">
                                {{ __('E-Mail Address *') }}
                            </label>
                            <div class="col-md-6">
                                <input 
                                id="email" 
                                type="email" 
                                class="form-control @error('email') is-invalid @enderror
                                rounded-0 border-2" 
                                name="email" 
                                value="{{ old('email') }}" 
                                required 
                                autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="password">
                                {{ __('Password *') }}
                            </label>

                            <div class="col-md-6">
                                <input 
                                id="password" 
                                type="password" 
                                class="form-control @error('password') is-invalid @enderror
                                rounded-0 border-2" 
                                name="password" 
                                required 
                                autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-3">
                            <label for="password-confirm">
                                {{ __('Confirm Password *') }}
                            </label>

                            <div class="col-md-6">
                                <input 
                                id="password-confirm" 
                                type="password" 
                                class="form-control rounded-0 border-2" 
                                name="password_confirmation" 
                                required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="mt-3">
                            <div class="col-md-6">
                                <input 
                                type="checkbox">
                                <label for="accept">
                                {{ __(' Agree terms conditions') }}
                                </label>

                            </div>
                        </div>

                        <div class="row mt-3">
                            <div>
                                <button type="submit" class="btn btn-primary rounded-0">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
            </div>
        </div>
    </div>
</main>

@endsection