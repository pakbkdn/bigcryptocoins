<!-- sidebar -->
<div class="sidebar">


    <div class="widget features-slide-widget">
        <div class="">
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
                var theUrl = baseUrl+'serve/v1/coin/multi?fsyms=BTC,ETH,USDT,XRP,LTC&tsyms=USD,EUR,BTC';
                s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                embedder.parentNode.appendChild(s);
                })();
            </script>
        </div>
        <div class="title-section">
            <h1><span>Featured Posts</span></h1>
        </div>
        <div class="image-post-slider">
            <ul class="bxslider">
                <li>
                    <div class="news-post image-post2">
                        <div class="post-gallery">
                            <img src="{{asset('page/upload/news-posts/im3.jpg')}}" alt="">
                            <div class="hover-box">
                                <div class="inner-hover">
                                    <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                        <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                        <li><i class="fa fa-eye"></i>872</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="news-post image-post2">
                        <div class="post-gallery">
                            <img src="{{asset('page/upload/news-posts/im1.jpg')}}" alt="">
                            <div class="hover-box">
                                <div class="inner-hover">
                                    <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                        <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                        <li><i class="fa fa-eye"></i>872</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="news-post image-post2">
                        <div class="post-gallery">
                            <img src="{{asset('page/upload/news-posts/im2.jpg')}}" alt="">
                            <div class="hover-box">
                                <div class="inner-hover">
                                    <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                        <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                        <li><i class="fa fa-eye"></i>872</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="fb-page" data-href="https://www.facebook.com/bigcryptocoins/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
        <blockquote cite="https://www.facebook.com/bigcryptocoins/" class="fb-xfbml-parse-ignore">
            <a href="https://www.facebook.com/bigcryptocoins/">Bigcryptocpoins</a>
        </blockquote>
    </div>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11&appId=222636254944151';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <div class="advertisement">
        <div class="desktop-advert">
            <span>Advertisement</span>
            <img src="{{asset('page/upload/addsense/300x250.jpg')}}" alt="">
        </div>
        <div class="tablet-advert">
            <span>Advertisement</span>
            <img src="{{asset('page/upload/addsense/200x200.jpg')}}" alt="">
        </div>
        <div class="mobile-advert">
            <span>Advertisement</span>
            <img src="{{asset('upload/addsense/300x250.jpg')}}" alt="">
        </div>
    </div>

    <div class="widget tab-posts-widget">

        <ul class="nav nav-tabs" id="myTab">
            <li class="active">
                <a href="#option1" data-toggle="tab">Popular</a>
            </li>
            <li>
                <a href="#option2" data-toggle="tab">Recent</a>
            </li>
            <li>
                <a href="#option3" data-toggle="tab">Top Reviews</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="option1">
                <ul class="list-posts">
                    <li>
                        <img src="{{asset('page/upload/news-posts/listw1.jpg')}}" alt="">
                        <div class="post-content">
                            <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                            <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <img src="{{asset('page/upload/news-posts/listw2.jpg')}}" alt="">
                        <div class="post-content">
                            <h2><a href="single-post.html">Sed arcu. Cras consequat. </a></h2>
                            <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <img src="{{asset('page/upload/news-posts/listw3.jpg')}}" alt="">
                        <div class="post-content">
                            <h2><a href="single-post.html">Phasellus ultrices nulla quis nibh. Quisque a lectus.  </a></h2>
                            <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <img src="{{asset('page/upload/news-posts/listw4.jpg')}}" alt="">
                        <div class="post-content">
                            <h2><a href="single-post.html">Donec consectetuer ligula vulputate sem tristique cursus. </a></h2>
                            <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <img src="{{asset('page/upload/news-posts/listw5.jpg')}}" alt="">
                        <div class="post-content">
                            <h2><a href="single-post.html">Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi. </a></h2>
                            <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="tab-pane" id="option2">
                <ul class="list-posts">

                    <li>
                        <img src="{{asset('page/upload/news-posts/listw3.jpg')}}" alt="">
                        <div class="post-content">
                            <h2><a href="single-post.html">Phasellus ultrices nulla quis nibh. Quisque a lectus. </a></h2>
                            <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <img src="{{asset('page/upload/news-posts/listw4.jpg')}}" alt="">
                        <div class="post-content">
                            <h2><a href="single-post.html">Donec consectetuer ligula vulputate sem tristique cursus. </a></h2>
                            <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <img src="{{asset('page/upload/news-posts/listw5.jpg')}}" alt="">
                        <div class="post-content">
                            <h2><a href="single-post.html">Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</a></h2>
                            <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <img src="{{asset('page/upload/news-posts/listw1.jpg')}}" alt="">
                        <div class="post-content">
                            <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                            <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <img src="{{asset('page/upload/news-posts/listw2.jpg')}}" alt="">
                        <div class="post-content">
                            <h2><a href="single-post.html">Sed arcu. Cras consequat.</a></h2>
                            <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="tab-pane" id="option3">
                <ul class="list-posts">

                    <li>
                        <img src="{{asset('page/upload/news-posts/listw4.jpg')}}" alt="">
                        <div class="post-content">
                            <h2><a href="single-post.html">Donec consectetuer ligula vulputate sem tristique cursus. </a></h2>
                            <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <img src="{{asset('page/upload/news-posts/listw1.jpg')}}" alt="">
                        <div class="post-content">
                            <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                            <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <img src="{{asset('page/upload/news-posts/listw3.jpg')}}" alt="">
                        <div class="post-content">
                            <h2><a href="single-post.html">Phasellus ultrices nulla quis nibh. Quisque a lectus.  </a></h2>
                            <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <img src="{{asset('page/upload/news-posts/listw2.jpg')}}" alt="">
                        <div class="post-content">
                            <h2><a href="single-post.html">Sed arcu. Cras consequat.</a></h2>
                            <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <img src="{{asset('page/upload/news-posts/listw5.jpg')}}" alt="">
                        <div class="post-content">
                            <h2><a href="single-post.html">Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</a></h2>
                            <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="widget tags-widget">

        <div class="title-section">
            <h1><span>Popular Tags</span></h1>
        </div>

        <ul class="tag-list">
            <li><a href="#">News</a></li>
            <li><a href="#">Fashion</a></li>
            <li><a href="#">Politics</a></li>
            <li><a href="#">Sport</a></li>
            <li><a href="#">Food</a></li>
            <li><a href="#">Videos</a></li>
            <li><a href="#">Business</a></li>
            <li><a href="#">Travel</a></li>
            <li><a href="#">World</a></li>
            <li><a href="#">Music</a></li>
        </ul>

    </div>

    <div class="advertisement">
        <div class="desktop-advert">
            <span>Advertisement</span>
            <img src="{{asset('page/upload/addsense/300x250.jpg')}}" alt="">
        </div>
        <div class="tablet-advert">
            <span>Advertisement</span>
            <img src="{{asset('page/upload/addsense/200x200.jpg')}}" alt="">
        </div>
        <div class="mobile-advert">
            <span>Advertisement</span>
            <img src="{{asset('page/upload/addsense/300x250.jpg')}}" alt="">
        </div>
    </div>

</div>
<!-- End sidebar -->