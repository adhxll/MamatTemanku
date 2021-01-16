@extends('layouts.welcomeapp')

@section('welcome')
    <div class="container" style="margin-top: 10%;">
        <div class="m-b-md ">
            <div class="flex-center position-ref">
                @php $path = Storage::url('assets\logo_mamat_transparent.png'); @endphp
                <img src="{{ url($path) }}" width="250" height="250"> 
            </div>
            <div class="flex-center position-ref ">
             
                @if (Route::has('login'))
                    <div class="links">
                        @auth
                            <a href="{{ url('/home') }}">Begin <span class="font-italic" style="font-size:small;">(mulai)</span></a>
                        @else
                            <a href="{{ route('login') }}">Login</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
            
                @endif
            </div>
        </div>
    </div>
@endsection