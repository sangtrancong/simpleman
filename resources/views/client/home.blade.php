@extends('layout.index')
@section('title', 'Home')
@section('content')



    {{-- <div style="background-color: rgb(227, 224, 224); padding-bottom: 35px">
        <div class="child-content">
            <h3 style="text-align: center;color: #600c8b !important">DANH MỤC SẢN PHẨM</h3>
            <div class="container">
                <div class="row category-list">
                    @isset($category[0])
                        <div onclick="window.location.href='/product?category={{$category[0]->id}}'" class="col-6 col-lg-4">
                            <div class=" category-item category-item-blue1">
                                <h5>{{$category[0]->name}}</h5>
                            </div>
                        </div>

                    @endisset
                    @isset($category[1])
                    <div onclick="window.location.href='/product?category={{$category[1]->id}}'" class="col-6 col-lg-4">
                        <div class="category-item category-item-red1">
                            <h5>{{$category[1]->name}}</h5>
                        </div>
                    </div>
                    @endisset
                    @isset($category[2])
                    <div onclick="window.location.href='/product?category={{$category[2]->id}}'" class="col-6 col-lg-4">
                        <div class="category-item category-item-green1">
                            <h5>{{$category[2]->name}}</h5>

                        </div>
                    </div>
                    @endisset
                    @isset($category[3])
                    <div onclick="window.location.href='/product?category={{$category[3]->id}}'" class="col-6 col-lg-4">

                        <div class="category-item category-item-blue2">
                            <h5>{{$category[3]->name}} </h5>
                        </div>
                    </div>

                    @endisset
                    @isset($category[4])
                    <div onclick="window.location.href='/product?category={{$category[4]->id}}'" class="col-6 col-lg-4">
                        <div class="category-item category-item-red2">
                            <h5>{{$category[4]->name}}</h5>
                        </div>
                    </div>
                    @endisset
                    @isset($category[5])
                    <div onclick="window.location.href='/product?category={{$category[5]->id}}'" class="col-6 col-lg-4">
                        <div class="category-item category-item-green2">
                            <h5>{{$category[5]->name}}</h5>
                        </div>
                    </div>
                    @endisset


                </div>
            </div>
        </div>
    </div>
    <div id="mobileProductHomepage" style="background-color: rgb(215, 215, 236)">
        <h3 style="text-align: center;color: #600c8b !important">SẢN PHẨM</h3>
        <div class="mobile-product" draggable="true" ontouchstart="handleDragStart(event)" ontouchmove="handleDragEnter(event)" ontouchend="handleDragEnd(event)" id="mobile-product">

            <div class="product-item-mobile product-item1" id="product-item1">
                <div  class="image-product-mobile">
                    @isset($product1[0])
                        <a href="{{ $product1[0]->url }}" target="blank">
                            <img  height="200px" width="100%" src="/storage/{{ $product1[0]->image }}"
                                alt="">
                        </a>
                    @endisset
                </div>
                <div class="content-product-mobile">
                    @isset($product1[0])
                        <a href="{{ $product1[0]->url }}" target="blank">
                            {{ Str::limit($product1[0]->name, 60, '...') }}
                        </a>
                    @endisset
                </div>
            </div>
            <div class="product-item-mobile product-item2">
                <div  class="image-product-mobile">
                    @isset($product1[1])
                        <a href="{{ $product1[1]->url }}" target="blank">
                            <img  height="200px" width="100%" src="/storage/{{ $product1[1]->image }}"
                                alt="">
                        </a>
                    @endisset
                </div>
                <div class="content-product-mobile">
                    @isset($product1[1])
                        <a href="{{ $product1[1]->url }}" target="blank">
                            {{ Str::limit($product1[1]->name, 60, '...') }}
                        </a>
                    @endisset
                </div>
            </div>
            <div class="product-item-mobile product-item3">
                <div  class="image-product-mobile">
                    @isset($product1[2])
                        <a href="{{ $product1[2]->url }}" target="blank">
                            <img  height="200px" width="100%" src="/storage/{{ $product1[2]->image }}"
                                alt="">
                        </a>
                    @endisset
                </div>
                <div class="content-product-mobile">
                    @isset($product1[2])
                        <a href="{{ $product1[2]->url }}" target="blank">
                            {{ Str::limit($product1[2]->name, 60, '...') }}
                        </a>
                    @endisset
                </div>
            </div>
            <div class="product-item-mobile product-item4">
                <div  class="image-product-mobile">
                    @isset($product1[3])
                        <a href="{{ $product1[3]->url }}" target="blank">
                            <img  height="200px" width="100%" src="/storage/{{ $product1[3]->image }}"
                                alt="">
                        </a>
                    @endisset
                </div>
                <div class="content-product-mobile">
                    @isset($product1[3])
                        <a href="{{ $product1[3]->url }}" target="blank">
                            {{ Str::limit($product1[3]->name, 60, '...') }}
                        </a>
                    @endisset
                </div>
            </div>
            <div class="product-item-mobile product-item5" id="product-item5">
                <div  class="image-product-mobile">
                    @isset($product2[0])
                        <a href="{{ $product2[0]->url }}" target="blank">
                            <img  height="200px" width="100%" src="/storage/{{ $product2[0]->image }}"
                                alt="">
                        </a>
                    @endisset
                </div>
                <div class="content-product-mobile">
                    @isset($product2[0])
                        <a href="{{ $product2[0]->url }}" target="blank">
                            {{ Str::limit($product2[0]->name, 60, '...') }}
                        </a>
                    @endisset
                </div>
            </div>
        </div>
    </div>
    <div id="desktopProductHomepage" style="background-color: rgb(215, 215, 236)">
        <div class="child-content">
            <h3 style="text-align: center;color: #600c8b !important">SẢN PHẨM</h3>
            <div class="container">
                <div class="row carousel-list-homepage">
                    <div class="col-md-12">

                        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <!-- Wrapper for carousel items -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        @foreach ($product1 as $p)
                                            <div class="col-sm-3">
                                                <div class="thumb-wrapper">
                                                    <div class="img-box">
                                                        <a href="{{ $p->url }}" target="blank"> <img
                                                                style="max-height: 160px;"
                                                                src="/storage/{{ $p->image }}" class="img-fluid"
                                                                alt=""></a>

                                                    </div>
                                                    <div class="thumb-content">
                                                        <a href="{{ $p->url }}" target="blank">
                                                            <h6 style="font-size: 12px">
                                                                {{ Str::limit($p->name, 20, '...') }}</h6>
                                                        </a>


                                                        <a href="{{ $p->url }}" target="blank"
                                                            class="btn btn-primary">Xem chi tiết</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach



                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div class="row">
                                        @foreach ($product2 as $p)
                                            <div class="col-sm-3">
                                                <div class="thumb-wrapper">
                                                    <div class="img-box">
                                                        <img style="max-height: 160px;"
                                                            src="/storage/{{ $p->image }}" class="img-fluid"
                                                            alt="">
                                                    </div>
                                                    <div class="thumb-content">
                                                        <h6 style="font-size: 12px">{{ Str::limit($p->name, 20, '...') }}
                                                        </h6>

                                                        <a href="#" class="btn btn-primary">Xem chi tiết</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach



                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div class="row">
                                        @foreach ($product3 as $p)
                                            <div class="col-sm-3">
                                                <div class="thumb-wrapper">
                                                    <div class="img-box">
                                                        <img style="max-height: 160px;"
                                                            src="/storage/{{ $p->image }}" class="img-fluid"
                                                            alt="">
                                                    </div>
                                                    <div class="thumb-content">
                                                        <h6 style="font-size: 12px">{{ Str::limit($p->name, 20, '...') }}
                                                        </h6>

                                                        <a href="#" class="btn btn-primary">Xem chi tiết</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach



                                    </div>
                                </div>


                            </div>
                            <!-- Carousel controls -->
                            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <div style=" padding-bottom: 35px">
        <div class="child-content">
            <div class="container  flexContent">
                <div  class="col-left-top">
                    @isset($hotContent[0])
                    <div class="top-port-new ">
                        <article class="thumb"><a href="/port/{{$hotContent[0]->slug}}"><img width="100%" style="max-width: 400px; float: left; padding-right: 15px" src="/storage/{{$hotContent[0]->image}}" alt=""></a> </article>
                        <h4 class="title-port"><a href="/port/{{$hotContent[0]->slug}}">{{$hotContent[0]->title}}</a></h4>
                        <p class="short-content"><a href="/port/{{$hotContent[0]->slug}}">{{$hotContent[0]->short_content}}</a></p>
                    </div>
                    @endisset

                    <div class="sub-port-new">
                        <div class="row">
                            @isset($hotContent[1])
                            <div class="col-sm-6" style="border-right: solid 2px #eae7e7">
                                <h5 class="title-port"><a href="/port/{{$hotContent[1]->slug}}">{{$hotContent[1]->title}}</a></h5>
                                <div class="short-content"><a href="/port/{{$hotContent[1]->slug}}">{{$hotContent[1]->short_content}}</a></div>
                            </div>
                            @endisset
                            @isset($hotContent[2])
                            <div class="col-sm-6">
                                <h5 class="title-port"><a href="/port/{{$hotContent[2]->slug}}">{{$hotContent[2]->title}}</a></h5>
                                <div class="short-content"><a href="/port/{{$hotContent[2]->slug}}">{{$hotContent[2]->short_content}}</a></div>
                            </div>
                            @endisset



                        </div>
                    </div>
                </div>
                <div class="col-right-top"></div>
            </div>
            <div class="news container">
                <hr>
                <h1 class="text-center" style="color: #600c8b">HEALTH</h1>
                <br>
                <div class="port-new-content">
                    <div class="row">
                        @foreach ($healthContent as $h)
                        <div class="col-sm-6  port-new-item">
                            <h5 class="title-port"><a href="/port/{{$h->slug}}">{{$h->title}}</a></h5>
                            <article class="thumb"> <a href="/port/{{$h->slug}}"><img width="100%" style="max-width: 200px; min-height: 115px; float: left; padding-right: 15px" src="/storage/{{$h->image}}" alt=""></a></article>
                            <p class="short-content"><a href="/port/{{$h->slug}}">{{$h->short_content}}</a></p>
                        </div>
                        @endforeach

                    </div>
                    <div> <a class="btn btn-violet" href="/health">Read more</a></div>
                </div>
            </div>
            <div class="news container">
                <hr>
                <h1 class="text-center" style="color: #600c8b"><a href="/edu"></a> EDUCATION</h1>
                <br>
                <div class="port-new-content">
                    <div class="row">
                        @foreach ($eduContent as $h)
                        <div class="col-sm-6  port-new-item">
                            <h5 class="title-port"><a href="/port/{{$h->slug}}">{{$h->title}}</a></h5>
                            <article class="thumb"> <a href="/port/{{$h->slug}}"><img width="100%" style="max-width: 200px; min-height: 115px; float: left; padding-right: 15px" src="/storage/{{$h->image}}" alt=""></a></article>
                            <p class="short-content"><a href="/port/{{$h->slug}}">{{$h->short_content}}</a></p>
                        </div>
                        @endforeach

                    </div>
                    <div> <a class="btn btn-violet"  href="/edu">Read more</a></div>
                </div>
            </div>

        </div>
    </div>

@endsection
