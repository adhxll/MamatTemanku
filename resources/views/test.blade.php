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

        @foreach($quiz->questions as $question)
            <fieldset class="form-group row">
                <legend>{{ $question->question }}</legend>
                <?php $j = 1 ?>
                <div class="form-check">
                    @foreach($test->vocab as $answer)
                        <div class="row">
                            <label class="form-check-label col-md-6" for="{{$test->id}}">  {{ $answer->answer }} </label>
                            <img src="{{ asset('storage/assets/'.$vocab->image) }}" class="img-responsive d-block w-100" alt="" style="object-fit: contain; max-height:600px;">
                            <input type="radio" class="form-check-input col-md-6" name="{{$test->id}}" value="{{$answer->id}}" {{ $j==1 ? 'checked' : '' }}>
                            <?php $j++ ?>
                        </div>
                    @endforeach
                </div>
            </fieldset>
            <?php $i++ ?>
        @endforeach
        @foreach ($vocabs as $vocab)
            {{$vocab->name_en}}
            
        @endforeach

        {{$vocabs->links()}}
    </div>
@endsection