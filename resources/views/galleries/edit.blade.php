@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Galereya
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                  <div class="container">
                      <div class="col-md-6">
                        <form method="post" action="{{ route('galleries.update', $gallery->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                                <div class="form-group">
                                    <label for="Image">Rasm</label>
                                    <input type="file" style="width: 500px;" class="form-control" id="images" name="images" value="{{ $gallery->images }}">
                                </div>
                                <div class="form-group">
                                    <label for="Title">Sarlavha</label>
                                    <input type="text" style="width: 500px;" class="form-control" id="title" name="title" value="{{ $gallery->title }}">
                                </div>
                            <button type="submit" class="btn btn-primary">Saqlash</button>
                            <a href="{{ route('galleries.index') }}" class="btn btn-default">Orqaga</a>
                        </form>
                      </div>
                      <div class="col-md-6">
                          <img src="/uploads/gallery/{{ $gallery->images }}" width="250" height="250" alt="">
                      </div>
                  </div>

                {{-- {!! Form::model($gallery, ['route' => ['galleries.update', $gallery->id], 'method' => 'patch']) !!}

                        @include('galleries.fields')

                   {!! Form::close() !!} --}}
               </div>
           </div>
       </div>
   </div>
@endsection
