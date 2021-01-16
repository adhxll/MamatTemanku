@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')

<div class="container">
    <br>
    <div class="row justify-content-center">
        <h1 class="text-dark">Welcome, {{ ucfirst(Auth::user()->name) }}!</h1>
    </div>
    <div class="row justify-content-center">
        <h5><i>Click a category to begin</i></h5>
    </div>
    <br>
    <table style="text-align: center;">
        @foreach ($categories as $category)
        <td class="h-100">
            <div class="container" id="category" style="text-align: center;">
                <img src="{{ asset('storage/assets/'.$category->image) }}" class="img-responsive d-block" id="category_img" style="object-fit: contain; width:100%; max-height:350px;">
                <div class="middle">
                    <span>
                        <a href="/categories/{{$category->id}}"><button class="btn btn-secondary">{{$category->name}}</button></a>
                    </span>
                </div>
                
            </div>
        </td>
        @endforeach
@endsection