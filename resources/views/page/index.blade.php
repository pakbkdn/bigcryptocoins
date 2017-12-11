@extends('page.master')
@section('content')
<!-- heading-news-section
    ================================================== -->
<section class="heading-news">

    <div class="iso-call heading-news-box">

        <div class="image-slider snd-size">
            <span class="top-stories">HOT ARTICLES</span>
            <ul class="bxslider">
                @foreach( $article_hot as $article_hot )
                    <li>
                    <div class="news-post image-post nxpsl">
                        <img src="page/images/thumbnail/{{ $article_hot->thumbnail }}" alt="">
                        <div class="hover-box">
                            <div class="inner-hover">
                                <a class="category-post world" href="world.html">{{ $article_hot->category->name}}</a>
                                <h2><a href="single-post.html">{{ $article_hot->title}}</a></h2>
                                <ul class="post-tags">
                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                    <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                    <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                    <li><i class="fa fa-eye"></i>872</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>

        @foreach($articles as $article)
            <div class="news-post image-post default-size nxp">
            <img src="page/images/thumbnail/{{ $article->thumbnail }}" alt="">
            <div class="hover-box">
                <div class="inner-hover">
                    <a class="category-post travel" href="travel.html">{{ $article->category->name}}</a>
                    <h2><a href="single-post.html">{{$article->title}}</a></h2>
                    <ul class="post-tags">
                        <li><i class="fa fa-clock-o"></i><span>27 may 2013</span></li>
                        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                    </ul>
                    <p>{{ $article-> description}}</p>
                </div>
            </div>
        </div>
        @endforeach

        <div class="news-post image-post default-size nxp">
            <img src="{{asset('page/upload/news-posts/h1.jpg')}}" alt="">
            <div class="hover-box">
                <div class="inner-hover">
                    <a class="category-post travel" href="travel.html">Travel</a>
                    <h2><a href="single-post.html">Lorem ipsum dolor sit amet, consectetuer</a></h2>
                    <ul class="post-tags">
                        <li><i class="fa fa-clock-o"></i><span>27 may 2013</span></li>
                        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                    </ul>
                    <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p>
                </div>
            </div>
        </div>

        <div class="news-post image-post default-size nxp">
            <img src="{{asset('page/upload/news-posts/h1.jpg')}}" alt="">
            <div class="hover-box">
                <div class="inner-hover">
                    <a class="category-post travel" href="travel.html">Travel</a>
                    <h2><a href="single-post.html">Lorem ipsum dolor sit amet, consectetuer</a></h2>
                    <ul class="post-tags">
                        <li><i class="fa fa-clock-o"></i><span>27 may 2013</span></li>
                        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                    </ul>
                    <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p>
                </div>
            </div>
        </div>


    </div>

</section>
<!-- End heading-news-section -->



<!-- features-today-section
    ================================================== -->
<section class="features-today">
    <div class="container">

        <div class="title-section">
            <h1><span>Today's Featured</span></h1>
        </div>

        <div class="features-today-box owl-wrapper nxp_top10">
            <div class="owl-carousel" data-num="4">
                @foreach( $article_top10 as $article_top10 )
                    <div class="item news-post standard-post">
                    <div class="post-gallery">
                        <img src="page/images/thumbnail/{{ $article_top10->thumbnail }}" alt="">
                        <a class="category-post world" href="world.html">{{$article_top10->category->name}}</a>
                    </div>
                    <div class="post-content">
                        <h2><a href="single-post.html">{{ $article_top10->title}}</a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                            <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                            <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                        </ul>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </div>
</section>
<!-- End features-today-section -->

<!-- block-wrapper-section
    ================================================== -->
