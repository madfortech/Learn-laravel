@extends('layouts.app')

@section('content')

            <div class="row g-0">
                <div class="col-md-6 offset-md-3">
                    <h1 class="display-3 text-uppercase fw-bold text-center mt-2">
                        Reset password
                    </h1>
                    <div>

                        <form 
                            class="px-2 py-2"
                            method="POST" 
                            action="{{ route('password.update') }}">
                            @csrf

                        
                            <input type="hidden" name="token" value="{{ $token }}">


                            <div class="p-2">
                                <label for="email"  class="form-label mt-2">
                                    {{ __('E-Mail Address') }}
                                </label>

                                 
                                    <input id="email" 
                                    type="email" 
                                    class="form-control form-control-sm rounded-0
                                    @error('email') is-invalid @enderror" 
                                    name="email" value="{{ $email ?? old('email') }}" 
                                    required=""
                                    autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                 
                            </div>

                            <div class="p-2">
                                <label for="password" class="form-label mt-2">
                                    {{ __('Password') }}
                                </label>

                               
                                    <input id="password" 
                                    type="password" 
                                    class="form-control form-control-sm rounded-0
                                    @error('password') is-invalid @enderror" 
                                    name="password" 
                                    required=""
                                    placeholder="password"
                                    autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>

                            <div class="p-2">
                                <label for="password-confirm" 
                                    class="form-label mt-2">
                                    {{ __('Confirm Password') }}
                                </label>

                               
                                    <input id="password-confirm" 
                                    type="password" class="form-control form-control-sm rounded-0" 
                                    name="password_confirmation" 
                                    required=""
                                    placeholder="password confirm"
                                    autocomplete="new-password">
                               
                            </div>

                               
                            <div class="p-2 d-grid">
                                <button class="btn btn-sm btn btn-outline-primary rounded-0" type="submit">
                                {{ __('Reset Password') }}
                                </button>
                            </div>
 

                           
                        </form>
                    </div>
                </div>
            </div>
@endsection
