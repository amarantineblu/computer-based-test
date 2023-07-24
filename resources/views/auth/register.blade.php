@extends('layouts.guest');
@section('content')
    <section class="p-5" style="background:url('/assets/ti/pexels-max-deroin-51415.jpg'); background-size:cover; top:0; padding:30px auto;">
        <div class=" col-md-5 m-5 mx-auto card" style=" display:flex; line-height:70px; ">
            <div class="row">
                <div class="col-md-6 py-auto" style="background: url('/assets/ti/pexels-isabella-mendes-2524159.jpg'); background-size:cover;">
                    <div class="my-auto">
                        <h1 class="text-white "> Would You Like to Take a Test? </h1>
                    </div>
                </div>
                <form method="POST" class="col-md-6 my-auto" action="{{ route('register') }}">
                    @csrf

                 <div class="row">
                       <!-- Name -->
                       <div class="col-md-6">
                        <x-label for="First Name" :value="__('First Name')" />

                        <x-input id="first_name" class="block mt-1 w-full form-control" type="text" name="first_name" :value="old('first_name')" required autofocus />
                    </div>

                    <!-- Name -->
                    <div class="col-md-6">
                        <x-label for="middle_name" :value="__('Middle Name')" />

                        <x-input id="middle_name" class="block mt-1 w-full form-control" type="text" name="middle_name" :value="old('first_name')" required autofocus />
                    </div>

                    <!-- Name -->
                    <div  class="col-md-6">
                        <x-label for="last_name" :value="__('Last Name')" />

                        <x-input id="last_name" class="block mt-1 w-full form-control" type="text" name="last_name" :value="old('last_name')" required autofocus />
                    </div>
                    <!--Name-->
                    <div  class="col-md-6">
                        <x-label for="username" :value="__('User Name')" />

                        <x-input id="username" class="block mt-1 w-full form-control" type="text" name="username" :value="old('username')" required autofocus />
                    </div>
                    <!-- Email Address -->
                    <div class=" col-md-12">
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required />
                    </div>

                    <!-- Password -->
                    <div class=" col-md-12">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password" class="block mt-1 w-full form-control"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />
                    </div>

                    <!-- Confirm Password -->
                    <div class=" col-md-12">
                        <x-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-input id="password_confirmation" class="block mt-1 w-full form-control"
                                        type="password"
                                        name="password_confirmation" required />
                    </div>
                 </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-button class="ml-4 btn btn-outline-success">
                            {{ __('Register') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
