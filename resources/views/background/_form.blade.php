<div class="form-group">
    <label for="backgroundInput">Muatnaik gambar</label>
    {!! Form::file('background', null, ['id'=>'backgroundInput', 
    'class'=>'form-control', 
    'placeholder'=>'Dengan nama Allah yang Maha Pemurah lagi Maha Penyayang']) !!}
</div>

<div class="form-group">
    <label for="uploaderInput">Nama (tak isi tak per)</label>
    {!! Form::text('uploader', null, ['id'=>'uploaderInput', 
    'class'=>'form-control', 
    'placeholder'=>'Fakhrullah Padzil']) !!}
</div>

<div class="form-group">
    <label for="linkInput">Pautan (tak isi tak per)</label>
    {!! Form::text('link', null, ['id'=>'linkInput', 
    'class'=>'form-control', 
    'placeholder'=>'http://fajarhac.com']) !!}
</div>

<div>
    <p>Syarat-syarat gambar : </p>
    <ul>
        <li>Lawa untuk dijadikan gambar latar belakang</li>
    </ul>
</div>