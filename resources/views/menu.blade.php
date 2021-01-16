@extends('layouts.app')

@section('title')
Kategori - {{ucfirst($category->name)}}
@endsection

@section('content')
<div class="container">
    <a href="/home" class="btn btn-outline-dark"> << Back <span class="font-italic" style="font-size:small;">(kembali)</span></a>
</div>
<br>
<div class="container">
    <h3 class="text-center font-weight-bold">{{$category->name}} Category</h3>

    <br>

    <img src="{{ asset('storage/assets/'.$category->image) }}" class="img-responsive d-block" style="object-fit: contain; width:100%; max-height:500px;">
    
    <br>

    <div class="wrapper text-center">
        <div class="btn-group btn-group-toggle" data-toggle="buttons" style="border-radius: 30pt; width:60%;">
            <a class="btn btn-outline-secondary font-weight-bold mr-sm-3" role="button" href="{{ $category->id }}/learn" style="border-radius: 30pt;">Learn <span class="font-italic" style="font-size:small;">(belajar)</span></a>
            <a class="btn btn-outline-warning font-weight-bold" role="button" href="{{ $category->id }}/test" style="border-radius: 30pt;">Test <span class="font-italic" style="font-size:small;">(ujian)</span></a>
        </div>
    </div>
</div>
@endsection