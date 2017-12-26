@extends('page.master')
@section('meta-share')
<meta property="og:image" content="{{url('images/thumbnail/'.$article->thumbnail)}}" />
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
                                    <li><i class="fa fa-eye"></i>{{$article->view}}</li>
                                </ul>
                            </div>

                            <div class="share-post-box">
                                <ul class="share-box">
                                    <li><i class="fa fa-share-alt"></i><span>Share Post</span></li>
                                    <li style="vertical-align:middle;">
                                        <div id="fb-root"></div>
                                        <script>(function(d, s, id) {
                                          var js, fjs = d.getElementsByTagName(s)[0];
                                          if (d.getElementById(id)) return;
                                          js = d.createElement(s); js.id = id;
                                          js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=197093787521715';
                                          fjs.parentNode.insertBefore(js, fjs);
                                        }(document, 'script', 'facebook-jssdk'));</script>
                                        <div class="fb-share-button" data-href="{{url('news/'.$article->alias)}}" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Chia sẻ</a></div>
                                    </li>
                                    <li style="vertical-align:middle;">
                                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                    </li>
                                    <li style="vertical-align:middle;">
                                        <div class="g-plus" data-action="share" data-height="24" data-href="{{url('news/'.$article->alias)}}"></div>
                                        <script type="text/javascript">
                                          window.___gcfg = {lang: 'en-GB'};

                                          (function() {
                                            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                            po.src = 'https://apis.google.com/js/platform.js';
                                            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                                          })();
                                          </script>
                                    </li>
                                </ul>
                            </div>

                            <div class="post-content" style="width: 100%;">

                                {!! $article->content !!}

                            </div>
                            <div class="share-post-box">
                                <ul class="share-box">
                                    <li><i class="fa fa-share-alt"></i><span>Share Post</span></li>
                                    <li style="vertical-align:middle;">
                                        <div id="fb-root"></div>
                                        <script>(function(d, s, id) {
                                          var js, fjs = d.getElementsByTagName(s)[0];
                                          if (d.getElementById(id)) return;
                                          js = d.createElement(s); js.id = id;
                                          js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=197093787521715';
                                          fjs.parentNode.insertBefore(js, fjs);
                                        }(document, 'script', 'facebook-jssdk'));</script>
                                        <div class="fb-share-button" data-href="{{url('news/'.$article->alias)}}" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Chia sẻ</a></div>
                                    </li>
                                    <li style="vertical-align:middle;">
                                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                    </li>
                                    <li style="vertical-align:middle;">
                                        <div class="g-plus" data-action="share" data-height="24" data-href="{{url('news/'.$article->alias)}}"></div>
                                        <script type="text/javascript">
                                          window.___gcfg = {lang: 'en-GB'};

                                          (function() {
                                            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                            po.src = 'https://apis.google.com/js/platform.js';
                                            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                                          })();
                                          </script>
                                    </li>
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
                                      js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=197093787521715';
                                      fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));
                                </script>
                                <div class="fb-comments" data-href="{{url('news/'.$article->alias)}}" data-width="100%" data-numposts="5"></div>
                            </div>
                            <!-- End comment -->

                            <!-- <div class="about-more-autor">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#about-autor" data-toggle="tab">About The Author</a>
                                    </li>
                                    <li>
                                        <a href="#more-autor" data-toggle="tab">More From Author</a>
                                    </li>
                                </ul>

                                <div class="tab-content">

                                    <div class="tab-pane active" id="about-autor">
                                        <div class="autor-box">
                                            <div class="autor-content">
                                                <div class="autor-title">
                                                    <h1><span>{{$article->User->username}}</span>
                                                        {{$article->User->articles->count()}} Posts</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="more-autor">
                                        <div class="carousel-box owl-wrapper">
                                            <div class="owl-carousel" data-num="3">
                                                @foreach($article->User->articles as $news)
                                                <div style="height: 165px;" class="news-post image-post3">
                                                    <a href="{{url('news/'.$news->alias)}}"><img style="max-height: 100%;" src="{{asset('page/images/thumbnail/'.$news->thumbnail)}}" alt=""></a>
                                                    <div class="hover-box">
                                                        <h2><a href="{{url('news/'.$news->alias)}}">{{$news->title}}</a></h2>
                                                        <ul class="post-tags">
                                                            <li><i class="fa fa-clock-o"></i>{{$news->created_at->format('d-M-Y')}}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div> -->

                            <!-- carousel box -->
                            <div class="carousel-box owl-wrapper">
                                <div class="title-section">
                                    <h1><span>Related news</span></h1>
                                </div>
                                <div class="owl-carousel" data-num="3">
                                    @foreach($relatives as $re)
                                        <div class="item news-post image-post3">
                                            <img style="height: 170px;" src="{{asset('page/images/thumbnail/'.$re->thumbnail)}}" alt="">
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
