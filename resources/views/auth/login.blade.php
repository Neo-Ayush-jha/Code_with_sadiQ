@extends('homepages/base')
@section('ayush')
    <div class="container">
        <div class="row mt-5">
            <div class="col-4 mx-auto">
                <div class="card">
                    <h2 class=" text-danger text-center">Login Here</h2>
                    <hr>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                
                            <!-- Email Address -->
                            <div>
                                <x-label for="email" :value="__('Email')" />
                
                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                            </div>
                
                            <!-- Password -->
                            <div class="mt-4">
                                <x-label for="password" :value="__('Password')" />
                
                                <x-input id="password" class="block mt-1 w-full"
                                                type="password"
                                                name="password"
                                                required autocomplete="current-password" />
                            </div>
                
                            <!-- Remember Me -->
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                
                            <div class=" items-center justify-end mt-4">
                                <button class="w-100 text-center btn btn-success">
                                    {{ __('Log in') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection