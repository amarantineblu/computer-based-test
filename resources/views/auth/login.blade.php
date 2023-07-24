@extends('layouts.guest')
@section('content')
<section class="p-5"
    style="background:url('/assets/ti/pexels-max-deroin-51415.jpg'); background-size:cover; top:0; padding:30px auto;">
    <div class=" col-md-5 m-5 mx-auto card" style=" display:flex; line-height:70px; ">
        <div class="row">
            <div class="col-md-6 py-auto"
                style="background: url('/assets/ti/pexels-isabella-mendes-2524159.jpg'); background-size:cover;">
                <div class="my-auto">
                    <h1 class="text-white "> Would You Like to Take a Test? </h1>
                </div>
            </div>

            <div class="col-md-6">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('login') }}" class="my-auto">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="block mt-1 w-full form-control" type="email" name="email"
                            :value="old('email')" required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password" class="block mt-1 w-full form-control" type="password" name="password"
                            required autocomplete="current-password" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif

                        <x-button class="ml-3 btn btn-success">
                            {{ __('Log in') }}
                        </x-button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

@endsection
