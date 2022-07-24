@extends('layouts.app')

@section('content')
        


                <div class="col-md-6 offset-md-3">
                    <h1 class="display-5 text-uppercase fw-bold text-center mt-2">
                        reset password
                    </h1>
                <div>
                    <!-- Session Status -->
                    <div class="mb-4" :status="session('status')"></div>

                    <!-- Validation Errors -->
                    <div class="mb-4" :errors="$errors"></div>

                    <form 
                        method="POST" 
                        class="px-2 py-2"
                        action="{{ route('password.email') }}"
                        style="border: 1px solid rgb(77,119,255) ;">
                    @csrf
                

                            <!-- Email Address -->
                            <div class="p-2">
                                <label 
                                    class="form-label mt-2"
                                    for="email" :value="__('Email')">
                                    Email *
                                </label>
                            
                                
                                <input 
                                    id="email" 
                                    class="form-control form-control form-control-sm rounded-0
                                    @error('password') is-invalid @enderror" 
                                    type="email" 
                                    name="email" 
                                    placeholder="mail@example.com"
                                    :value="old('email')" 
                                    required=""
                                    required autofocus />
                                
                            </div>


                            <div class="p-2 d-grid">
                                <button class="btn btn-sm btn btn-outline-primary rounded-0" type="submit">
                                {{ __('Email Password Reset Link') }}
                                </button>
                            </div>

 

                    </form>
                </div>
             

@endsection