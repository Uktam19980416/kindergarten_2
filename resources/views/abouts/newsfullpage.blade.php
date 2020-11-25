@extends('layouts.section')
<?php
function sana($date){
  switch($date){
    case '01':
      return 'Yanvar';
      break;
    case '02':
      return 'Fevral';
      break;
    case '03':
      return 'Mart';
      break;
    case '04':
      return 'Aprel';
      break;
    case '05':
      return 'May';
      break;
    case '06':
      return 'Iyun';
      break;
    case '07':
      return 'Iyul';
      break;
    case '08':
      return 'Avgust';
      break;
    case '09':
      return 'Sentabr';
      break;
    case '10':
      return 'Oktabr';
      break;
    case '11':
      return 'Noyabr';
      break;
    case '12':
      return 'Dekabr';
      break;
  }
}
?>
@section('content')
    <!-- breadcrumbs -->
    <section class='page_title wave'>
        <div class='container'>
            <div class='title'>
                <h1>Yangi Maqola</h1></div>
            <nav class="bread-crumbs"><a href="/" >Menu</a><i class="delimiter fa fa-chevron-right"></i><span class="current">Yangi Maqola</span></nav>
            <!-- .breadcrumbs -->
        </div>
        <canvas class='breadcrumbs' data-bg-color='#f8f2dc' data-line-color='#f9e8b2'></canvas>
    </section>
    <!-- / breadcrumb -->
    <!-- main container -->
    <div id="main" class="site-main">
        <div class="page_content single_sidebar">
            <!-- pattern container / -->
            <div class="left-pattern pattern pattern-2"></div>
            <!-- container -->
            <!-- content -->
            <div class='container'>
                <!-- sidebar -->
                <!-- sidebar -->
                <aside class='sb_left'>
                    <div class="cws-widget">
                        <div class="widget-title">Kalendar</div>
                        <div id="calendar">
                        </div>
                    </div>
                </aside>
                <!-- / side bar -->
                <!-- main -->
                <main>
                    <div class="grid_row clearfix">
                        <!-- page content -->
                        <section class="news single">
                            <div class="cws_wrapper">
                                <div class="grid">
                                    <!-- blog item -->
                                    <article class="item clearfix">
                                        <div class='media_info_wrapper'>
                                            <div class="media_part">
                                                <div class='pic'><img src='/uploads/about/{{ $news->images }}' data-at2x='pic/bfi_thumb/848x477-Full-HD-3-304vqid60oclabjkgdh4wa@2x.jpg' alt />
                                                    <div class='hover-effect'></div>
                                                    <div class='links_popup'>
                                                        <div class='link_cont'>
                                                            <div class='link'>
                                                                <a class='fancy' href='/uploads/about/{{ $news->images }}'><i class='fa fa-camera'></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='post_content_wrap'>
                                            <div class='post_content'>
                                                <p>{{ $news->description }}</p>
                                            </div>
                                            <div class='meta_cont_wrapper'>
                                                <div class='meta_cont'>
                                                    <div class="post_info">
                                                        <div class='date_default'><i class='fa fa-calendar'></i>
                                                            <span class='day'>{{ $news->updated_at->format('d') }}</span>
                                                            <span class='month' title='July'>
                                                            <span><?=sana($news->updated_at->format('m'))?></span></span>
                                                            <span class='year'>{{ $news->updated_at->format('Y') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- / blog item -->
                                </div>
                            </div>
                        </section>
                        <!-- / page content -->
                    </div>
                </main>
            </div>
            <!-- pattern container -->
            <div class="right-pattern pattern pattern-2"></div>
            <!-- footer  image / -->
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
