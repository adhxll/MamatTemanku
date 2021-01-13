@extends('layouts.app')

@section('title')
Rapor
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card-deck">
            @php 
            $size = count($data);
            $count =0;
            @endphp
            @for($i=0; $i<$size; $i++)
                <div class="card border-0">
                    <img class="card-img-top" src="{{ asset('storage/assets/'.$data[$i][0]->image) }}" >
                    <div class="card-body">
                        <h5 class="card-title">{{ $data[$i][0]->name}}</h5>
                        <!-- IF THE USER HAVENT FINISHED THE CATEGORY'S TEST -->
                        @if($data[$i][1]+$data[$i][2]==0)
                        <p class="card-text">No score yet.</p>
                        <a href="/categories/{{$data[$i][0]->id}}/test" class="btn btn-primary">Take the test!</a>
                        @else
                        <!-- IF THE USER ALREADY FINISH THE CATEGORY'S TEST -->
                        <p class="card-text">TOTAL SCORE: {{ $data[$i][1]/$data[$i][1]+$data[$i][2]*100 }}%</p>
                        <a href="#" class="btn btn-primary">see details</a>
                        @endif
                    </div>
                </div>
                @php $count++;@endphp
                @if($count==3)
            </div>
            <br>
            <div class="card-deck">
                @php $count%=3;@endphp
                @endif
            @endfor
            </div>
            
        </div>
    </div>
</div>
@endsection
