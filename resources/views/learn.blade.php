@extends('layouts.app')

@section('title')
Belajar - {{ucfirst($vocabs->first()->category->name)}}
@endsection

@section('content')

<div class="container">
    <h5 class="text-right font-italic">Study Mode</h5>
    <br>
    
    <h2 class="text-center font-weight-bold"><u>{{$vocabs->first()->category->name}} Category</u></h2>
    <br>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            @for($i=0; $i<=count($vocabs); $i++)
                @if($i == 0) 
                    <li data-target="#carouselExampleCaptions" data-slide-to="{{ $i }}" class="active"></li>
                @else
                    <li data-target="#carouselExampleCaptions" data-slide-to="{{ $i }}" class=""></li>
                @endif
            @endfor

        </ol>
        <div class="carousel-inner">
        
        @php $isFirst = true; @endphp
        
            @foreach ($vocabs as $vocab)
                <div class="carousel-item {{{ $isFirst ? 'active' : '' }}}" data-interval="false">
                    <img src="{{ asset('storage/assets/'.$vocab->image) }}" class="img-responsive d-block w-100" alt="" style="object-fit: contain; max-height:600px;">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="mx-auto p-3" style="background-color: #3c3b5c; width: 50%; border-radius: 10px; ">
                            <h4 style="font-family: Verdana;">{{$vocab->name_en}}</h4>
                            <h6 style="font-family: Georgia;">{{$vocab->name_id}}</h6>
                            <audio src="{{ asset('storage/assets/'.$vocab->audio) }}"></audio>
                            <form class="form-inline d-flex justify-content-center" action="/learned" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="vocab_id" value="{{ $vocab->id }}">
                                <input type="hidden" name="status" value="learned">
                                <input type="submit" value="I have understood this word." class="btn btn-light">
                            </form>
                        </div>
                    </div>
                </div>
                @php $isFirst = false; @endphp
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
</div>

@endsection