@extends('layouts.app')

@section('content')

<div class="container">
    <h3 class="">Study Mode</h3>
    
    <h1>Kategori</h1>
    <!-- HI GUYS INI ADEL GUA UDA BIKININ FUNCTION DI TRAIN SAMA TEST CONTROLLER YA BUAT GANTI STATUSNYA -->
    <!-- ini form + tombol buat gonta ganti status -->
    <!-- <form class="form-inline" action="/learned" method="post">
         {{ csrf_field() }}
        <input type="hidden" name="user_id" value="{{ $p->user_id }}">
        <input type="hidden" name="vocab_id" value="{{ $p->product_id }}">
        <input type="hidden" name="status" value="learned">
        <input type="submit" value="Learned"class="btn btn-outline-dark ml-2">
    </form> -->

    @foreach ($vocabs as $vocab)
    <img src="{{asset('storage/assets/'.$vocab->image)}}" alt="">
    @endforeach

    <!-- <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            @for($i=0; $i<=count(array($vocabs)); $i++)
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
                <div class="carousel-item {{{ $isFirst ? 'active' : '' }}}">
                    <img src="{{ asset('storage/assets/'.$vocab->image) }}" class="d-block w-100" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <p>{{$vocab->name_en}}</p>
                        <p>{{$vocab->name_in}}</p>
                        <audio src="{{ asset('storage/assets/'.$vocab->audio) }}"></audio>
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
    </div> -->
    
</div>

@endsection