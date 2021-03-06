<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->


<!-- Mirrored from weeding.intimissibd.com/demo/index-image-background.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Feb 2017 02:17:06 GMT -->
<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pixel is a simple Apps landing website" />
    <meta name="keywords" content="Weeding, Weeding HTML5 Template, Weeding Day, Weeding Ceremony" />
    <meta name="author" content="THEMEXONE" />

    <!--====== TITLE TAG ======-->
    <title>Weeding Day</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="/image/ico" href="/img/favicon.png" />

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link href="/css/blog.css" rel="stylesheet"> -->

    <!--====== MAIN STYLESHEETS ======-->
    <link href="/style.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">


    <!---===== STYLE SWITCHER CSS =====-->
    <link rel="stylesheet" href="/js/switcher/style-switcher.css">


    <!--===== ALL COLORS CSS HERE USE YOUR PREFRRED ANY COLOR FROM HERE, BY UNCOMMENT LINK TAG ======-->
    <link rel="stylesheet" href="/css/colors/default.css" title="default">
    <link rel="stylesheet" href="/css/colors/sky.css" title="sky">
    <link rel="stylesheet" href="/css/colors/light-sky.css" title="light-sky">
    <link rel="stylesheet" href="/css/colors/pink.css" title="pink">
    <link rel="stylesheet" href="/css/colors/purple.css" title="purple">
    <link rel="stylesheet" href="/css/colors/deep-purple.css" title="deep-purple">
    <link rel="stylesheet" href="/css/colors/brown.css" title="brown">
    <link rel="stylesheet" href="/css/colors/san-marino.css" title="san-marino">
    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/js/masonry.pkgd.min.js"></script>
    <script src="/js/imagesloaded.pkgd.min.js"></script>
    <script src="/js/classie.js"></script>
    <script src="/js/colorfinder-1.1.js"></script>
    <script src="/js/gridScrollFx.js"></script>
    <!-- <%= stylesheet_link_tag "jquery.colorbox-example2", media: "all" %>
    <%= javascript_include_tag "jquery.colorbox" %> -->
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--- PRELOADER -->
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>

    <!--SCROLL TO TOP-->
    <a href="#home" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <!--START TOP AREA-->
    <header class="top-area" id="home">
        <!-- <%= yield :top_background %> -->
        @yield('top_background')
        <div class="header-top-area">
            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <!-- <%= render "partials/navigation" %> -->
                @include('partials.navigation')
            </div>
            <!--END MAINMENU AREA END-->
        </div>

        <!--HOME STATIC TEXT AREA-->
        <!-- <%= yield :welcome_text %> -->
        @yield('welcome_text')
        <!--END HOME STATIC TEXT AREA-->

    </header>
    <!--END TOP AREA-->
	<!-- <%= yield %> -->
    @yield('content')


    <!--FOOER AREA-->
    <!-- <%= render "partials/footer" %> -->
    @include('partials.footer')
    <!--FOOER AREA END-->
    <!--====== SCRIPTS JS ======-->
    <script src="/js/vendor/bootstrap.min.js"></script>
    <!--====== PLUGINS JS ======-->
    <script src="/js/vendor/jquery.easing.1.3.js"></script>
    <script src="/js/vendor/jquery-migrate-1.2.1.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.ajaxchimp.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/waypoints.min.js"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/contact-form.js"></script>
    <script src="/js/jquery.sticky.js"></script>
    <!-- <%= javascript_include_tag "lightbox" %> -->

    <!--===== ACTIVE JS=====-->
    <script src="/js/main.js"></script>

    <!--===== GOOGLE MAPS=====-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTS_KEDfHXYBslFTI_qPJIybDP3eceE-A&amp;sensor=false"></script>
    <script src="/js/maps.active.js"></script>


    <!-- STYLE SWITCHER USE ONLY FOR DEMO NOT INCLUDED IN MAIN DOWNLOADABLE FILE -->
    <script src="/js/switcher/styleswitcher.js"></script>
    <script src="/js/switcher/style-switcher-seeting.js"></script>
    

    <!--STYLE SWITCHER END-->

</body>


<!-- Mirrored from weeding.intimissibd.com/demo/index-image-background.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Feb 2017 02:17:47 GMT -->
</html>