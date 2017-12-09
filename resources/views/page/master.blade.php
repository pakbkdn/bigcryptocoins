<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        @if(isset($article))
        <title>{{$article->title}}</title>
        @else
        <title>BigCryptocoins</title>
        @endif
        <link rel="icon" href="{{asset('page/images/logo.ico')}}" type="image/x-icon">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic' rel='stylesheet' type='text/css'>
    	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    	<link rel="stylesheet" type="text/css" href="{{asset('page/css/bootstrap.min.css')}}" media="screen">
    	<link rel="stylesheet" type="text/css" href="{{asset('page/css/jquery.bxslider.css')}}" media="screen">
    	<link rel="stylesheet" type="text/css" href="{{asset('page/css/font-awesome.css')}}" media="screen">
    	<link rel="stylesheet" type="text/css" href="{{asset('page/css/magnific-popup.css')}}" media="screen">
    	<link rel="stylesheet" type="text/css" href="{{asset('page/css/owl.carousel.css')}}" media="screen">
        <link rel="stylesheet" type="text/css" href="{{asset('page/css/owl.theme.css')}}" media="screen">
    	<link rel="stylesheet" type="text/css" href="{{asset('page/css/ticker-style.css')}}"/>
    	<link rel="stylesheet" type="text/css" href="{{asset('page/css/style.css')}}" media="screen">

        <script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    </head>
    <body>
        {!! Toastr::render() !!}
        <!-- Container -->
        <div id="container">
            @include('page.partials.header')

            @yield('content')

        	@include('page.partials.footer')

        </div>
    	<!-- End Container -->

        <script type="text/javascript" src="{{asset('page/js/jquery.min.js')}}"></script>
    	<script type="text/javascript" src="{{asset('page/js/jquery.migrate.js')}}"></script>
    	<script type="text/javascript" src="{{asset('page/js/jquery.bxslider.min.js')}}"></script>
    	<script type="text/javascript" src="{{asset('page/js/jquery.magnific-popup.min.js')}}"></script>
    	<script type="text/javascript" src="{{asset('page/js/bootstrap.min.js')}}"></script>
    	<script type="text/javascript" src="{{asset('page/js/jquery.ticker.js')}}"></script>
    	<script type="text/javascript" src="{{asset('page/js/jquery.imagesloaded.min.js')}}"></script>
      	<script type="text/javascript" src="{{asset('page/js/jquery.isotope.min.js')}}"></script>
    	<script type="text/javascript" src="{{asset('page/js/owl.carousel.min.js')}}"></script>
    	<script type="text/javascript" src="{{asset('page/js/retina-1.1.0.min.js')}}"></script>
    	<script type="text/javascript" src="{{asset('page/js/script.js')}}"></script>

    </body>
</html>
