@extends('layouts.section')

@section('content')
            <!-- breadcrumbs -->
            <section class='page_title wave'>
                <div class='container'>
                    <div class='title'>
                        <h1>Jamoamiz xodimlari</h1></div>
                    <nav class="bread-crumbs"><a href="/" >Menu</a><i class="delimiter fa fa-chevron-right"></i><span class="current">Jamoamiz</span></nav>
                    <!-- .breadcrumbs -->
                </div>
                <canvas class='breadcrumbs' data-bg-color='#f8f2dc' data-line-color='#f9e8b2'></canvas>
            </section>
            <!-- / breadcrumbs -->
            <!-- main container -->
            <div id="main" class="site-main">
                <div class="page_content">
                    <!-- pattern container / -->
                    <div class='left-pattern pattern pattern-2'></div>
                    <!-- main content -->
                    <main>
                        @include('foreach_files.team_teachers')
                        <!-- testimonials -->
                        <div class='grid_row clearfix'>
                            <div class='grid_col grid_col_12'>
                                <div class='ce clearfix'>
                                    <h3 class="ce_title" style="text-align: center;">Ota-onalar biz haqimizda</h3>
                                    <div>
                                        <p style="text-align: center;">
                                            Bolalarning murg’ak qalbiga hech bir narsa ibratdek kuchli ta’sir etmaydi va barcha ibratlar ichida ota-ona ibratidan kuchliroq va mustahkamroq o’rin oladigan ibrat yo’q.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='grid_row clearfix'>
                            <div class='grid_col grid_col_6'>
                                <div class='ce clearfix'>
                                    <div>
                                        <div class="testimonial clearfix">
                                            <div class='quote'>Bu maktabgacha ta'lim muassasasida ta'lim olayotgan har bir bolajonlarga malakali o'qituvchilar tomonidan e'tibor qaratiladi.</div>
                                            <figure class='author'>
                                                <div class='dott'><span>.</span><span>.</span><span>.</span></div><img src='pic/bfi_thumb/teacher-1.jpg' data-at2x='pic/bfi_thumb/teacher-1@2x.jpg' alt />
                                                <figcaption>Zebiniso Qurbonova</figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='grid_col grid_col_6'>
                                <div class='ce clearfix'>
                                    <div>
                                        <div class="testimonial clearfix">
                                            <div class='quote'>Har bir bolan o'z qobiliyatiga ega. Bu MTM da oliy toifali mudiralar bolalarga o'z qobiliyatlarini rivojlantira olishlariga ko'maklashadilar.</div>
                                            <figure class='author'>
                                                <div class='dott'><span>.</span><span>.</span><span>.</span></div><img src='pic/bfi_thumb/teacher-6.jpg' data-at2x='pic/bfi_thumb/teacher-6@2x.jpg' alt />
                                                <figcaption>Diyora Niyozova</figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / testimonials -->
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