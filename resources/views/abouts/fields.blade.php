{{-- <!-- Who We Are Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('who_we_are', 'Who We Are:') !!}
    {!! Form::textarea('who_we_are', null, ['class' => 'form-control']) !!}
</div>

<!-- What We Do Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('what_we_do', 'What We Do:') !!}
    {!! Form::textarea('what_we_do', null, ['class' => 'form-control']) !!}
</div>

<!-- Images Field -->
<div class="form-group col-sm-6">
    {!! Form::label('images', 'Images:') !!}
    {!! Form::text('images', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('abouts.index') }}" class="btn btn-default">Cancel</a>
</div> --}}
