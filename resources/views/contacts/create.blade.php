@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Kontakt
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <div class="container">
                        <form method="post" action="{{ route('contacts.store') }}" enctype="multipart/form-data">
                            @csrf
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Name">Ism-familiya</label>
                                        <input type="text" style="width: 500px;" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Mail">Email</label>
                                        <input type="email" style="width: 500px;" class="form-control" id="email" name="email" value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Message">Xabar</label>
                                    <textarea style="width:1050px; height:200px;" class="form-control" id="message" name="message"></textarea>
                                </div>
                            <button type="submit" class="btn btn-primary">Saqlash</button>    
                            <a href="{{ route('contacts.index') }}" class="btn btn-default">Orqaga</a>
                        </form>    
                    </div>
                    {{-- {!! Form::open(['route' => 'contacts.store']) !!}

                        @include('contacts.fields')

                    {!! Form::close() !!} --}}
                </div>
            </div>
        </div>
    </div>
@endsection
