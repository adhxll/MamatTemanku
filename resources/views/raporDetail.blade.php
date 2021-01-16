@extends('layouts.app')

@section('title')
Rapor - {{$data[0]->vocab->category->name}}
@endsection

@section('content')
<div class="container">
    <a href="/rapor" class="btn btn-outline-dark"> << Back <span class="font-italic" style="font-size:small;">(kembali)</span></a>
</div>
<br>
<div class="container">
    <div class="row justify-content-center">
        <h1>Results of {{$data[0]->vocab->category->name}} Category for {{ucfirst(Auth::user()->name)}}</h1>
    </div>
    <div class="row justify-content-center">
        <p>
            <text style="color:green;">Correct: {{$right}}, </text>
            <text style="color:red;"> Incorrect: {{$wrong}}</text>
        </p>
    </div>
    <div class="row justify-content-center">
        <table class="table table-bordered">
            <tbody>
                @php 
                $size = count($data);
                $count = 0;
                @endphp
                <tr>
                @for($i=0; $i<$size; $i++)
                <td>
                    <div class="card border-0" style="width: 10rem;">
                        <img class="card-img-top" src="{{ asset('storage/assets/'.$data[$i]->vocab->image) }}" alt="Card image cap" style="width: 200px; height: 200px; object-fit: cover;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $data[$i]->vocab->name_id }}</li>
                            <li class="list-group-item">{{ $data[$i]->vocab->name_en }}</li>
                            @if($data[$i]->status == 'correct')
                            <li class="list-group-item"><text style="color:green;">You answered correctly</text></li>
                            @elseif($data[$i]->status == 'incorrect')
                            <li class="list-group-item"><text style="color:red;">You answered incorrectly</text></li>
                            @endif
                        </ul>
                    </div>
                </td>
                @php $count++; @endphp
                @if($count==5 || $i == $size-1)
                    @php $count %= 5; @endphp
                </tr>
                @endif
                @endfor
            </tbody>
        </table>
    </div>
</div>
@endsection