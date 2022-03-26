@extends('layouts.app')

@section('title', 'Login')

@section('content')
        
@include('navbar.nav')


<main class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">

                <div class="py-5 px-3 shadow-sm">
                
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <h1 class="display-2">
                           Login
                        </h1>

                        <div class="row">
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
                                required autocomplete="email" 
                                autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label 
                                for="password">
                                {{ __('Password') }}
                            </label>

                            <div class="col-md-6">
                                <input 
                                id="password" 
                                type="password" 
                                class="form-control @error('password') is-invalid @enderror   rounded-0 border-2" 
                                name="password" 
                                required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div>
                                <input 
                                class="form-check-input" 
                                type="checkbox" 
                                name="remember" 
                                id="remember" 
                                {{ old('remember') ? 'checked' : '' }}>

                                <label for="remember">
                                    {{ __('Remember Me') }}
                                   
                                </label>
                                <div class="col-md-6">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                </div>
                            </div>

                            <div class="col-md-6 mt-3">
                                <button 
                                    type="submit" 
                                    class="btn btn-primary rounded-0 border-2">
                                    {{ __('Login') }}
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
