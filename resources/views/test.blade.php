@extends('layouts.app')

@section('title')
Ujian - {{ucfirst($vocabs->first()->category->name)}}
@endsection

@section('content')
    <div class="container">
        <h5 class="text-right font-italic">Test Mode</h5>
        <br>
        
        <h1 class="text-center font-weight-bold"><u>{{$vocabs->first()->category->name}} Category</u></h1>
        <br>

        {{-- masih buat coba2 --}}
        @foreach ($vocabs as $vocab)
            {{$vocab->name_en}}
            <img src="{{ asset('storage/assets/'.$vocab->image) }}" class="img-responsive d-block w-100" alt="" style="object-fit: contain; max-height:600px;">
        @endforeach

        {{$vocabs->links()}}
    </div>
@endsection