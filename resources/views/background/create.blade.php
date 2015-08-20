@extends('template.master')

@section('body')
<div class="content">
    <div class="container">

        <h1>{{$title}}
        </h1>

        @include('partial._status')
        @include('partial._errors')

        {!! Form::open(['route'=>'background.store', 'files'=>true]) !!}

        @include('background._form')

        <div class="form-group">
            <label for="manusiaInput">Satu tambah satu sama dengan ? <small>jawab dalam perkataan</small></label>
            {!! Form::text('manusia', null, ['id'=>'manusiaInput', 
            'class'=>'form-control', 
            'placeholder'=>'jawab']) !!}
        </div>

        <div class="form-group text-right">
            <button class="btn btn-primary">Hantar</button>
        </div>

        {!! Form::close() !!}

    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{URL::asset('css/app.css')}}"/>
@endsection