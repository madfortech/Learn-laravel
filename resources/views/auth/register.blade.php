@extends('layouts.app')

@section('content')
        



            <div class="col-md-6 offset-md-3">
                <h1 class="display-4 text-uppercase fw-bold text-center mt-2">
                    register
                </h1>
                <div>
                

                    <form 
                        style="border: 1px solid rgb(77,119,255) ;"
                        class="px-2 py-2"
                        method="POST" 
                        action="{{ route('register') }}">
                        @csrf 
                       
                            <div class="p-2">
                                <label for="name" class="form-label mt-2">
                                    {{ __('Name *') }}
                                </label>
                            
                           
                                <input 
                                    id="name" 
                                    type="text" 
                                    class="   form-control form-control-sm rounded-0
                                    @error('name') is-invalid @enderror" 
                                    name="name" 
                                    value="{{ old('name') }}" 
                                    required=""
                                    placeholder="full name"
                                    autocomplete="name" 
                                    autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                            </div>

                            <div class="p-2">
                                <label for="email" class="form-label mt-2">
                                    {{ __('E-Mail Address *') }}
                                </label>
                            
                                <input 
                                id="email" 
                                type="email" 
                                class="form-control form-control-sm rounded-0
                                @error('email') is-invalid @enderror" 
                                name="email" 
                                value="{{ old('email') }}" 
                                required=""
                                placeholder="mail@example.com" 
                                autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="p-2">
                                <label for="password" class="form-label mt-2">
                                    {{ __('Password *') }}
                                </label>

                            
                                <input 
                                id="password" 
                                type="password" 
                                class="form-control form-control-sm rounded-0 @error('password') is-invalid @enderror" 
                                name="password" 
                                required=""
                                placeholder="password" 
                                minlength="8" maxlength="8"
                                autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="p-2">
                                <label for="password-confirm" class="form-label mt-2">
                                    {{ __('Confirm Password *') }}
                                </label>

                           
                                <input 
                                id="password-confirm" 
                                type="password" 
                                class="form-control form-control-sm rounded-0 rounded-0 border-2" 
                                name="password_confirmation" 
                                required=""
                                placeholder="confirm password" 
                                minlength="8" maxlength="8"
                                autocomplete="new-password">
                        </div>

                        <div class="p-2">
                             
                                <input 
                                type="checkbox">
                                <label for="accept" class="form-label mt-2">
                                {{ __(' Agree terms conditions') }}
                                </label>

                        </div>


                        <div class="p-2 d-grid mt-2">
                            <button class="btn btn-sm btn btn-outline-primary rounded-0" type="submit">
                            {{ __('Register') }}
                            </button>
                        </div>

 
                    </form>
               </div>
            </div>
         

@endsection