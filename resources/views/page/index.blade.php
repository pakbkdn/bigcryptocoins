@extends('page.master')
@section('content')
<!-- heading-news-section
    ================================================== -->
<section class="heading-news">

    <div class="iso-call heading-news-box">

        <div class="image-slider snd-size">
            <span class="top-stories">HOT ARTICLES</span>
            <ul class="bxslider">
                @if(isset($article_hot))
                    @foreach( $article_hot as $article_hot )
                        <div class="news-post image-post nxpsl">
                            <img src="{{asset('page/images/thumbnail/'.$article_hot->thumbnail)}}" alt="">
                            <div class="hover-box">
                                <div class="inner-hover">
                                    <a class="category-post world" href="{{ url('category/'.$article_hot->category->name) }}">{{ $article_hot->category->name}}</a>
                                    <h2><a href="{{url('news/'.$article_hot->alias)}}">{{ $article_hot->title}}</a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>{{ $article_hot->created_at->format('d-M-Y') }}</li>
                                        <li><i class="fa fa-user"></i>by <a href="#">{{ $article_hot->User->username }}</a></li>
                                        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                        <li><i class="fa fa-eye"></i>872</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
             @endif
            </ul>
        </div>
        @if(isset($articles))
            @foreach($article_couser as $article)
                <div class="news-post image-post default-size nxp">
                <img src="{{asset('page/images/thumbnail/'.$article->thumbnail)}}" alt="">
                <div class="hover-box">
                    <div class="inner-hover">
                        <a class="category-post travel" href="{{ url('category/'.$article->category->name) }}">{{ $article->category->name}}</a>
                        <h2><a href="{{ url('news/'.$article->alias) }}">{{$article->title}}</a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i><span>{{ $article->created_at->format('d-M-Y') }}</span></li>
                            <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                        </ul>
                        <p>{{ $article-> description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        @endif

    </div>

</section>
<!-- End heading-news-section -->

<!-- block-wrapper-section
    ================================================== -->
<section class="block-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">

                <!-- block content -->
                <div class="block-content">

                    <!-- carousel box -->
                    @if(isset($categories))
                        @foreach($categories as $category)
                            <div class="carousel-box owl-wrapper">
                            <div class="title-section">
                                <h1><span>{{ $category->name }}</span></h1>
                            </div>
                            <div class="owl-carousel" data-num="3">
                                @if(isset($category->articles))
                                    @if(count($category->articles)<=10)
                                        @foreach($category->articles->sortbyDesc('id') as $article)
                                            <div class="item news-post image-post3 nxp_is_category">
                                                <img src="page/images/thumbnail/{{ $article->thumbnail }}" alt="">
                                                <div class="hover-box">
                                                    <h2><a href="{{ url('news/'.$article->alias) }}">{{ $article->title}}</a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>{{ $article->created_at->format('d-M-Y') }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                    @foreach($category->articles->sortbyDesc('id')->take(10) as $article)
                                        <div class="item news-post image-post3 nxp_is_category">
                                            <img src="page/images/thumbnail/{{ $article->thumbnail }}" alt="">
                                            <div class="hover-box">
                                                <h2><a href="{{ url('news/'.$article->alias) }}">{{ $article->title}}</a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>{{ $article->created_at->format('d-M-Y') }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                    @endif
                                @endif
                            </div>
                        </div>
                        @endforeach
                    @endif
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
                            @if( isset( $article_all ))
                                @foreach( $article_all as $all )
                                    <div class="news-post standard-post2 default-size all_article_nxp">
                                        <div class="post-gallery">
                                            <img src="{{asset('page/images/thumbnail/'.$all->thumbnail)}}" alt="">
                                        </div>
                                        <div class="post-title">
                                            <h2><a href=" {{url('news/'.$all->alias)}} ">{{$all->title}}</a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>{{$all->created_at->format('d-M-Y')}}</li>
                                                <li><i class="fa fa-user"></i>by <a href="#">{{ $all->User->username }}</a></li>
                                                <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="pagination-box" style="text-align: center;">
                            {{$article_all->links()}}
                        </div>

                    </div>
                    <!-- End masonry box -->
                    <div class="">

                    </div>

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
