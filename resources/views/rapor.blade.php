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
                <div class="card border-0 text-center">
                    <img class="card-img-top" src="{{ asset('storage/assets/'.$data[$i][0]->image) }}" >
                    <div class="card-body">
                        <h5 class="card-title"><b>{{ strtoupper($data[$i][0]->name)}}</b></h5>
                        <ul class="list-group list-group-flush">
                                
                            <!-- IF THE USER HAVENT FINISHED THE CATEGORY'S TEST -->
                            @if($data[$i][1]+$data[$i][2]==0)
                            <li class="list-group-item"><p class="card-text">No score yet.</p></li>
                        </ul>
                        <div class="card-footer" style="background:white;">
                            <a href="/categories/{{$data[$i][0]->id}}/test" class="btn btn-secondary">Take the test!</a>
                            @else
                            <!-- IF THE USER ALREADY FINISH THE CATEGORY'S TEST -->
                            <li class="list-group-item"><p class="card-text">TOTAL SCORE: {{ $data[$i][1]}}/{{$data[$i][1]+$data[$i][2] }}</p></li>
                        </ul>
                        <!-- <div class="row justify-content-center"> -->
                        <div class="card-footer" style="background:white;">
                            <form class="form-inline d-flex justify-content-center" action="/rapordetail" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="category" value="{{ $data[$i][0]->id }}">
                                <input type="hidden" name="right" value="{{ $data[$i][1] }}">
                                <input type="hidden" name="wrong" value="{{ $data[$i][1] }}">
                                <input type="submit" value="See details" class="btn btn-success">
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
                @php $count++;@endphp
                @if($count==3 || $i == $size-1)
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
