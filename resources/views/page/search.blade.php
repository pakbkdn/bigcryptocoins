@extends('page.master')
@section('content')
    <!-- block-wrapper-section
        ================================================== -->
    <section class="block-wrapper">
        <div class="container">

            <!-- block content -->
            <div class="block-content non-sidebar">

                <!-- grid box -->
                <div class="grid-box">
                    <div class="title-section">
                        <h1><span class="world">result search</span></h1>
                        <p>Result search for <span style="text-transform: uppercase;"><b>{{$key}}</b></span></p>
                        <p>total result: {{count($articles_sort)}}</p>
                    </div>

                    <div class="row">
                        @foreach($result_search as $article)
                            <div class="col-md-4">
                                <div class="news-post standard-post2">
                                    <div style="height: 220px; width: 100%;" class="post-gallery">
                                        <a href="{{ url('news/'.$article->alias) }}"><img style="height: 100%;" src="{{asset('page/images/thumbnail/'.$article->thumbnail)}}" alt=""></a>
                                        <a class="category-post travel" href="{{ url('category/'.$article->category->name) }}">{{ $article->category->name}}</a>
                                    </div>
                                    <div class="post-title">
                                        <h2 style="height: 40px; width: 100%;"><a href="{{ url('news/'.$article->alias) }}">{{ $article->title }}</a></h2>
                                        <p style="height: 60px;">{{$article->description}}</p>
                                        <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i>{{ $article->created_at->format('d-M-Y') }}</li>
                                            <li><i class="fa fa-user"></i>by <a href="#">{{ $article->User->username }}</a></li>
                                            <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                            <li><i class="fa fa-eye"></i>872</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
                <!-- End grid box -->

                <!-- pagination box -->
                <div class="pagination-box" style="text-align: center;">
                    {{$result_search->links()}}
                </div>
                <!-- End Pagination box -->

            </div>
            <!-- End block content -->
        </div>
    </section>
    <!-- End block-wrapper-section -->
@stop
