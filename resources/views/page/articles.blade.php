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

                    <div class="row$articles">
                        @if(isset($articles))
                        @foreach($articles as $art)
                            <div class="col-md-4">
                                <div class="news-post standard-post2">
                                    <div style="height: 220px; width: 100%;" class="post-gallery">
                                        <a href="{{ url('news/'.$art->alias) }}"><img style="height: 100%;" src="{{asset('page/images/thumbnail/'.$art->thumbnail)}}" alt=""></a>
                                    </div>
                                    <div class="post-title">
                                        <h2 style="height: 40px; width: 100%;"><a href="{{ url('news/'.$art->alias) }}">{{ $art->title }}</a></h2>
                                        <p style="height: 60px;">{{$art->description}}</p>
                                        <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i>{{ $art->created_at->format('d-M-Y') }}</li>
                                            <li><i class="fa fa-user"></i>by <a href="#">{{ $art->User->username }}</a></li>
                                            <li><i class="fa fa-eye"></i>{{$art->view}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @endif
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
