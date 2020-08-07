{{-- <!-- About Service Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('about_service', 'About Service:') !!}
    {!! Form::textarea('about_service', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('services.index') }}" class="btn btn-default">Cancel</a>
</div> --}}
