@extends('template.master')

@section('body')
<div class="content">
    <div class="container">

        <h1>{{$title}}
        </h1>

        <p>Gambar latar terakhir yang di set ialah {{$backgroundLast->show_at->format('j M')}} iaitu 
            <em>{{timeDiff($backgroundLast->show_at)}}</em></p>
        <p>Manakala petikan terakhir di set ialah pada {{$quoteLast->show_at->format('j M')}} iaitu 
        <em>{{timeDiff($quoteLast->show_at)}}</em></p>
        
        <p>Klik <strong>SET</strong> untuk setkan gambar ditunjukkan pada <strong>{{$backgroundLast->show_at->addDay()->format('d/m/Y')}}</strong></p>
        
        <div class="row">
            @foreach($backgrounds as $background)
            <div style="display: inline-block;">
                <img src="{{URL::asset('uploads/backgrounds/'.$background->src)}}" height="200"/>
                {!! Form::open(['route'=>['background.update',$background->id], 'method'=>'PUT' ]) !!}
                {!! Form::submit('SET', ['class'=>'btn btn-default']) !!}
                {!! Form::close() !!}
            </div>
            @endforeach
        </div>

    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{URL::asset('css/app.css')}}"/>
@endsection