@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Services
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <div class="container">
                        <form method="post" action="{{ route('services.store') }}" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label for="About Service">About Service</label>
                                    <textarea style="width:1050px; height:200px;" class="form-control" id="about_service" name="about_service"></textarea>
                                </div>
                            <button type="submit" class="btn btn-primary">Saqlash</button>    
                            <a href="{{ route('services.index') }}" class="btn btn-default">Orqaga</a>
                        </form>    
                    </div>
                    {{-- {!! Form::open(['route' => 'services.store']) !!}

                        @include('services.fields')

                    {!! Form::close() !!} --}}
                </div>
            </div>
        </div>
    </div>
@endsection
