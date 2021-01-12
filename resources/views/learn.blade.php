@extends('layouts.app')

@section('content')
<div>
    <h3>Study Mode</h3>
</div>

<h1>Kategori</h1>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
echo count($vocabs)    
<ol class="carousel-indicators">
        @for($i=0; $i<=count(array($vocabs)); $i++)
            <li data-target="#carouselExampleCaptions" data-slide-to="{{ $i }}" class=""></li>
            
        @endfor
    </ol>
    <div class="carousel-inner">
    
    @php $isFirst = true; @endphp
    
        @foreach ($vocabs as $vocab)
            <div class="carousel-item {{ $isFirst ? 'active' : '' }}">
                <img src="{{ asset('storage/assets/'.$vocab->image) }}" class="d-block w-100" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <p>{{ $vocab->name_en}}</p>
                    <p>{{ $vocab->name_in}}</p>
                    <!-- <audio src="{{ asset('storage/assets/'.$vocab->audio) }}"></audio> -->
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

@endsection