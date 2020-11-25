<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="{{asset('img/cropped-favicon-192x192.png')}}" />
    <title>248-MTM</title>
    <link rel='stylesheet' href="{{asset('revslider/css/settings.css')}}" type='text/css' media='all' />

    <link rel='stylesheet' href="{{asset('css/font-awesome.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('css/jquery.fancybox.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('css/select2.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('css/animate.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('css/main.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('css/shop.css')}}" type='text/css' media='all' />
    {{-- <link rel='stylesheet' href="{{asset('tuner/style.css')}}" type='text/css' media='all' /> --}}
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script type='text/javascript' src="{{asset('js/jquery.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/jquery-migrate.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('revslider/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('revslider/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('revslider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('revslider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('revslider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('revslider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <link rel="icon" href="{{asset('img/cropped-favicon-32x32.png')}}" sizes="32x32" />
    <link rel="icon" href="{{asset('img/cropped-favicon-192x192.png')}}" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="{{asset('img/cropped-favicon-180x180.png')}}">
    <meta name="msapplication-TileImage" content="img/cropped-favicon-270x270.png">
    @yield('css')
</head>

<body class="home page wide wave-style">
    <div class="page">
        @include('product.header_section')
        @yield('content')
        <!-- footer -->
        <div class='footer_wrapper_copyright'>
            <!-- canvas -->
            <div class='half_sin_wrapper'>
                <canvas class='half_sin' data-bg-color='23,108,129' data-line-color='23,108,129'></canvas>
            </div>
            <!-- / canvas -->
            @include('product.footer')
        </div>
    </div>
    <div class='scroll_top animated'></div>
    <script type='text/javascript' src="{{ asset('js/jquery-ui.min.js') }}"></script>
    {{-- <script type='text/javascript' src="{{asset('tuner/tuner/js/colorpicker.js')}}"></script> --}}
    {{-- <script type='text/javascript' src="{{asset('tuner/tuner/js/scripts.js')}}"></script> --}}
    <script type='text/javascript' src="{{asset('js/retina_1.3.0.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/modernizr.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/owl.carousel.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/TweenMax.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/jquery.isotope.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/jquery.fancybox.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/select2.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/wow.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/jquery.form.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/scripts.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/jquery.tweet.js')}}"></script>
    @yield('js')
</body>


</html>
