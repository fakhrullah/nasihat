@extends('template.master')

@section('body')
<div class="content">
    <div class="container">

        <h1>{{$title}}
            @if(isset($titleSmall))
            <small>{{$titleSmall}}</small>
            @endif
        </h1>
        
        @include('partial._status')
        @include('partial._errors')
        
        {!! Form::open(['route'=>'quote.store']) !!}
        
        @include('quote._form')
        
        <div class="form-group">
            <Label>Akan tunjuk pada : {{ $willBeShowAt  }}</label>
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