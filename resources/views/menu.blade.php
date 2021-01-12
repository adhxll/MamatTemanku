@extends('layouts.app')

@section('content')
<div class="container">
    <h3>{{$category->name}}</h3>
    <img src="{{ asset('storage/assets/'.$category->image) }}" style="object-fit: cover; width: 100%;">
    
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <a class="btn btn-outline-secondary mr-sm-3" role="button" href="{{ $category->id }}/learn">Learn</a>
        <a class="btn btn-outline-warning" role="button" href="{{ $category->id }}/testing">Test</a>
    </div>
</div>
@endsection