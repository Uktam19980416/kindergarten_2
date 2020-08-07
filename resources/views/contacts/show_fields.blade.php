<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $contacts->name }}</p>
</div>

<!-- Mail Field -->
<div class="form-group">
    {!! Form::label('mail', 'Mail:') !!}
    <p>{{ $contacts->mail }}</p>
</div>

<!-- Message Field -->
<div class="form-group">
    {!! Form::label('message', 'Message:') !!}
    <p>{{ $contacts->message }}</p>
</div>

