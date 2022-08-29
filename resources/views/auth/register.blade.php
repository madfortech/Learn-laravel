@extends('layouts.app')
@section('content')
            <div class="row g-0">
                <div class="col-md-6 offset-md-3">
                    <h1 class="display-4 text-uppercase fw-bold text-center mt-2">
                        register
                    </h1>
                    <div>
                        <form 
                            class="px-2 py-2"
                            method="POST" 
                            action="{{ route('register') }}"
                            style="border: 1px solid rgb(77,119,255) ;">
                            @csrf

                            <div class="p-2">
                                <label class="form-label mt-2" for="name">
                                    {{ __('Name *') }}
                                </label>
                                <input 
                                id="name" type="text" 
                                class=" form-control form-control-sm rounded-0 
                                @error('name') is-invalid @enderror" 
                                name="name" value="{{ old('name') }}" 
                                required=""
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

                            <div class="p-2">
                                <label class="form-label mt-2" for="email">
                                    {{ __('Email Address*') }}
                                </label>
                                <input 
                                id="email" 
                                type="email" 
                                class="form-control form-control-sm rounded-0 
                                @error('email') is-invalid @enderror" 
                                name="email" value="{{ old('email') }}" 
                                required=""
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

                            <div class="p-2">
                                <label class="form-label mt-2" for="password">
                                    {{ __('Password*') }}
                                </label>
                                <input 
                                id="password" 
                                type="password" 
                                class="form-control form-control-sm rounded-0 
                                @error('password') is-invalid @enderror" 
                                name="password" 
                                required=""
                                autofocus=""
                                placeholder="new password"
                                minlength="8" maxlength="8"
                                autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- password field -->

                            <div class="p-2">
                                <label class="form-label mt-2" for="password-confirm">
                                    {{ __('Password*') }}
                                </label>
                                <input 
                                id="password-confirm" 
                                type="password" class="form-control" 
                                name="password_confirmation" 
                                required=""
                                minlength="8" maxlength="8"
                                autofocus=""
                                placeholder="confirm password"
                                autocomplete="new-password">
                            </div>
                            <!-- password confirm field -->
 
                            <div class="p-2 d-grid mt-2">
                                <button class="btn btn-sm btn btn-outline-primary rounded-0" type="submit">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
