@extends('layouts.section')

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
        .moreBox{
          display: none;
        }
    </style>
@endsection


@section('content')
    <!-- breadcrumbs -->
    <section class='page_title wave'>
        <div class='container'>
            <div class='title'>
                <h1>Bog'chamiz suratlari</h1></div>
            <nav class="bread-crumbs"><a href="{{ route('/') }}" >Menu</a><i class="delimiter fa fa-chevron-right"></i><span class="current">Galereya</span></nav>
            <!-- .breadcrumbs -->
        </div>
        <canvas class='breadcrumbs' data-bg-color='#f8f2dc' data-line-color='#f9e8b2'></canvas>
    </section>
    <!-- / breadcrumbs -->
    <!-- main container -->
    <!-- main container -->
        <div id="main" class="site-main">
            <div class="page_content">
                <!-- pattern container / -->
                <div class='left-pattern pattern pattern-2'></div>
                <!-- main content -->
                <main>
                    <div class='grid_row clearfix'>
                        <div class='grid_col grid_col_12'>
                            <div class='ce clearfix'>
                                <div id='gallery-1' class='gallery galleryid-1871 gallery-columns-3 gallery-size-large'>
                                    <div>
                                        <!-- galery item -->
                                            @include('foreach_files.gallery_images')
                                        <!-- / gallery item -->
                                        <br style="clear: both" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-12 text-center">
                        <button class="btn btn-info" id="loadMore">Ko'proq</button>
                    </div>
                </main>
                <!-- / main content -->
                <!-- pattern container / -->
                <div class='right-pattern pattern pattern-2'></div>
                <!-- footer image container / -->
                <div class="footer_image"></div>
            </div>
            <!-- svg filter -->
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="0" style='display:none;'>
                <defs>
                    <filter id="goo">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="6" result="blur" />
                        <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                        <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                    </filter>
                </defs>
            </svg>
            <!-- / svg filter -->
        </div>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="{{ asset('js/jquery-latest.min.js') }}"></script>
    <script>
        $(".moreBox").slice(0, 3).show();

        $("#loadMore").click('on', function(){
            $(".moreBox:hidden").slice(0, 3).show();

        if ($(".moreBox:hidden").length == 0) {
            $("#loadMore").fadeOut();
        }
        });
    </script>
@endsection
