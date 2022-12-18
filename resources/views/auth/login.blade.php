@extends('layouts.app')
@section('content')
<div class="flex">
    <div class="mx-auto w-7/12">
        <h1 class="text-center text-5xl capitalize">
            login
        </h1>
        <div class="lg:w-2/4 mx-auto">
            <form 
                method="POST"
                action="{{ route('login') }}"
                class="border-0 p-3  bg-gray-600 mt-4">
                @csrf
                <div class="mt-2">
                    <label for="">name *</label>
                    <input type="text" 
                    class=" @error('name') is-invalid @enderror w-full bg-gray-300 p-1
                    focus:outline-none" 
                    name="name" 
                    value="{{ old('name') }}"
                    autocomplete="current-password"
                    placeholder="jonh doe" />
                    @error('name')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mt-2">
                    <label for="">password *</label>
                    <input type="password" 
                    class=" @error('password') is-invalid @enderror w-full bg-gray-300 p-1
                    focus:outline-none" 
                    name="password" 
                    autocomplete="current-password"
                    placeholder="password" />
                    @error('password')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!-- email -->

                <div class="mt-2">
                    <input 
                    type="checkbox" 
                    {{ old('remember') ? 'checked' : '' }} />
                    <label for="">rememberme</label>
                </div>
                <!-- remember me -->

                <div class="mt-2">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            forget password
                        </a>
                    @endif
                </div>
                <!-- forget password -->

                <div class="mt-2">
                    <button type="submit" 
                        class="w-full bg-gray-900 p-1 capitalize text-white hover:bg-gray-700">
                        login
                    </button>
                </div>
                <!-- button -->
            </form>
        </div>
  </div>
</div>
@endsection
