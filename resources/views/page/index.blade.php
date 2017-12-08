@extends('page.master')
@section('content')
<!-- heading-news-section
    ================================================== -->
<section class="heading-news">

    <div class="iso-call heading-news-box">

        <div class="news-post image-post default-size">
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

        <div class="image-slider snd-size">
            <span class="top-stories">TOP STORIES</span>
            <ul class="bxslider">
                <li>
                    <div class="news-post image-post">
                        <img src="{{asset('page/upload/news-posts/h2.jpg')}}" alt="">
                        <div class="hover-box">
                            <div class="inner-hover">
                                <a class="category-post world" href="world.html">Business</a>
                                <h2><a href="single-post.html">Franca do të bashkëpunojë me Kosovën në ekonomi. </a></h2>
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
                <li>
                    <div class="news-post image-post">
                        <img src="{{asset('page/upload/news-posts/h7.jpg')}}" alt="">
                        <div class="hover-box">
                            <div class="inner-hover">
                                <a class="category-post sport" href="sport.html">Sport</a>
                                <h2><a href="single-post.html">Phasellus ultrices nulla quis nibh. Quisque a lectus. </a></h2>
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
                <li>
                    <div class="news-post image-post">
                        <img src="{{asset('page/upload/news-posts/h4.jpg')}}" alt="">
                        <div class="hover-box">
                            <div class="inner-hover">
                                <a class="category-post sport" href="sport.html">sport</a>
                                <h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros. </a></h2>
                                <ul class="post-tags">
                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                    <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                    <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                    <li><i class="fa fa-eye"></i>872</li>
                                </ul>
                                <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="news-post image-post">
            <img src="{{asset('page/upload/news-posts/h3.jpg')}}" alt="">
            <div class="hover-box">
                <div class="inner-hover">
                    <a class="category-post food" href="food.html">food &amp; Health</a>
                    <h2><a href="single-post.html">Nullam malesuada erat ut turpis.</a></h2>
                    <ul class="post-tags">
                        <li><i class="fa fa-clock-o"></i><span>27 may 2013</span></li>
                        <li><a href="#"><i class="fa fa-comments-o"></i><span>20</span></a></li>
                    </ul>
                    <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p>
                </div>
            </div>
        </div>

        <div class="news-post image-post">
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

        <div class="news-post image-post">
            <img src="{{asset('page/upload/news-posts/h5.jpg')}}" alt="">
            <div class="hover-box">
                <div class="inner-hover">
                    <a class="category-post sport" href="sport.html">sport</a>
                    <h2><a href="single-post.html">Donec odio. </a></h2>
                    <ul class="post-tags">
                        <li><i class="fa fa-clock-o"></i><span>27 may 2013</span></li>
                        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                    </ul>
                    <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p>
                </div>
            </div>
        </div>

        <div class="news-post image-post">
            <img src="{{asset('page/upload/news-posts/h6.jpg')}}" alt="">
            <div class="hover-box">
                <div class="inner-hover">
                    <a class="category-post fashion" href="fashion.html">fashion</a>
                    <h2><a href="single-post.html">Quisque volutpat mattis </a></h2>
                    <ul class="post-tags">
                        <li><i class="fa fa-clock-o"></i><span>27 may 2013</span></li>
                        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                    </ul>
                    <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p>
                </div>
            </div>
        </div>

        <div class="news-post image-post">
            <img src="{{asset('page/upload/news-posts/h5.jpg')}}" alt="">
            <div class="hover-box">
                <div class="inner-hover">
                    <a class="category-post sport" href="sport.html">sport</a>
                    <h2><a href="single-post.html">Donec odio. </a></h2>
                    <ul class="post-tags">
                        <li><i class="fa fa-clock-o"></i><span>27 may 2013</span></li>
                        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                    </ul>
                    <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p>
                </div>
            </div>
        </div>

        <div class="news-post image-post">
            <img src="{{asset('page/upload/news-posts/h6.jpg')}}" alt="">
            <div class="hover-box">
                <div class="inner-hover">
                    <a class="category-post fashion" href="fashion.html">fashion</a>
                    <h2><a href="single-post.html">Quisque volutpat mattis </a></h2>
                    <ul class="post-tags">
                        <li><i class="fa fa-clock-o"></i><span>27 may 2013</span></li>
                        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                    </ul>
                    <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p>
                </div>
            </div>
        </div>

        <div class="news-post image-post">
            <img src="{{asset('page/upload/news-posts/h3.jpg')}}" alt="">
            <div class="hover-box">
                <div class="inner-hover">
                    <a class="category-post food" href="food.html">food &amp; Health</a>
                    <h2><a href="single-post.html">Nullam malesuada erat ut turpis.</a></h2>
                    <ul class="post-tags">
                        <li><i class="fa fa-clock-o"></i><span>27 may 2013</span></li>
                        <li><a href="#"><i class="fa fa-comments-o"></i><span>20</span></a></li>
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

        <div class="features-today-box owl-wrapper">
            <div class="owl-carousel" data-num="4">

                <div class="item news-post standard-post">
                    <div class="post-gallery">
                        <img src="{{asset('page/upload/news-posts/st1.jpg')}}" alt="">
                        <a class="category-post world" href="world.html">Music</a>
                    </div>
                    <div class="post-content">
                        <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                            <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                            <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="item news-post standard-post">
                    <div class="post-gallery">
                        <img src="{{asset('page/upload/news-posts/st2.jpg')}}" alt="">
                        <a class="category-post sport" href="sport.html">Sport</a>
                    </div>
                    <div class="post-content">
                        <h2><a href="single-post.html">Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                            <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                            <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="item news-post standard-post">
                    <div class="post-gallery">
                        <img src="{{asset('page/upload/news-posts/st3.jpg')}}" alt="">
                        <a class="category-post food" href="food.html">Food &amp; Health</a>
                    </div>
                    <div class="post-content">
                        <h2><a href="single-post.html">Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                            <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                            <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="item news-post standard-post">
                    <div class="post-gallery">
                        <img src="{{asset('page/upload/news-posts/st4.jpg')}}" alt="">
                        <a class="category-post sport" href="sport.html">Sport</a>
                    </div>
                    <div class="post-content">
                        <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. </a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                            <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                            <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="item news-post standard-post">
                    <div class="post-gallery">
                        <img src="{{asset('page/upload/news-posts/st1.jpg')}}" alt="">
                        <a class="category-post travel" href="travel.html">Travel</a>
                    </div>
                    <div class="post-content">
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
