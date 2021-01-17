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

        <div class="card" style="width: 100%;">
            @foreach ($vocabs as $vocab)
                <br>
                <img src="{{ asset('storage/assets/'.$vocab->image) }}" class="card-img-top img-responsive d-block w-100" alt="" style="object-fit: contain; max-height:600px;">
                <div class="card-body">
                    {{-- buat alert jawaban yang dimasukkan salah/benar --}}
                    @if(\Session::has('done'))
                    <div class="alert alert-warning text-center">
                        <p>{{\Session::get('done')}}</p>
                    </div>
                    @endif

                    @if(\Session::has('correct'))
                    <div class="alert alert-success text-center">
                        <p>{{\Session::get('correct')}}</p>
                    </div>
                    @endif

                    @if(\Session::has('incorrect'))
                    <div class="alert alert-danger text-center">
                        <p>{{\Session::get('incorrect')}}</p>
                    </div>
                    @endif

                    <h5 class="card-title text-center font-weight-bold">What's the name of the picture above?</h5>
            
                    @if($vocab['tests']->where('user_id','like', Auth()->user()->id)->first()->status != 'none')
                    <div class="alert alert-light text-center">
                        You've answered this question. 
                    </div> 
                    @else
                    <div class="container text-center">
                        <form action="/checkAnswer" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="vocab_id" value="{{ $vocab->id }}">

                            @foreach($answers as $answer)
                            <div class="form-group">
                                <input class="form-check-input" type="radio" name="answer" id="answer.{{$answer->id}}" value="{{$answer->name_en}}">
                                <label class="form-check-label" for="answer.{{$answer->id}}">
                                    {{$answer->name_en}}
                                </label>
                            </div>
                            @endforeach

                            <input type="submit" value="Check my answer." class="btn btn-warning">
                        </form>
                    </div>
                    @endif
                </div>
                @php 
                    $count = 0; 
                    $size = count($testarray);
                    for($i =0; $i<$size; $i++){
                        if($testarray[$i]['status'] !='none') $count++;
                    }
                    
                @endphp

                @if($count == $answers->count())
                @php
                    header("Location: " . URL::to('/rapor'), true, 302);
                    exit();
                @endphp
                @endif
            @endforeach
            <br>
            <div class="d-flex justify-content-center">
                {{$vocabs->links()}}
            </div>
        </div>
        
    </div>
@endsection