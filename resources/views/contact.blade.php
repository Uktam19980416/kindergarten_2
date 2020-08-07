@extends('layouts.section')

@section('content')
    <!-- breadcrumbs -->
    <section class='page_title wave'>
        <div class='container'>
            <div class='title'>
                <h1>Biz bilan bog'laning</h1></div>
            <nav class="bread-crumbs"><a href="/" >Menu</a><i class="delimiter fa fa-chevron-right"></i><span class="current">Kontakt</span></nav>
            <!-- .breadcrumbs -->
        </div>
        <canvas class='breadcrumbs' data-bg-color='#f8f2dc' data-line-color='#f9e8b2'></canvas>
    </section>
    <!-- / breadcrumbs -->
    <div class="container">
        @include('inc.messages')
    </div>
    <!-- main container -->
    <div id="main" class="site-main">
        <div class="page_content">
            <!-- pattern container / -->
            <div class='left-pattern pattern pattern-2'></div>
            <!-- main content -->
            <main>
                <!-- map -->
                <div class='grid_row clearfix' style='padding-top: 0px;padding-bottom: 0px;'>
                    <div class='grid_col grid_col_12'>
                        <div class='ce clearfix'>
                            <h3 class="ce_title">Bog'chamizni xaritada ko'ring</h3>
                            <div class="map-border">
                                <div class="google-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d32753.729529237073!2d60.727833734533164!3d41.679948060778976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sBeruniy%203%20Matlubot!5e0!3m2!1suz!2s!4v1596113515436!5m2!1suz!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / map -->
                <div class='grid_row clearfix'>
                    <!-- contact detail -->
                    <div class='grid_col grid_col_4'>
                        <div class='ce clearfix'>
                            <h3 class="ce_title">Aloqa tafsilotlari</h3>
                            <div>
                                <div class='cws_fa_tbl'>
                                    <div class='cws_fa_tbl_row'>
                                        <div class='cws_fa_tbl_cell size_1x'>
                                            <div class='cws_fa_wrapper'><i class='cws_fa fa fa-1x fa-location-arrow'></i><span class='ring'></span></div>
                                        </div>
                                        <div class='cws_fa_tbl_cell'>
                                            <h2>Manzil:</h2></div>
                                    </div>
                                    <div class='cws_fa_tbl_row'>
                                        <div class='cws_fa_tbl_cell'></div>
                                        <div class='cws_fa_tbl_cell'>
                                            <p>Beruniy 3-Mavze Matlubot ko'chasi
                                                <br />
                                        </div>
                                    </div>
                                </div>
                                <div class='cws_fa_tbl'>
                                    <div class='cws_fa_tbl_row'>
                                        <div class='cws_fa_tbl_cell size_1x'>
                                            <div class='cws_fa_wrapper'><i class='cws_fa fa fa-1x fa-clock-o'></i><span class='ring'></span></div>
                                        </div>
                                        <div class='cws_fa_tbl_cell'>
                                            <h2>Dushanba &#8211; Juma</h2></div>
                                    </div>
                                    <div class='cws_fa_tbl_row'>
                                        <div class='cws_fa_tbl_cell'></div>
                                        <div class='cws_fa_tbl_cell'>
                                            <p>8:00 &#8211; 17:00
                                                <br />
                                        </div>
                                    </div>
                                </div>
                                <div class='cws_fa_tbl'>
                                    <div class='cws_fa_tbl_row'>
                                        <div class='cws_fa_tbl_cell size_1x'>
                                            <div class='cws_fa_wrapper'><i class='cws_fa fa fa-1x fa-phone'></i><span class='ring'></span></div>
                                        </div>
                                        <div class='cws_fa_tbl_cell'>
                                            <h2>Mobil aloqa:</h2></div>
                                    </div>
                                    <div class='cws_fa_tbl_row'>
                                        <div class='cws_fa_tbl_cell'></div>
                                        <div class='cws_fa_tbl_cell'>
                                            <p><a href="tel:1-800-123-45678"> (90) 963 07 36</a>
                                                <br />
                                        </div>
                                    </div>
                                </div>
                                <div class='cws_fa_tbl'>
                                    <div class='cws_fa_tbl_row'>
                                        <div class='cws_fa_tbl_cell size_1x'>
                                            <div class='cws_fa_wrapper'><i class='cws_fa fa fa-1x fa-envelope'></i><span class='ring'></span></div>
                                        </div>
                                        <div class='cws_fa_tbl_cell'>
                                            <h2>Email:</h2></div>
                                    </div>
                                    <div class='cws_fa_tbl_row'>
                                        <div class='cws_fa_tbl_cell'></div>
                                        <div class='cws_fa_tbl_cell'>
                                            <p><a href="mailto:mail@mail.com"> www.248MTT@mail.com</a>
                                                <br />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / contact detail -->
                        
                    <!-- contact form -->
                    <div class='grid_col grid_col_8'>
                        <div class='ce clearfix'>
                            <h3 class="ce_title">Xabar qoldirishingiz mumkin.</h3>
                            <div>
                                <div role="form" class="cf" id="cf-f16-p10-o1" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response"></div>
                                        @include('inc.getcontact')
                                    <div class="email_server_responce"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / conatct form -->
                </div>
            </main>
            <!-- / main content -->
            <!-- patter container / -->
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
    <!-- #main -->
@endsection