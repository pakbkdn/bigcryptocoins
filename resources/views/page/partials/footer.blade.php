<!-- footer
    ================================================== -->
<footer>
    <div class="container">
        <div class="footer-widgets-part">
            <div class="row">
                <div class="col-md-4">
                    <div class="widget text-widget">
                        <h1>About</h1>
                        <p>Big Cryptocoins is the site where you find the lastest news of bitcoin, ethereum and altcoins. We also provide analysis of all coins' trends and price movements as well as new technologies and companies. Aspiring traders and new comers, join us and let us help you to become the professional traders you can be!</p>
                    </div>
                    <div class="widget social-widget">
                        <h1>Stay Connected</h1>
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/bigcryptocoins/" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="https://twitter.com/bigcryptocoins" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget posts-widget">
                        <h1>Random Post</h1>
                        <ul class="list-posts">
                            @if(isset($article_random))
                                @foreach($article_random as $random)
                                <li>
                                    <a href="url('news/'.$random->alias)"><img src="{{asset('page/images/thumbnail/'.$random->thumbnail)}}" alt=""></a>
                                    <div class="post-content">
                                        <a href="{{ url('category/'.$random->category->alias) }}">{{$random->category->name}}</a>
                                        <h2><a href="{{url('news/'.$random->alias)}}">{{$random->title}}</a></h2>
                                        <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i>{{$random->created_at->format('d-m-y')}}</li>
                                        </ul>
                                    </div>
                                </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget categories-widget">
                        <h1>Hot Categories</h1>
                        <ul class="category-list">
                            @foreach($categories as $cate)
                            <li>
                                <a href="{{url('category/'.$cate->alias) }}">{{$cate->name}} <span>{{$cate->articles->count()}}</span></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="footer-last-line">
            <div class="row">
                <div class="col-md-offset-4 col-md-4" style="text-align: center;">
                    <p>&copy; COPYRIGHT 2017 bigcryptocoins.com</p>
                </div>                
            </div>
        </div>
    </div>
</footer>
<!-- End footer -->
