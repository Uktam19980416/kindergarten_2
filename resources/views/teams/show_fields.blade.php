<!-- Images Field -->
<div class="form-group">
    {!! Form::label('images', 'Rasm:') !!}
    <p><img src="/uploads/team/{{ $team->images }}" width="100" height="100" alt="{{ $team->images }}"></p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Ism-familiya:') !!}
    <p>{{ $team->name }}</p>
</div>

<!-- Job Field -->
<div class="form-group">
    {!! Form::label('job', 'Kasbi:') !!}
    <p>{{ $team->job }}</p>
</div>

