<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="icon" type="image/x-icon" href="/images/logo.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css" />
</head>

<body>
    <header id="header" class="header-content">
        <div class="header-left">
            <span><img width="50%" src="/images/logo.jpg" /></span>
        </div>
        <div>
            <input style="width: 500px" placeholder="Bạn muốn tìm gì" class="form-control" id="search"
                name="search" />
            <div id="autocomplete" class="autocomplete">
            </div>
        </div>
        <div class="header-right">
            SIMPLEMANPLUS
        </div>
    </header>
    <!-- Top Navigation Menu mobile -->
    <nav id="navMobile" class="topnavMobile navFixed">
        <a class="active">
            <input style="width: 300px;" placeholder="Bạn muốn tìm gì" class="form-control" id="search2"
                name="search" />
            {{-- <div id="autocomplete2" class="autocomplete">
            </div> --}}
        </a>
        <div id="myLinks">
            <a href="/">Trang chủ</a>
            <a href="/gioi-thieu">Giới thiệu</a>
            <a href="/lien-he">Liên hệ</a>
            <a href="/policy">Chính sách</a>
            <a href="/suc-khoe">Sức khỏe</a>
            <a href="/giao-duc">Giáo dục</a>
            <a href="/san-pham">Sản phẩm</a>
            <a href="/blog">Blog</a>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="showMenuMobile()">
            <i class="fa fa-bars"></i>
        </a>
    </nav>
    {{-- end menu mobile --}}
    <nav id="navbarDesktop" class=" justify-content-center navbar navbar-expand-sm bg-info navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="/">Trang chủ</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="/gioi-thieu">Giới thiệu</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="/lien-he">Liên hệ</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="/policy">Chính sách</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="/suc-khoe">Sức khỏe</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="/giao-duc">Giáo dục</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="/san-pham">Sản phẩm</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="/blog">Blog</a>
            </li>
            {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Danh mục
                </a>
                <div class="dropdown-menu" style="background-color: #600c8b !important" aria-labelledby="navbarDropdown">
                    @foreach ($cats as $c)
                        <a class="dropdown-item custom-dropdown-item"  href="/product/{{ $c->name }}">{{ $c->name }}</a>
                    @endforeach


                </div>
            </li> --}}

        </ul>
    </nav>



    <div class="main-content">
        @yield('content')
    </div>



    <footer>
        <div class="footer ">

            <div>
                <b>Thông tin</b>
                <div><span><i class="fa fa-phone"></i></span> &nbsp; 0963 262 036</div>
                <div><span><i class="fa fa-envelope "></i></span>&nbsp; <a style="color: white"
                        href="mailto:simplemanplusvn@gmail.com">simplemanplusvn@gmail.com</a></div>
                <div><span><i class="fa fa-map-marker"></i></span> &nbsp;&nbsp; 503 Nam Kỳ Khởi Nghĩa, Quận 3, TP HCM </div>
                <div class="grid-icon">
                    <div class="icon"><a target="_blank"
                            href="https://www.facebook.com/Hero-Dog-Stories-104413589062739/?ref=pages_you_manage"><i
                                class="fa fa-facebook"></i></a></div>
                    <div class="icon"><a target="_blank"
                            href="https://www.youtube.com/channel/UCPU8J1JVPuwYGU5azaS-XuA"><i
                                class="fa fa-youtube"></i></a></div>
                    <div class="icon"><a target="_blank"><i class="fa fa-twitter"></i></a></div>
                </div>
                <div>© Copyright - 2022, website made by AnimalStoriesPlus. All rights reserves</div>
                <div>
                </div>
            </div>
            <div id="footer-col-right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.2658200165793!2d106.68034471428976!3d10.790941392311709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528d350ac4adf%3A0xbd6f140b1c094793!2zNTAzIMSQLiBOYW0gS-G7syBLaOG7n2kgTmdoxKlhLCBQaMaw4budbmcgMTQsIFF14bqtbiAzLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1663288303491!5m2!1svi!2s" width="450" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>


    </footer>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.typeahead.min.js"></script>
    <script src="/js/bootstrap3-typeahead.min.js"></script>
    <script src="/js/style.js"></script>
    <script>
        var route = "{{ url('autocomplete-search') }}";
        $('#search').typeahead({
            source: function(query, process) {
                return $.get(route, {
                    query: query
                }, function(data) {
                    if (data.length === 0) {
                        $('#autocomplete').hide()
                    } else {
                        $('#autocomplete').show()
                    }
                    $('#autocomplete').empty()
                    data.forEach(element => {
                        var item =
                            `<a href="${element.url}" target="blank"><div class="autocomplete-item"><div class="item-left"><img src="/storage/${element.image}" width="100%" /></div><div class="item-right">${element.name}</div></div></a>`
                        $('#autocomplete').append(item);
                    });
                });
            },

        });
        // $('#search2').typeahead({
        //     source: function(query, process) {
        //         return $.get(route, {
        //             query: query
        //         }, function(data) {
        //             if (data.length === 0) {
        //                 $('#autocomplete2').hide()
        //             } else {
        //                 $('#autocomplete2').show()
        //             }
        //             $('#autocomplete').empty()
        //             data.forEach(element => {
        //                 var item =
        //                     `<a href="${element.url}" target="blank"><div class="autocomplete-item"><div class="item-left"><img src="/storage/${element.image}" width="100%" /></div><div class="item-right">${element.name}</div></div></a>`
        //                 $('#autocomplete2').append(item);
        //             });
        //         });
        //     },

        // });
    </script>
</body>

</html>
