@extends('layouts.app')
@livewireStyles
@section('content')

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="fixed top-0 right-0 px-6 py-4 sm:block" style=" visibility: hidden;">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container">
                <div class="row">
                    <div class="col-md-5"> </div>
                    <div class="col-md-2" style="display: block;margin-left:auto;margin-right:auto;">   
                            <i class="fas fa-home fa-9x grey"></i>
                            <h1>Simple Booking</h1>
                    </div>
                    <div class="col-md-5"> </div>    
                </div>
            </div>

            @endsection
@livewireScripts
