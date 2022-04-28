<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.datatables.net/fixedheader/3.2.2/css/fixedHeader.bootstrap5.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-gray shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Restaurant
                </a>
                <button 
                    class="navbar-toggler" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" 
                    aria-expanded="false" 
                    aria-label="{{ __('Toggle navigation') }}"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('login') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="mdi mdi-logout" aria-hidden="true"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('login') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

<style>
    body {
    font-family: 'Open Sans', sans-serif;
    font-size: 13px;
    color: #444444;
    overflow-x: hidden;
}

img {
    max-width: 100%;
    height: auto;
}

input:focus {
    outline: none;
}

a:hover,
a:focus,
a:visited,
a:active,
button:hover,
button:focus,
button:visited,
button:active {
    text-decoration: none;
    outline: none;
}

.primary .menu-item.menu-item-has-children:hover .wrap-megamenu {
    opacity: 1;
    filter: alpha(opacity=100);
    visibility: visible;
    transform: translateY(0);
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
}

.wrap-vertical-nav .menu-title {
    font-size: 13px;
    line-height: 13px;
    font-weight: 600;
    color: #222222;
    text-transform: uppercase;
    display: block;
    width: 100%;
    text-align: left;
    margin: 0;
    padding: 10px 0 17px 0;
}

.wrap-vertical-nav>ul {
    padding: 0;
}

.wrap-vertical-nav li {
    display: inline-block;
    width: 100%;
    float: left;
    text-align: left;
    list-style: none;
}

.wrap-vertical-nav li a {
    color: #666666;
    line-height: 30px;
}

.wrap-vertical-nav li .nav-label {
    bottom: 12px;
    left: 2px;
}

.menu-style-1 {
    display: block;
    max-width: 200px;
    width: 100%;
}

.menu-style-1 .menu-info {
    display: block;
    width: 100%;
    text-align: center;
    padding-top: 5px;
}

.menu-style-1 .menu-info .menu-name {
    line-height: 18px;
    color: #444444;
}

.menu-style-1 .menu-info .menu-name span {
    text-align: center !important;
}

.menu-style-1 .menu-info .wrap-btn {
    display: block;
    padding-top: 7px;
}

.menu-style-1 .menu-info .wrap-btn a {
    position: relative;
}

.menu-style-1 .menu-info .wrap-btn a i {
    margin-left: 5px;
}

.menu-style-1 .menu-info .wrap-btn a::after {
    display: block;
    content: '';
    height: 1px;
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
}

.menu .menu-thumnail figure {
    display: inline-block;
    overflow: hidden;
}

.menu .menu-thumnail figure img {
    transition: transform ease-out 0.3s 0s;
    -webkit-transition: transform ease-out 0.3s 0s;
    -moz-transition: transform ease-out 0.3s 0s;
    -o-transition: transform ease-out 0.3s 0s;
}

.menu:hover .menu-thumnail figure img {
    transform: scale(1.1);
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
}


/********************
*owl main slide
********************/
.style-nav-1 .owl-nav {
    display: block;
    position: absolute;
    top: 50%;
    right: 0;
    left: 0;
    height: 0;
    z-index: 10;
}

.style-nav-1 .owl-nav button {
    display: block;
    width: 36px;
    height: 56px;
    transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    border: 0;
    border-radius: 0 !important;
    background-color: #c8c8c8 !important;
    opacity: 0;
    filter: alpha(opacity=0);
    visibility: hidden;
    transition: all ease 0.5s 0s;
    -webkit-transition: all ease 0.5s 0s;
    -moz-transition: all ease 0.5s 0s;
    -o-transition: all ease 0.5s 0s;
}

.style-nav-1.slide-carousel:hover .owl-nav button {
    opacity: 1;
    filter: alpha(opacity=100);
    visibility: visible;
}

.style-nav-1 .owl-nav button i {
    font-size: 31px;
    font-weight: 100;
    line-height: 20px;
}

.style-nav-1 .owl-nav button:hover {
    background-color: #888888 !important;
    color: #ffffff;
}

.style-nav-1 .owl-nav button.owl-prev {
    float: left;
}

.style-nav-1 .owl-nav button.owl-next {
    float: right;
}

.style-twin-default {
    display: block;
    padding: 0;
    margin: 0;
}

.wrap-show-advance-info-box .title-box {
    display: inline-block;
    width: 100%;
    /*float: left;*/
    text-align: left;
    background-color: #51a179;
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 700;
    color: #fefefe;
    line-height: 14px;
    padding: 13px 18px;
    margin: 0;
}

.wrap-combined-box .wrap-menu-tab.tab-style-1 {
    margin-top: 10px;
}

.wrap-menu-tab.tab-style-1 {
    display: block;
    margin-top: 10px;
    border: 1px solid #e6e6e6;
    font-size: 0;
}



/**********************product style 2 ***********************/
.menu-style-2 {
    display: inline-block;
    padding: 19px 9px 13px 9px;
    border: 1px solid transparent;
    margin-bottom: 9px;
    -webkit-transition: all 0.5s ease 0s;
    -moz-transition: all 0.5s ease 0s;
    -ms-transition: all 0.5s ease 0s;
    -o-transition: all 0.5s ease 0s;
    transition: all 0.5s ease 0s;
}

.menu-style-2:hover {
    border-color: #ffa67b;
}

