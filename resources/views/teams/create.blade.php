@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Jamoamiz
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <div class="container">
                        <form method="post" action="{{ route('teams.store') }}" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label for="Image">Rasm</label>
                                    <input type="file" style="width: 500px;" class="form-control" id="images" name="images" value="{{ old('images') }}">
                                </div>
                                <div class="form-group">
                                    <label for="Name">Ism Familiya</label>
                                    <input type="text" style="width: 500px;" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                </div>
                                <div class="form-group">
                                    <label for="Job">Kasbi</label>
                                    <input type="text" style="width: 500px;" class="form-control" id="job" name="job" value="{{ old('job') }}">
                                </div>
                            <button type="submit" class="btn btn-primary">Saqlash</button>    
                            <a href="{{ route('teams.index') }}" class="btn btn-default">Orqaga</a>
                        </form>    
                    </div>
                    {{-- {!! Form::open(['route' => 'teams.store']) !!}

                        @include('teams.fields')

                    {!! Form::close() !!} --}}
                </div>
            </div>
        </div>
    </div>
@endsection
