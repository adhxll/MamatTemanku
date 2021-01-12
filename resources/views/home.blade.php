@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')

<div class="container">
    <table>
        @foreach ($categories as $category)
        <td class="h-100">
            <div class="container" id="category">
                <img src="{{ asset('storage/assets/'.$category->image) }}" class="image" id="category_img" style="object-fit: cover; width: 100%;">
                <div class="middle">
                    <div class="text">
                        <a href="/categories/{{$category->id}}">{{$category->name}}</a>
                    </div>
                </div>
            </div>
        </td>
        @endforeach
    </table>
</div>
@endsection
