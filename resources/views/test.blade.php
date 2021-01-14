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
        <div class="card" style="width: 100%;">
            <img src="{{ asset('storage/assets/'.$vocab->image) }}" class="card-img-top img-responsive d-block w-100" alt="" style="object-fit: contain; max-height:600px;">
            <div class="card-body">
                <h6 class="card-title">What's the name of the picture above?</h6>
    
                <form class="container">
                    @foreach($answers as $answer)
                    <div class="form-group">
                        <input class="form-check-input" type="radio" name="answer" id="answer.{{$answer->id}}" value="{{$answer->name_en}}">
                        <label class="form-check-label" for="answer.{{$answer->id}}">
                            {{$answer->name_en}}
                        </label>
                    </div>
                    @endforeach
                </form>

                <a href="#" class="btn btn-primary">Submit</a>
            </div>
        </div>
        @endforeach

        {{$vocabs->links()}}
    </div>
@endsection