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

        {!! app('captcha')->display(); !!}

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