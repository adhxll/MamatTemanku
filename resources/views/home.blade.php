@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')

<div class="container">
    <table>
        @foreach ($categories as $category)
        <!-- <div class="card border-0">
            <img src="{{ asset('storage/assets/'.$category->image) }}" class="card-img-top" id="category_img" style="width: 40%;">
            <div class="card-body">
                <a href="/categories/{{$category->id}}">
                    <button>
                        {{$category->name}}
                    </button>
                </a>
            </div>
        </div> -->

        <td class="h-100">
            <div class="container" id="category" >
                <img src="{{ asset('storage/assets/'.$category->image) }}" class="img-responsive d-block" id="category_img" style="object-fit: contain; width:100%; max-height:350px;">
                <div class="middle" >
                    <div class="text"">
                        <a href="/categories/{{$category->id}}">{{$category->name}}</a>
                    </div>
                </div>
            </div>
        </td>
        @endforeach
    </table>
</div>
@endsection
