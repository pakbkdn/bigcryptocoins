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
                    @foreach( $article_hot as $hot )
                        <div class="news-post image-post nxpsl">
                            <img style="height: 100%;" src="{{asset('page/images/thumbnail/'.$hot->thumbnail)}}" alt="">
                            <div class="hover-box">
                                <div class="inner-hover">
                                    <a class="category-post world" href="{{ url('category/'.$hot->category->alias) }}">{{ $hot->category->name}}</a>
                                    <h2><a href="{{url('news/'.$hot->alias)}}">{{ $hot->title}}</a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>{{ $hot->created_at->format('d-M-Y') }}</li>
                                        <li><i class="fa fa-user"></i>by <a href="#">{{ $hot->User->username }}</a></li>
                                        <li><i class="fa fa-eye"></i>{{$hot->view}}</li>
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
                        <a class="category-post travel" href="{{ url('category/'.$article->category->alias) }}">{{ $article->category->name}}</a>
                        <h2><a href="{{ url('news/'.$article->alias) }}">{{$article->title}}</a></h2>
                        <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i><span>{{ $article->created_at->format('d-M-Y') }}</span></li>
                            <li><i class="fa fa-eye"></i>{{$article->view}}</li>
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
                                                        <li><i class="fa fa-eye"></i>{{$article->view}}</li>
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
                            @foreach($ads as $ad)
                            <a href="{{$ad->link}}" target="_blank"><img style="width: 728px; height: 90px" src="{{asset('page/images/image1/'.$ad->image1)}}" alt="" ></a>
                            @endforeach
                        </div>
                        <div class="tablet-advert">
                            <span>Advertisement</span>
                            @foreach($ads as $ad)
                            <a href="{{$ad->link}}" target="_blank"><img style="width: 728px; height: 90px" src="{{asset('page/images/image1/'.$ad->image1)}}" alt="" ></a>
                            @endforeach
                        </div>
                        <div class="mobile-advert">
                            <span>Advertisement</span>
                            @foreach($ads as $ad)
                            <a href="{{$ad->link}}" target="_blank"><img style="width: 368px; height: 300px" src="{{asset('page/images/image2/'.$ad->image2)}}" alt="" ></a> 
                            @endforeach
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
                                                <li><i class="fa fa-eye"></i>{{$all->view}}</li>
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
