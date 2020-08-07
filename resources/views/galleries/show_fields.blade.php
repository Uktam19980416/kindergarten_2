<!-- Images Field -->
<div class="form-group">
    {!! Form::label('images', 'Rasm:') !!}
    <p><img src="/uploads/gallery/{{ $gallery->images }}" width="100" height="100" alt="{{ $gallery->images }}"></p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Sarlavha:') !!}
    <p>{{ $gallery->title }}</p>
</div>

