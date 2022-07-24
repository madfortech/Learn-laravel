@extends('layouts.app')

@section('content')


            <div class="row g-0">
                <div class="col-md-6 offset-md-3">
                    <h1 class="display-3 text-uppercase fw-bold text-center mt-2">
                        Reset password
                    </h1>
                    <div>

                
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" 
                                    class="form-label mt-2">
                                    {{ __('E-Mail Address') }}
                                </label>

                                 
                                    <input id="email" 
                                    type="email" 
                                    class="form-control form-control-sm rounded-0
                                    @error('email') is-invalid @enderror" 
                                    name="email" value="{{ old('email') }}" 
                                    required=""
                                    placeholder="mail@example.com"
                                    autocomplete="email" 
                                    autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>


                                 
                            <div class="p-2 d-grid">
                                <button class="btn btn-sm btn btn-outline-primary rounded-0" type="submit">
                                {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
 

 
                        </form>
                    </div>
                </div>
            </div>
        
@endsection
