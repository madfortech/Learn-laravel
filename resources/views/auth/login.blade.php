@extends('layouts.app')
@section('content')
            <div class="row g-0">
                <div class="col-md-6 offset-md-3">
                    <h1 class="display-3 text-uppercase fw-bold text-center mt-2">login</h1>
                    <div>
                        <form method="POST" 
                            action="{{ route('login') }}"
                            class="px-2 py-2"
                            style="border: 1px solid rgb(77,119,255) ;">
                            @csrf

                            <div class="p-2">
                                <label class="form-label mt-2" for="email">
                                    {{ __('Email Address *') }}
                                </label>
                                <input id="email" 
                                type="email" 
                                class="form-control form-control-sm rounded-0
                                @error('email') is-invalid @enderror" 
                                name="email" value="{{ old('email') }}" 
                                required 
                                autocomplete="email" 
                                autofocus=""
                                placeholder="mail@admin.com">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- End Email -->

                            <div class="p-2">
                                <label class="form-label mt-2" for="password">
                                    {{ __('Password *') }}
                                </label>
                                <input 
                                id="password" 
                                type="password" 
                                class="form-control form-control-sm rounded-0
                                @error('password') is-invalid @enderror" 
                                name="password" 
                                minlength="8" maxlength="8"
                                autocomplete="current-password"
                                required=""
                                placeholder="********">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- End Password -->
                           
                            <div class="p-2">
                                <input 
                                type="checkbox" 
                                name="remember" 
                                id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-label mt-2 mb-2" for="remember">
                                    &nbsp;{{ __('Remember Me') }}&nbsp;
                                </label>
                            </div>
                            <!-- Remember Me -->

                            <div class="p-2">
                                @if (Route::has('password.request'))
                                    <a class="text-decoration-none" 
                                        href="{{ route('password.request') }}">
                                        Forget password ?
                                    </a>
                                @endif
                            </div>
                            <!-- Forget Password -->

                            <div class="p-2 d-grid">
                                <button class="btn btn-sm btn btn-outline-primary rounded-0" type="submit">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection
