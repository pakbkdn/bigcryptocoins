@extends('page.master')
@section('content')

    <!-- block-wrapper-section
        ================================================== -->
    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">

                    <!-- block content -->
                    <div class="block-content">

                        <!-- single-post box -->
                        <div class="single-post-box">

                            <div class="title-post">
                                <h1>{{$article->title}}</h1>
                                <ul class="post-tags">
                                    <li><i class="fa fa-clock-o"></i>{{ $article->created_at->format('d-M-Y')}}</li>
                                    <li><i class="fa fa-user"></i>by <a href="#">{{$article->User->username}}</a></li>
                                    <li><a href="#"><i class="fa fa-comments-o"></i><span>0</span></a></li>
                                    <li><i class="fa fa-eye"></i>872</li>
                                </ul>
                            </div>

                            <div class="share-post-box">
                                <ul class="share-box">
                                    <li><i class="fa fa-share-alt"></i><span>Share Post</span></li>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i><span></span></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i><span></span></a></li>
                                    <li><a class="google" href="#"><i class="fa fa-google-plus"></i><span></span></a></li>
                                </ul>
                            </div>

                            <div class="post-content" style="width: 100%;">

                                {!! $article->content !!}

                            </div>

                            <div class="post-tags-box">
                                <ul class="tags-box">
                                    <li><i class="fa fa-tags"></i><span>Tags:</span></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Politics</a></li>
                                    <li><a href="#">Sport</a></li>
                                </ul>
                            </div>

                            <div class="share-post-box">
                                <ul class="share-box">
                                    <li><i class="fa fa-share-alt"></i><span>Share Post</span></li>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>

                            <!-- comment -->
                            <div class="comment">
                                <div class="title-section">
                                    <h1><span>Leave a Comment</span></h1>
                                </div>
                                <div id="fb-root"></div>
                                <script>(function(d, s, id) {
                                      var js, fjs = d.getElementsByTagName(s)[0];
                                      if (d.getElementById(id)) return;
                                      js = d.createElement(s); js.id = id;
                                      js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=151405598816055';
                                      fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));
                                </script>
                                <div class="fb-comments" data-href="{{url('news/'.$article->alias)}}" data-width="100%" data-numposts="5"></div>
                            </div>
                            <!-- End comment -->

                            <div class="about-more-autor">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#about-autor" data-toggle="tab">About The Autor</a>
                                    </li>
                                    <li>
                                        <a href="#more-autor" data-toggle="tab">More From Autor</a>
                                    </li>
                                </ul>

                                <div class="tab-content">

                                    <div class="tab-pane active" id="about-autor">
                                        <div class="autor-box">
                                            <img src="{{asset('page/upload/users/avatar1.jpg')}}" alt="">
                                            <div class="autor-content">
                                                <div class="autor-title">
                                                    <h1><span>Jane Smith</span><a href="autor-details.html">18 Posts</a></h1>
                                                    <ul class="autor-social">
                                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
                                                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                                        <li><a href="#" class="dribble"><i class="fa fa-dribbble"></i></a></li>
                                                    </ul>
                                                </div>
                                                <p>
                                                    Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="more-autor">
                                        <div class="more-autor-posts">

                                            <div class="news-post image-post3">
                                                <img src="{{asset('page/upload/news-posts/gal1.jpg')}}" alt="">
                                                <div class="hover-box">
                                                    <h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros.</a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="news-post image-post3">
                                                <img src="{{asset('page/upload/news-posts/gal2.jpg')}}" alt="">
                                                <div class="hover-box">
                                                    <h2><a href="single-post.html">Nullam malesuada erat ut turpis. </a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="news-post image-post3">
                                                <img src="{{asset('page/upload/news-posts/gal3.jpg')}}" alt="">
                                                <div class="hover-box">
                                                    <h2><a href="single-post.html">Suspendisse urna nibh.</a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="news-post image-post3">
                                                <img src="{{asset('page/upload/news-posts/gal4.jpg')}}" alt="">
                                                <div class="hover-box">
                                                    <h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. Aliquam </a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- carousel box -->
                            <div class="carousel-box owl-wrapper">
                                <div class="title-section">
                                    <h1><span>Relative news</span></h1>
                                </div>
                                <div class="owl-carousel" data-num="3">
                                    @foreach($relatives as $re)
                                        <div class="item news-post image-post3">
                                            <img src="{{asset('page/images/thumbnail/'.$re->thumbnail)}}" alt="">
                                            <div class="hover-box">
                                                <h2><a href="{{url('news/'.$re->alias)}}">{{$re->title}}</a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>{{$re->created_at->format('d-M-Y')}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- End carousel box -->



                        </div>
                        <!-- End single-post box -->

                    </div>
                    <!-- End block content -->

                </div>

                <div class="col-sm-4">
                    @include('page.partials.sidebar')
                </div>

            </div>

        </div>
    </section>
    <!-- End block-wrapper-section -->

@stop
