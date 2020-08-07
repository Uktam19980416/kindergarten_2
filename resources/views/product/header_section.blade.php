<!-- header container -->
<div class='header_cont'>
    <div class='header_mask'>
        <div class='header_pattern'></div>
        <div class='header_img'></div>
    </div>
    <header class='site_header logo-in-menu' data-menu-after="3">
        <div class="header_box">
            <div class="container">
                <!-- logo -->
                <div class="header_logo_part with_border" role="banner">
                    <a class="logo" href="/"><img src="{{asset('img/248-MTM1.png')}}" data-at2x='img/248-MTM1@2x.png' alt /></a>
                </div>
                <!-- / logo -->
                <!-- menu -->
                <div class="header_nav_part">
                    <nav class="main-nav-container a-right">
                        <div class="mobile_menu_header">
                            <i class="mobile_menu_switcher"><span></span><span></span><span></span></i>
                        </div>
                        <ul id="menu-main-menu" class="main-menu menu-bees">
                            <!-- menu item -->
                            <li class="menu-item current-menu-item page_item current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children bees-start">
                                <a href="/">
                                    <div class="bees bees-start"><span></span>
                                        <div class="line-one"></div>
                                        <div class="line-two"></div>
                                    </div>Menu
                                    <div class="canvas_wrapper">
                                        <canvas class="menu_dashed"></canvas>
                                    </div>
                                </a>
                            </li>
                        <li class="menu-item menu-item-has-children"><a href="{{ route('about') }}">Haqimizda<div class="canvas_wrapper"><canvas class="menu_dashed"></canvas></div></a></li>
                            <li class="menu-item menu-item-has-children"><a href="{{ route('team') }}">Jamoamiz<div class="canvas_wrapper"><canvas class="menu_dashed"></canvas></div></a></li>
                            <li class="menu-item menu-item-has-children right"><a href="{{ route('gallery') }}">Galeriya<div class="canvas_wrapper"><canvas class="menu_dashed"></canvas></div></a></li>
                            <li class="menu-item menu-item-has-children right"><a href="{{ route('service') }}">Servis<div class="canvas_wrapper"><canvas class="menu_dashed"></canvas></div></a></li>
                            <li class="menu-item right bees-end">
                                <a href="{{ route('contact') }}">
                                    <div class="bees bees-end"><span></span>
                                        <div class="line-one"></div>
                                        <div class="line-two"></div>
                                    </div>Kontakt
                                    <div class="canvas_wrapper">
                                        <canvas class="menu_dashed"></canvas>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- #masthead -->
</div>
<!-- / header container -->