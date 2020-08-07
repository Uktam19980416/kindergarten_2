@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Yangiliklar
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                <div class="container">
                    <div class="col-md-6">
                        <form method="post" action="{{ route('abouts.update', $about->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="Image">Rasm</label>
                                <input type="file" style="width: 500px;" class="form-control" id="images" name="images" value="{{ $about->images }}">
                            </div>
                            <div class="form-group">
                               <label for="Title">Sarlavha</label>
                               <input type="text" style="width: 500px;" class="form-control" id="title" name="title" value="{{ $about->title }}">
                            </div>
                            <div class="form-group">
                               <label for="Description">Ta'rif</label>
                               <input type="text" style="width: 500px;" class="form-control" id="description" name="description" value="{{ $about->description }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Saqlash</button>    
                            <a href="{{ route('abouts.index') }}" class="btn btn-default">Orqaga</a>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <img src="/uploads/about/{{ $about->images }}" style="width: 300px; height: 300px;" alt="">
                    </div>    
                </div>
                   {{-- {!! Form::model($about, ['route' => ['abouts.update', $about->id], 'method' => 'patch']) !!}

                        @include('abouts.fields')

                   {!! Form::close() !!} --}}
               </div>
           </div>
       </div>
   </div>
@endsection