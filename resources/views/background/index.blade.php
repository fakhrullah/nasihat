@extends('template.master')

@section('body')
<div class="content">
    <div class="container">

        <h1>{{$title}}
        </h1>
        
        @include('partial._status')
        @include('partial._errors')

        @if($backgroundLast)
        <p>Klik <strong>SET</strong> untuk setkan gambar ditunjukkan pada 
            <strong>{{$backgroundLast->show_at->addDay()->format('d/m/Y')}}</strong></p>
        
        <p>Gambar latar terakhir yang di set ialah {{$backgroundLast->show_at->format('j M')}} iaitu 
            <em>{{timeDiff($backgroundLast->show_at)}}</em></p>
        
        @else
        <p>Belum ada gambar yang dimasukkan. <a href="{{route('background.create')}}">Muatnaik gambar baru</a></p>
        <p>Klik <strong>SET</strong> untuk setkan gambar ditunjukkan pada 
            <strong>{{\Carbon::today()->format('d/m/Y')}}</strong></p>
        @endif
        
        @if($quoteLast)
        <p>Manakala petikan terakhir di set ialah pada {{$quoteLast->show_at->format('j M')}} iaitu 
        <em>{{timeDiff($quoteLast->show_at)}}</em></p>
        @endif
        
        @if(count($backgrounds))
        
        <div class="row">
            @foreach($backgrounds as $background)
            <div class="col-sm-4">
                <img src="{{URL::asset($background->src)}}" height="200"/>
                {!! Form::open(['route'=>['background.update',$background->id], 'method'=>'PUT' ]) !!}
                {!! Form::submit('SET', ['class'=>'btn btn-default']) !!}
                {!! Form::close() !!}
                
                {!! Form::open(['route'=>['background.destroy', $background->id], 'method'=>'DELETE' ]) !!}
                {!! Form::submit('DEL', ['class'=>'btn btn-default']) !!}
                {!! Form::close() !!}
            </div>
            @endforeach
        </div>
        
        @else
        <div class="warning">Tiada gambar belum di SET. <a href="{{route('background.create')}}">Muatnaik gambar baru</a></div>
        @endif

    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{URL::asset('css/app.css')}}"/>
@endsection