<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>BigCryptocoins</title>
        <!-- Stylesheets -->
        <link href="page/css/bootstrap.css" rel="stylesheet">
        <link href="page/css/style.css" rel="stylesheet">
        <link href="page/css/responsive.css" rel="stylesheet">

        <!--Color Themes-->
        <link id="theme-color-file" href="page/css/color-themes/default-theme.css" rel="stylesheet">

        <!--Favicon-->
        <link rel="shortcut icon" href="page/images/favicon.png" type="image/x-icon">
        <link rel="icon" href="page/images/favicon.png" type="image/x-icon">
        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
        <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    </head>
    <body>
        <div class="page-wrapper">

            @include('page.partials.header')

            @yield('content')

        	@include('page.partials.footer')

        </div>
        <!--End pagewrapper-->

        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>

        <!--End Scroll to top-->

        <script src="page/js/jquery.js"></script>
        <script src="page/js/bootstrap.min.js"></script>
        <script src="page/js/jquery.fancybox.pack.js"></script>
        <script src="page/js/jquery.fancybox-media.js"></script>
        <script src="page/js/owl.js"></script>
        <script src="page/js/appear.js"></script>
        <script src="page/js/wow.js"></script>
        <script src="page/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="page/js/color-settings.js"></script>
        <script src="page/js/script.js"></script>

    </body>
</html>
