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
                        <h1><span class="world">{{$category->name}}</span></h1>
                    </div>

                    <div class="row">
                        @foreach($articles as $article)
                            <div class="col-md-4">
                                <div class="news-post standard-post2">
                                    <div class="post-gallery">
                                        <img style="min-height: 220px;" src="{{asset('page/images/thumbnail/'.$article->thumbnail)}}" alt="">
                                        <a class="category-post world" href="{{ url('category/'.$category->name) }}">{{$category->name}}</a>
                                    </div>
                                    <div style="min-height: 160px;" class="post-title">
                                        <h2 style="min-height: 40px;"><a href="{{ url('news/'.$article->alias) }}">{{ $article->title }}</a></h2>
                                        <p style="min-height: 80px;">{{$article->description}}</p>
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
                    {{$articles->links()}}
                </div>
                <!-- End Pagination box -->

            </div>
            <!-- End block content -->
        </div>
    </section>
    <!-- End block-wrapper-section -->
@stop
