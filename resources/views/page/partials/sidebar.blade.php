<!-- sidebar -->
<div class="sidebar">
    <div class="widget features-slide-widget">
        <div class="">
            <script type="text/javascript">
                baseUrl = "https://widgets.cryptocompare.com/";
                var scripts = document.getElementsByTagName("script");
                var embedder = scripts[ scripts.length - 1 ];
                (function (){
                var appName = encodeURIComponent(window.location.hostname);
                if(appName==""){appName="local";}
                var s = document.createElement("script");
                s.type = "text/javascript";
                s.async = true;
                var theUrl = baseUrl+'serve/v1/coin/multi?fsyms=BTC,ETH,USDT,XRP,LTC&tsyms=USD,EUR,BTC';
                s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                embedder.parentNode.appendChild(s);
                })();
            </script>
        </div>
        <div class="title-section">
            <h1><span>Advertisement</span></h1>
        </div>
        <div class="image-post-slider">
            <ul class="bxslider">
                <li>
                    <div class="news-post image-post2">
                        <div class="post-gallery">
                            @foreach($ads as $ad)
                            <a href="{{$ad->link}}"  target="_blank"><img style="width: 368px; height: 300px" src="{{asset('page/images/image2/'.$ad->image2)}}" alt=""></a>
                            @endforeach
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="fb-page" data-href="https://www.facebook.com/bigcryptocoins/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
        <blockquote cite="https://www.facebook.com/bigcryptocoins/" class="fb-xfbml-parse-ignore">
            <a href="https://www.facebook.com/bigcryptocoins/">Bigcryptocoins</a>
        </blockquote>
    </div>
    <script type="text/javascript">
        baseUrl = "https://widgets.cryptocompare.com/";
        var scripts = document.getElementsByTagName("script");
        var embedder = scripts[ scripts.length - 1 ];
        (function (){
        var appName = encodeURIComponent(window.location.hostname);
        if(appName==""){appName="local";}
        var s = document.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        var theUrl = baseUrl+'serve/v1/coin/chart?fsym=BTC&tsym=USD';
        s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
        embedder.parentNode.appendChild(s);
        })();
    </script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11&appId=222636254944151';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <div class="widget tab-posts-widget">

        <ul class="nav nav-tabs" id="myTab">
            <li class="active">
                <a href="#option1">Most View</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="option1">
                <ul class="list-posts">
                    @foreach($mostview as $most)
                    <li>
                        <img src="{{asset('page/images/thumbnail/'.$most->thumbnail)}}" alt="">
                        <div class="post-content">
                            <h2><a href="{{url('news/'.$most->alias)}}">{{$most->title}}</a></h2>
                            <ul class="post-tags">
                                <li><i class="fa fa-clock-o"></i>{{$most->created_at->format('d-M-Y')}}</li>
                                <li><i class="fa fa-eye"></i>{{$most->view}}</li>
                            </ul>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

</div>
<!-- End sidebar -->
