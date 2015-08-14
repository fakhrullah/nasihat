<div class="form-group">
    <label for="quoteTextarea">Petikan * <small>minimum 20 aksara</small></label>
    {!! Form::textarea('text', null, ['id'=>'quoteTextarea', 
    'class'=>'form-control', 
    'placeholder'=>'Dengan nama Allah yang Maha Pemurah lagi Maha Penyayang',
    'required'=>'required']) !!}
</div>

<div class="form-group">
    <label for="sourceInput">Nama Sumber *</label>
    {!! Form::text('source', null, ['id'=>'sourceInput', 
    'class'=>'form-control', 
    'placeholder'=>'HR Bukhari atau Al-Fatihah : 1~3',
    'required'=>'required']) !!}
</div>

<div class="form-group">
    <label for="sourceLinkInput">Pautan Sumber</label>
    {!! Form::text('source_link', null, ['id'=>'sourceLinkInput', 
    'class'=>'form-control', 
    'placeholder'=>'http://example.com']) !!}
</div>
