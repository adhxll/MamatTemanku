@extends('layouts.app')

@section('content')
<div class="container">
    <h3>{{$category->name}}</h3>
    <img src="{{ asset('storage/assets/'.$category->image) }}" style="object-fit: cover; width: 100%;">
    
    <div class="btn-group" role="group" aria-label="Basic example">
        <a class="btn btn-outline-secondary mr-sm-3" href="{{ $category->id }}/learn">Learn</button>
        <a class="btn btn-outline-warning" href="{{ $category->id }}/testing">Test</button>
    </div>
</div>
@endsection