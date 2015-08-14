@extends('template.master')

@section('body')
<div class="content">
    <div class="container">
        
        <h1>{{$title}}
            @if(isset($titleSmall))
            <small>{{$titleSmall}}</small>
            @endif
        </h1>
        
        {!! Form::open(['route'=>'quote.store']) !!}
        <div class="form-group">
            <label for="quoteTextarea">Petikan * <small>minimum 20 aksara</small></label>
            {!! Form::textarea('text', '', ['id'=>'quoteTextarea', 
                'class'=>'form-control', 
                'placeholder'=>'Dengan nama Allah yang Maha Pemurah lagi Maha Penyayang',
                'required'=>'required']) !!}
        </div>
        <div class="form-group">
            <label for="sourceInput">Nama Sumber *</label>
            {!! Form::text('source', '', ['id'=>'sourceInput', 
                'class'=>'form-control', 
                'placeholder'=>'HR Bukhari atau Al-Fatihah : 1~3',
                'required'=>'required']) !!}
        </div>
        <div class="form-group">
            <label for="sourceLinkInput">Pautan Sumber</label>
            {!! Form::text('source_link', '', ['id'=>'sourceLinkInput', 
                'class'=>'form-control', 
                'placeholder'=>'http://example.com']) !!}
        </div>
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