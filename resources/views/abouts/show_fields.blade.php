<!-- Images Field -->
<div class="form-group">
    {!! Form::label('images', 'Rasm:') !!}
    <p><img src="/uploads/about/{{ $about->images }}" width="100" height="100" alt=""></p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Sarlavha:') !!}
    <p>{{ $about->title }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Ta\'rif:') !!}
    <p>{{ $about->description }}</p>
</div>

