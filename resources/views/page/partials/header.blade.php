<!-- Header
    ================================================== -->
<header class="clearfix">
    <!-- Bootstrap navbar -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation">

        <!-- Top line -->
        <div class="top-line">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <strong>
                            <ul class="top-line-list">
                                <li><span class="time-now"><?php $date = getdate();

                                    echo $date['weekday'];
                                    echo "-".$date['mday'];
                                    echo "-".$date['mon'];
                                    echo "-".$date['year'];
                                    echo " | ".$date['hours'];
                                    echo ": ".$date['minutes'];
                                    ?> GMT +0</span>

                                </li>
                        </ul>
                    </strong>
                    </div>
                    <div class="col-md-8">
                        <marquee>
                            <script type="text/javascript">
                                baseUrl = "https://widgets.cryptocompare.com/";
                                var scripts = document.getElementsByTagName("script");
                                var embedder = scripts[ scripts.length - 1 ];
                                (function (){
                                var appName = encodeURIComponent(window.location.hostname);
                                if(appName==""){appName="local";}
                                var s = document.createElement("script");
                                s.type = "text/javascript";
                                s.async = true;
                                var theUrl = baseUrl+'serve/v3/coin/header?fsyms=BTC,ETH,USDT&tsyms=USD';
                                s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                                embedder.parentNode.appendChild(s);
                                })();
                            </script>
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top line -->

        <!-- Logo & advertisement -->
        <div class="logo-advertisement">
            <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}"><img style="margin-left: 100px!important;" src="{{asset('page/images/logo.png')}}" alt=""></a>
                </div>

                <div class="advertisement">
                    <div class="desktop-advert">
                        <span>Advertisement</span>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="{{asset('page/upload/addsense/728x90.jpg')}}" alt="">
                                </div>

                                <div class="item">
                                    <img src="{{asset('page/upload/addsense/728x90.jpg')}}" alt="">
                                </div>

                                <div class="item">
                                    <img src="{{asset('page/upload/addsense/728x90.jpg')}}" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tablet-advert">
                        <span>Advertisement</span>
                        <img src="{{asset('page/upload/addsense/468x60.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Logo & advertisement -->

        <!-- navbar list container -->
        <div class="nav-list-container">
            <div class="container">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">
                        <li ><a class="home" href="{{url('/')}}">Home</a></li>
                        @foreach($categories as $category)
                            <li ><a class="home" href="{{url('category/'.$category->alias)}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                    <form class="navbar-form navbar-right" role="search" action="{{url('search')}}" method="get">
                        <input type="text" id="search" name="search" value="{{ isset($_GET['search']) ? $_GET['search'] : ''}}" placeholder="Search...">
                        <button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </div>
        <!-- End navbar list container -->

    </nav>
    <!-- End Bootstrap navbar -->

</header>
<!-- End Header -->