.menu .menu-thumnail {
    display: inline-block;
    position: relative;
}

.menu .menu-thumnail .group-flash {
    display: inline-block;
    position: absolute;
    top: 0;
    left: 0;
    padding: 1px;
    height: auto;
    max-width: 83px;
}

.menu .menu-thumnail .group-flash .flash-item {
    display: inline-block;
    float: left;
    color: #fff;
    text-transform: uppercase;
    background: #00bf3f;
    font-size: 10px;
    font-weight: 600;
    padding: 1.5px 9px 5.5px 9px;
    line-height: 10px;
    position: relative;
    margin-bottom: 10px;
    margin-left: 8px;
}

.menu .menu-thumnail .group-flash .flash-item::before {
    content: '';
    display: block;
    border-top: 0 solid #00bf3f;
    border-left: 9px solid #00bf3f;
    border-bottom: 5px solid transparent;
    border-right: 5px solid transparent;
    position: absolute;
    bottom: -4px;
    left: 4px;
}

.menu .menu-thumnail .group-flash .flash-item.new-label {
    background-color: #365db5;
    margin-left: 8px;
}

.menu .menu-thumnail .group-flash .flash-item.new-label::before {
    border-top-color: #365db5;
    border-left-color: #365db5;
}

.menu .menu-thumnail .group-flash .flash-item.sale-label {
    background-color: #51a179;
    margin-left: 8px;
}

.menu .menu-thumnail .group-flash .flash-item.sale-label::before {
    border-top-color: #51a179;
    border-left-color: #51a179;
}

.menu .menu-info .menu-name span,
.menu-style-2 .menu-info .menu-name span {
    font-size: 13px;
    line-height: 18px;
    color: #222222;
    text-align: left;
    display: inline-block;
    width: 100%;
    margin-top: 5px;
}

.menu .menu-info .menu-rating,
.wrap-menu-detail .detail-info .menu-rating {
    display: inline-block;
    margin-top: 8px;
}

.menu-style-2 .menu-info .menu-rating {
    display: inline-block;
    margin-top: 0;
    margin-bottom: -2px;
}

.menu-style-2 .menu-info .menu-rating i:not(:last-child) {
    margin-right: 2px;
}

.menu-style-2 .menu-info .menu-rating i:last-child {
    margin-right: 3px;
}

.wrap-menu-detail .detail-info .menu-rating i,
.menu .menu-info .menu-rating i,
.menu-style-2 .menu-info .menu-rating i {
    display: inline-block;
    font-size: 13px;
    color: #efce4a;
    line-height: 20px;
}

.wrap-menu-detail .detail-info .menu-rating .count-review,
.menu .menu-info .menu-rating .count-review,
.menu-style-2 .menu-info .menu-rating .count-review {
    font-size: 14px;
    line-height: 20px;
    color: #888888;
    font-style: italic;
}

.menu .menu-info .wrap-price,
.menu-style-2 .menu-info .wrap-price {
    display: inline-block;
    width: 100%;
    text-align: left;
    margin-top: 3px;
}

.menu .menu-info .wrap-price .menu-price,
.menu-style-2 .menu-info .wrap-price .menu-price {
    font-size: 14px;
    line-height: 24px;
    display: inline-block;
    margin: 0;
}

.menu .menu-info .wrap-price span.menu-price,
.menu-style-2 .menu-info .wrap-price span.menu-price {
    font-family: 'Lato', san-serif;
    font-weight: 500;
    color: #388e3c;
}

.wrap-menu-detail .detail-info .wrap-price ins>p,
.menu .menu-info .wrap-price ins>p,
.menu-style-2 .menu-info .wrap-price ins>p {
    font-weight: 600;
    color: #51a179;
    text-align: left;
    padding-right: 8px;
}

.wrap-menu-detail .detail-info .wrap-price del>p,
.menu .menu-info .wrap-price del>p,
.menu-style-2 .menu-info .wrap-price del>p {
    font-family: 'Lato', san-serif;
    font-weight: 300;
    font-size: 13px !important;
    color: #aaaaaa;
    text-decoration: line-through;
}

.menu .menu-thumnail,
.menu-style-2 .menu-thumnail {
    position: relative;
    overflow: hidden;
    display: inline-block;
}

.menu-style-2 .menu-thumnail .wrap-btn {
    display: inline-block;
    position: absolute;
    bottom: 0;
    right: 0;
}

.menu-style-2 .menu-thumnail .wrap-btn .function-link {
    display: inline-block;
    font-size: 13px;
    line-height: 25px;
    color: #ffffff;
    font-weight: 600;
    background-color: #000000;
    text-transform: capitalize;
    padding: 0 10.42px;
    opacity: 0;
    filter: alpha(opacity=0);
    visibility: hidden;
    transform: translateX(100px);
    -webkit-transform: translateX(100px);
    -ms-transform: translateX(100px);
    transition: all ease 0.5s 0s;
    -webkit-transition: all ease 0.5s 0s;
    -moz-transition: all ease 0.5s 0s;
    -o-transition: all ease 0.5s 0s;
}

.menu-style-2:hover .menu-thumnail .wrap-btn .function-link {
    opacity: 1;
    filter: alpha(opacity=100);
    visibility: visible;
    transform: translateX(0);
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
}
</style>