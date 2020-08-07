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
                    <div class="col-md-6">
                        <form method="post" action="{{ route('teams.update', $team->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="Image">Rasm</label>
                                <input type="file" style="width: 500px;" class="form-control" id="images" name="images" value="{{ $team->images }}">
                            </div>
                            <div class="form-group">
                               <label for="Name">Ism-familiya</label>
                               <input type="text" style="width: 500px;" class="form-control" id="name" name="name" value="{{ $team->name }}">
                            </div>
                            <div class="form-group">
                               <label for="Job">Kasbi</label>
                               <input type="text" style="width: 500px;" class="form-control" id="job" name="job" value="{{ $team->job }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Saqlash</button>    
                            <a href="{{ route('teams.index') }}" class="btn btn-default">Orqaga</a>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <img src="/uploads/team/{{ $team->images }}" style="width: 300px; height: 300px;" alt="">
                    </div>    
                </div>
                   {{-- {!! Form::model($team, ['route' => ['teams.update', $team->id], 'method' => 'patch']) !!}

                        @include('teams.fields')

                   {!! Form::close() !!} --}}
               </div>
           </div>
       </div>
   </div>
@endsection