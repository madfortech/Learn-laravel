@extends('layouts.app')
@section('content')
            <div class="row g-0">
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
                    
                            <div class="p-2">
                                <label class="form-label mt-2" for="email">
                                    Email *
                                </label>
                                <input 
                                class="form-control form-control-sm rounded-0
                                @error('password') is-invalid @enderror" 
                                type="email" name="email" 
                                required="" 
                                autofocus="" 
                                :value="old('email')" 
                                autocomplete="off" 
                                placeholder="mail@example.com">
                            </div>
                            <!-- email field -->


                            <div class="p-2 d-grid">
                                <button class="btn btn-sm btn btn-outline-primary rounded-0" type="submit">
                                    {{ __('Email Password Reset Link') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection