@extends('layouts.app')

@section('title', 'Change password')

@section('content')
        
@include('navbar.nav')

<main class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="py-5 px-3 shadow-sm">
                   
                    <div class="card" style="width: 100%;">
                        
                        <div class="card-body">
                           
                            <div class="card-header">
                                <h5 class="card-title">Change password</h5>
                            </div>
                            
                            <form method="POST" action="{{route('settings.store')}}" class="mb-3">
                                
                                @csrf
                                <div class="mb-3">
                                    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label for="password" class="form-label">New password *</label>
                                    <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="password" aria-describedby="password"  autocomplete="new-password">
                                   
                                </div>

                                <div class="mb-3">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label for="password" class="form-label">Confirm password *</label>
                                    <input type="password" name="password_confirmation" class="form-control  @error('password') is-invalid @enderror" id="password" aria-describedby="password">
                                   
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>

                                </div>


                            </form>
                           
                        </div>
                    </div>

                   
                    

                   
                </div>
            </div>
        </div>
    </div>    
</main>                      

@endsection
                  
                        