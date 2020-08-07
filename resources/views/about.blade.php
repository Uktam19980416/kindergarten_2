@extends('layouts.section')

@section('content')
   
<section class='page_title wave'>
    <div class='container'>
        <div class='title'>
            <h1>Biz haqimizda</h1></div>
        <nav class="bread-crumbs"><a href="index-2.html" >Menu</a><i class="delimiter fa fa-chevron-right"></i><span class="current">Haqimizda</span></nav>
        <!-- .breadcrumbs -->
    </div>
    <canvas class='breadcrumbs' data-bg-color='#f8f2dc' data-line-color='#f9e8b2'></canvas>
</section>

<!-- main container -->
        <div id="main" class="site-main">
            <div class="page_content">
                <!-- pattern container / -->
                <div class='left-pattern pattern pattern-2'></div>
                <main>
                    <!-- content section -->
                    <div class='grid_row clearfix'>
                        <div class='grid_col grid_col_6'>
                            <div class='ce clearfix'>
                                <h3 class="ce_title">Biz Haqimizda</h3>
                                <div>
                                    <p><img class="size-medium image-type alignleft" src="pic/2015/03/our_team_2-300x300.jpg" width="150" height="150" alt="our_team_2" />
                                        "248-MTM" Olmozor tumanida,   Beruniy 3-Mavze Matlubot ko'chasida, shinam va zamonaviy bezatilgan va joyda joylashgan. Bolalar bog'chamiz atrofidagi mevali va ignabargli daraxtlar maxsus mikroiqlimni yaratadi. Bog'chamizda ikkita suzish havzasi, futbol maydonchasi va tennis korti mavjud.
                                    </p>
                                    <p>&nbsp;</p>
                                </div>
                            </div>
                        </div>
                        <!-- accordion -->
                        <div class='grid_col grid_col_6'>
                            <div class='ce clearfix'>
                                <h3 class="ce_title">&nbsp;</h3>
                                <!-- image float -->
                                <div>
                                    <p><img class="alignleft image-type" src="pic/2015/04/pic_typorgaphy-300x300.jpg" width="150" height="150" alt="pic_typorgaphy" />248-MTM bu butun baxt, uyg'unlik va sevgi dunyosidir. Bizda sog'lom atmosfera, to'g'ri rejim va bolalarning rivojlanishi uchun eng yaxshi usullar mavjud. Shuningdek, bizning bolalar bog'chamizda eng yaxshi tarbiyachilar bor, ular har doim bolalaringizga yuragini berishga tayyor va ularga g'amxo'rlik qilishga o'rgatishadi, har kuni o'rganishni sevishga yordam berishadi. Ota-onalar bizga ishonch bildirishadi va bizning ishimizning asosiy maqsadi sizning ishonchingizni oqlashdir.
                                        &nbsp;</p>
                                </div>
                                <!-- / image float -->
                            </div>
                        </div>
                    </div>
                    <!-- / content section -->
                    @include('foreach_files.about_news')
                </main>
                <!-- pattern section / -->
                <div class='right-pattern pattern pattern-2'></div>
                <!-- footer container image / -->
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
        <!-- #main -->
@endsection