<section class="block-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">

                <!-- block content -->
                <div class="block-content">



                    <!-- carousel box -->
                    <div class="carousel-box owl-wrapper">
                        <div class="title-section">
                            <h1><span>Gallery</span></h1>
                        </div>
                        <div class="owl-carousel" data-num="3">

                            <div class="item news-post image-post3">
                                <img src="{{asset('page/upload/news-posts/gal1.jpg')}}" alt="">
                                <div class="hover-box">
                                    <h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros.</a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="item news-post image-post3">
                                <img src="{{asset('page/upload/news-posts/gal2.jpg')}}" alt="">
                                <div class="hover-box">
                                    <h2><a href="single-post.html">Nullam malesuada erat ut turpis. </a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="item news-post image-post3">
                                <img src="{{asset('page/upload/news-posts/gal3.jpg')}}" alt="">
                                <div class="hover-box">
                                    <h2><a href="single-post.html">Suspendisse urna nibh.</a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="item news-post image-post3">
                                <img src="{{asset('page/upload/news-posts/gal4.jpg')}}" alt="">
                                <div class="hover-box">
                                    <h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. Aliquam </a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="item news-post image-post3">
                                <img src="{{asset('page/upload/news-posts/gal1.jpg')}}" alt="">
                                <div class="hover-box">
                                    <h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros.</a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End carousel box -->
                    <!-- carousel box -->
                    <div class="carousel-box owl-wrapper">
                        <div class="title-section">
                            <h1><span>Gallery</span></h1>
                        </div>
                        <div class="owl-carousel" data-num="3">

                            <div class="item news-post image-post3">
                                <img src="{{asset('page/upload/news-posts/gal1.jpg')}}" alt="">
                                <div class="hover-box">
                                    <h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros.</a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="item news-post image-post3">
                                <img src="{{asset('page/upload/news-posts/gal2.jpg')}}" alt="">
                                <div class="hover-box">
                                    <h2><a href="single-post.html">Nullam malesuada erat ut turpis. </a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="item news-post image-post3">
                                <img src="{{asset('page/upload/news-posts/gal3.jpg')}}" alt="">
                                <div class="hover-box">
                                    <h2><a href="single-post.html">Suspendisse urna nibh.</a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="item news-post image-post3">
                                <img src="{{asset('page/upload/news-posts/gal4.jpg')}}" alt="">
                                <div class="hover-box">
                                    <h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. Aliquam </a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="item news-post image-post3">
                                <img src="{{asset('page/upload/news-posts/gal1.jpg')}}" alt="">
                                <div class="hover-box">
                                    <h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros.</a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End carousel box -->
                    <!-- carousel box -->
                    <div class="carousel-box owl-wrapper">
                        <div class="title-section">
                            <h1><span>Gallery</span></h1>
                        </div>
                        <div class="owl-carousel" data-num="3">

                            <div class="item news-post image-post3">
                                <img src="{{asset('page/upload/news-posts/gal1.jpg')}}" alt="">
                                <div class="hover-box">
                                    <h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros.</a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="item news-post image-post3">
                                <img src="{{asset('page/upload/news-posts/gal2.jpg')}}" alt="">
                                <div class="hover-box">
                                    <h2><a href="single-post.html">Nullam malesuada erat ut turpis. </a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="item news-post image-post3">
                                <img src="{{asset('page/upload/news-posts/gal3.jpg')}}" alt="">
                                <div class="hover-box">
                                    <h2><a href="single-post.html">Suspendisse urna nibh.</a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="item news-post image-post3">
                                <img src="{{asset('page/upload/news-posts/gal4.jpg')}}" alt="">
                                <div class="hover-box">
                                    <h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. Aliquam </a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="item news-post image-post3">
                                <img src="{{asset('page/upload/news-posts/gal1.jpg')}}" alt="">
                                <div class="hover-box">
                                    <h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros.</a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End carousel box -->


                    <!-- google addsense -->
                    <div class="advertisement">
                        <div class="desktop-advert">
                            <span>Advertisement</span>
                            <img src="{{asset('page/upload/addsense/728x90-white.jpg')}}" alt="">
                        </div>
                        <div class="tablet-advert">
                            <span>Advertisement</span>
                            <img src="{{asset('page/upload/addsense/468x60-white.jpg')}}" alt="">
                        </div>
                        <div class="mobile-advert">
                            <span>Advertisement</span>
                            <img src="{{asset('page/upload/addsense/300x250.jpg')}}" alt="">
                        </div>
                    </div>
                    <!-- End google addsense -->

                </div>
                <!-- End block content -->

                <!-- block content -->
                <div class="block-content">

                    <!-- masonry box -->
                    <div class="masonry-box">

                        <div class="title-section">
                            <h1><span>Latest Articles</span></h1>
                        </div>

                        <div class="latest-articles iso-call">

                            <div class="news-post standard-post2 default-size">
                                <div class="post-gallery">
                                    <img src="{{asset('page/upload/news-posts/2.jpg')}}" alt="">
                                </div>
                                <div class="post-title">
                                    <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                        <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="news-post standard-post2">
                                <div class="post-gallery">
                                    <img src="{{asset('page/upload/news-posts/2.jpg')}}" alt="">
                                </div>
                                <div class="post-title">
                                    <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                        <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="news-post standard-post2">
                                <div class="post-gallery">
                                    <img src="{{asset('page/upload/news-posts/2.jpg')}}" alt="">
                                </div>
                                <div class="post-title">
                                    <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                        <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="news-post standard-post2">
                                <div class="post-gallery">
                                    <img src="{{asset('page/upload/news-posts/2.jpg')}}" alt="">
                                </div>
                                <div class="post-title">
                                    <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                        <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="news-post standard-post2">
                                <div class="post-gallery">
                                    <img src="{{asset('page/upload/news-posts/2.jpg')}}" alt="">
                                </div>
                                <div class="post-title">
                                    <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                        <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="news-post standard-post2">
                                <div class="post-gallery">
                                    <img src="{{asset('page/upload/news-posts/2.jpg')}}" alt="">
                                </div>
                                <div class="post-title">
                                    <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                        <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- End masonry box -->

                    <!-- pagination box -->
                    <div class="pagination-box">
                        <ul class="pagination-list">
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><span>...</span></li>
                            <li><a href="#">9</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                        <p>Page 1 of 9</p>
                    </div>
                    <!-- End pagination box -->

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
