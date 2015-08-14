@extends('template.master')

@section('body')
<div class="content">
    <div class="container">

        <h1>{{$title}}
            @if(isset($titleSmall))
            <small>{{$titleSmall}}</small>
            @endif
        </h1>

        {!! Form::model($quote,['route'=>['quote.update',$dmY], 'method'=>'PUT']) !!}

        @include('quote._form')

        <div class="form-group text-right">
            <button class="btn btn-primary">Kemaskini</button>
        </div>

        {!! Form::close() !!}
        
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{URL::asset('css/app.css')}}"/>
@endsection