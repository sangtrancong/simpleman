@extends('layout.index')
@section('title')
{{$port->title}}
@endsection
@section('meta')
  <meta property="og:title" content="{{ $port->title }}" />
  <meta property="og:url" content="{{config('hostserver.domain') . 'port/' . $port->slug}}"/>
  <meta property="og:image" content="{{ config('hostserver.domain') . 'storage/' . $port->image }}" />
  <meta property="og:type" content="website" />
  <meta property="og:image:url" content="{{ config('hostserver.domain') . 'storage/' . $port->image }}" />
  <meta property="og:image:secure_url" content="{{ config('hostserver.domain') . 'storage/' . $port->image }}" />
  <meta property="og:description" content="{{ $port->short_content }}" />
   <!-- Google+ / Schema.org -->
<meta itemprop="name" content="{{ $port->title }}"/>
<meta itemprop="headline" content="{{ $port->title }}"/>
<meta itemprop="description" content="{{ $port->short_content }}"/>
<meta itemprop="image" content="{{ config('hostserver.domain') . 'storage/' . $port->image }}"/>
<meta itemprop="datePublished" content="{{Carbon\Carbon::parse($port->created_at)->format('Y-m-d')}}"/>
<meta itemprop="dateModified" content="{{$port->updated_at}}" />
<meta itemprop="author" content="phunguyen"/>
<!--<meta itemprop="publisher" content="Animals Nature Press"/>--> <!-- To solve: The attribute publisher.itemtype has an invalid value -->
  <meta name="twitter:card" content="summary" />
  <meta property="twitter:title" content="{{ $port->title }}" />
  <meta property="twitter:image" content="{{ config('hostserver.domain') . 'storage/' . $port->image }}" />
  <meta property="twitter:image:url" content="{{ config('hostserver.domain') . 'storage/' . $port->image }}" />
  <meta property="twitter:description" content="{{ $port->short_content }}" />
  <link rel="canonical" href="{{config('hostserver.domain') . 'port/' . $port->slug}}" />
@endsection
@section('content')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0" nonce="z7Ot7cfL"></script>
    <div class="child-content">
        <div class="container">
            <div class="row">

                <div class="col-sm-8">
                    <h3>{{$port->title}}</h3>
                    <i>
                        @php
                            $diff = Carbon\Carbon::now()->diffInMinutes($port->updated_at);
                            if ($diff < 60) {
                                echo '<i class="fa fa-clock-o" aria-hidden="true"></i>  '. $diff . ' minute ago';
                            } elseif ($diff > 60 && $diff < 60 * 24) {
                                $diff = Carbon\Carbon::now()->diffInHours($port->updated_at);
                                echo '<i class="fa fa-clock-o" aria-hidden="true"></i>  '. $diff . ' hours ago';
                            } else {
                                $date = Carbon\Carbon::parse($port->updated_at)->format('F d, Y');
                                echo '<i class="fa fa-clock-o" aria-hidden="true"></i>  ' . $date;
                            }
                        @endphp
                    </i> &nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa fa-eye" aria-hidden="true"></i> {{1003+99*$count}}

                    <hr>
                    @if ($port->video_url!=null)
                    <iframe width="100%" height="400px" allowfullscreen
                    src="https://www.youtube.com/embed/{{$port->video_url}}">
                    </iframe>
                    @endif
                    <h5>{{$port->short_content}}</h5>
                    <div class="row align-items-start">
                        <div class="col">
                            <iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=ntp011095-20&language=en_US&marketplace=amazon&region=US&placement=B0B59WSTPZ&asins=B0B59WSTPZ&linkId=9116ef1e3598cf786edefbc677d4a719&show_border=true&link_opens_in_new_window=true"></iframe>
                        </div>
                        <div class="col">
                            <iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=ntp011095-20&language=en_US&marketplace=amazon&region=US&placement=B0B59WSTPZ&asins=B0B59WSTPZ&linkId=9116ef1e3598cf786edefbc677d4a719&show_border=true&link_opens_in_new_window=true"></iframe>
                        </div>
                        <div class="col">
                            <iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=ntp011095-20&language=en_US&marketplace=amazon&region=US&placement=B0B59WSTPZ&asins=B0B59WSTPZ&linkId=9116ef1e3598cf786edefbc677d4a719&show_border=true&link_opens_in_new_window=true"></iframe>
                        </div>
                        <div class="col">
                            <iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=ntp011095-20&language=en_US&marketplace=amazon&region=US&placement=B0B59WSTPZ&asins=B0B59WSTPZ&linkId=9116ef1e3598cf786edefbc677d4a719&show_border=true&link_opens_in_new_window=true"></iframe>
                        </div>


                    </div>


                    <div class="portContentDetailPage">
                        {!! $port->content !!}
                    </div>
                    <div class="text-right">
                        <a id="btnCoppy" style="margin-top: -8px; line-height: 1.3 !important;color: white" target="blank"
                            href="https://twitter.com/intent/tweet?url={{ config('hostserver.domain') . 'port/' . $port->slug }}"
                            class="btn btn-sm btn-primary" title="Coppy link"><i class="fa fa-twitter"></i>&nbsp;<b>
                                Share</b> </a>
                        <div class="fb-share-button" data-href="{{Request::url()}}" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fsss%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                        <button id="btnCoppy" style="margin-top: -7px" class="btn btn-sm btn-primary" title="Coppy link" onclick="copyText()"><i class="fa fa-copy"></i></button>
                    </div>

                </div>
                <div class="col-sm-4">
                    @foreach ($portOther as $p)
                    <div class="item-article">
                        <span class="image-item">
                            <a href="/port/{{$p->slug}}" > <img height="75px" width="100px"
                                src="/storage/{{$p->image}}" /></a>
                        </span>
                        <span> <a href="/port/{{$p->slug}}" >{{$p->title}}</a></span>
                    </div>
                    <hr />
                    @endforeach

                </div>

            </div>
        </div>

    </div>


@endsection
@section('script')
<script>
    function copyText() {
        var myServerData = <?=json_encode(Request::url())?>;
        /* Copy text into clipboard */
        navigator.clipboard.writeText(myServerData);
    }
</script>
@endsection
