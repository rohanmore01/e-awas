<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="format-detection" content="telephone=no" />
<meta name="description" content="">
<meta name="author" content="">
<link rel="apple-touch-icon" href="{{ asset('/images/favicon/apple-touch-icon.png') }}">
<link rel="icon" href="{{ asset('/images/favicon/favicon.png') }}">
<title>E - AWAS</title>
<!-- Custom styles for this template -->
<link href="{{ asset('/css/base.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('/css/base-responsive.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('/css/grid.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('/css/font.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('/css/flexslider.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('/css/megamenu.css') }}" rel="stylesheet" media="all" />
<link href="{{ asset('/css/print.css') }}" rel="stylesheet" media="print" />
<!-- Theme styles for this template -->
<link href="{{ asset('/css/megamenu.css') }}" rel="stylesheet" media="all" />
<link href="{{ asset('theme/css/site.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('theme/css/site-responsive.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('theme/css/ma5gallery.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('theme/css/print.css') }}" rel="stylesheet" type="text/css" media="print">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
   <script src="{{ asset('/js/html5shiv.js') }}"></script>
   <script src="{{ asset('/js/respond.min.js') }}"></script>
   <![endif]-->
<!-- Custom JS for this template -->
<noscript>
    <link href="{{ asset('theme/css/no-js.css') }}" type="text/css" rel="stylesheet">
</noscript>


{{-- Custom CSS --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css">

{{-- Custom JS --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
    $(window).ready(function() {
        $('#loaderDiv').fadeOut(2000);
    });
</script>

</head>

<body>
    <div id="fb-root"></div>
    <header>
        <div class="region region-header-top">
            <div id="block-cmf-content-header-region-block" class="block block-cmf-content first last odd">
                <noscript class="no_scr">"JzavaScript is a standard programming language that is included to provide
                    interactive features, Kindly enable Javascript in your browser. For details visit help page"
                </noscript>
                <div class="wrapper common-wrapper">
                    <div class="container common-container four_content top-header">
                        <div class="common-left clearfix">
                            <ul>
                                <li class="gov-india"><span class="responsive_go_hindi" lang="hi"><a
                                            target="_blank" href="https://india.gov.in/hi"
                                            title="भारत सरकार ( बाहरी वेबसाइट जो एक नई विंडो में खुलती है)"
                                            role="link">भारत सरकार</a></span> </li>
                                <li class="ministry"><span class="li_eng responsive_go_eng"><a target="_blank"
                                            href="https://india.gov.in/"
                                            title="Government of india,External Link that opens in a new window"
                                            role="link">Government of india</a></span></li>
                            </ul>
                        </div>
                        <div class="common-right clearfix">
                            <ul id="header-nav">
                                <li class="ico-skip cf"><a href="#skipCont" title="">Skip to main content</a>
                                </li>
                                <li class="ico-site-search cf">
                                    <a href="javascript:void(0);" id="toggleSearch" title="Site Search">
                                        <img class="top" src="{{ asset('/images/ico-site-search.png') }}"
                                            alt="Site Search" /></a>
                                    <div class="search-drop both-search">
                                        <div class="google-find">
                                            <form method="get" action="http://www.google.com/search"
                                                target="_blank">
                                                <label for="search_key_g" class="notdisplay">Search</label>
                                                <input type="text" name="q" value=""
                                                    id="search_key_g" />
                                                <input type="submit" value="Search" class="submit" />
                                                <div class="">
                                                    <input type="radio" name="sitesearch" value=""
                                                        id="the_web" />
                                                    <label for="the_web">The Web</label>
                                                    <input type="radio" name="sitesearch" value="india.gov.in"
                                                        checked id="the_domain" />
                                                    <label for="the_domain"> INDIA.GOV.IN</label>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="find">
                                            <form name="searchForm" action="">
                                                <label for="search_key" class="notdisplay">Search</label>
                                                <input type="text" name="search_key" id="search_key"
                                                    onKeyUp="autoComplete()" autocomplete="off" required />
                                                <input type="submit" value="Search" class="bttn-search" />
                                            </form>
                                            <div id="auto_suggesion"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="ico-accessibility cf">
                                    <ul style="visibility: hidden;">
                                        <li> <a onClick="set_font_size(&#39;increase&#39;)" title="Increase font size"
                                                href="javascript:void(0);" role="link">A<sup>+</sup>
                                            </a>
                                        </li>
                                        <li> <a onClick="set_font_size()" title="Reset font size"
                                                href="javascript:void(0);" role="link">A<sup>&nbsp;</sup></a> </li>
                                        <li> <a onClick="set_font_size(&#39;decrease&#39;)" title="Decrease font size"
                                                href="javascript:void(0);" role="link">A<sup>-</sup></a> </li>
                                        <li> <a href="javascript:void(0);" class="high-contrast dark"
                                                title="High Contrast" role="link">A</a> </li>
                                        <li> <a href="javascript:void(0);" class="high-contrast light"
                                                title="Normal Contrast" style="display: none;" role="link">A</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="ico-social cf">
                                    <a href="javascript:void(0);" id="toggleSocial" title="Social Medias">
                                        <img class="top" src="{{ asset('/images/ico-social.png') }}"
                                            alt="Social Medias" /></a>
                                    <ul>
                                        <li>
                                            <a target="_blank" title="External Link that opens in a new window"
                                                href="http://www.facebook.com/"><img alt="Facebook Page"
                                                    src="{{ asset('/images/ico-facebook.png') }}"></a>
                                        </li>
                                        <li>
                                            <a target="_blank" title="External Link that opens in a new window"
                                                href="http://www.twitter.com/"><img alt="Twitter Page"
                                                    src="{{ asset('/images/ico-twitter.png') }}"></a>
                                        </li>
                                        <li>
                                            <a target="_blank" title="External Link that opens in a new window"
                                                href="http://www.youtube.com/"><img alt="youtube Page"
                                                    src="{{ asset('/images/ico-youtube.png') }}"></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="ico-sitemap cf">
                                    <a href="" title="Sitemap">
                                        <img class="top" src="{{ asset('/images/ico-sitemap.png') }}"
                                            alt="Sitemap" /></a>
                                </li>
                                <li class="hindi cmf_lan d-hide">
                                    <label class="de-lag" style="vertical-align: top;">
                                        <span>Language</span>
                                        <select title="Select language" style="padding: 2px;width:70px;">
                                            <option>English</option>
                                            <option>हिन्दी</option>
                                        </select>
                                    </label>
                                </li>
                                <li class="hindi cmf_lan m-hide">
                                    <a href="javascript:;" title="Select Language">Language</a>
                                    <ul>
                                        <li><a target="_blank" href="" lang="hi" class="alink"
                                                title="Click here for हिन्दी version.">हिन्दी</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <p id="scroll" style="display: none;"><span></span></p>
        </div>
        <!--Top-Header Section end-->
        <section class="wrapper header-wrapper">
            <div class="container common-container four_content header-container">
                <h1 class="logo">
                    <a href="home.html" title="Home" rel="home" class="header__logo" id="logo">
                        <img class="national_emblem" src="{{ asset('/images/emblem-dark.png') }}"
                            alt="national emblem" height="20px;" width="20px">
                        <p><b>ई - आवास</b></p>
                        <span style="padding-top: 15px;"> E - AWAS</span>
                    </a>
                </h1>
                <div class="header-right clearfix">
                    <div class="right-content clearfix">
                        <div class="float-element">
                            <a class="sw-logo" target="_blank" href="https://swachhbharat.mygov.in/"
                                title="Swachh Bharat, External link that open in a new windows"><img
                                    src="{{ asset('/images/swach-bharat.png') }}" alt="Swachh Bharat"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/.header-wrapper-->
        <section class="wrapper megamenu-wraper">
            <div class="container common-container four_content">
                <p class="showhide"><em></em><em></em><em></em></p>
                <nav class="main-menu clearfix" id="main_menu">
                    <ul class="nav-menu">
                        <li class="nav-item"> <a href="{{ url('/') }}" class="home"
                                style="padding:10px 12px 14px;"><span style="display: none;">home</span><i
                                    class="fa fa-home"></i></a> </li>

                        @if (!session()->has('email'))
                            <li class="nav-item"><a href="{{ url('/register') }}">Register</a></li>
                            <li class="nav-item"><a href="{{ url('/login') }}">Login</a></li>
                        @endif

                        <li class="nav-item">
                            <a href="inner.html">Apply</a>
                            <div class="sub-nav">
                                <ul class="sub-nav-group">
                                    <li><a href="{{ url('/fresh-allotment') }}">Fresh Allotment</a></li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="inner.html"> Dropdown Master </a>
                            <div class="sub-nav">
                                <ul class="sub-nav-group">
                                    <li><a href="inner.html">Group Master</a></li>
                                    <li><a href="inner.html">Item Master</a></li>
                                    <li><a href="inner.html">Location</a></li>
                                </ul>
                            </div>
                        </li>

                        @if (session()->has('email'))
                            <li class="nav-item"><a href="{{ route('profile.edit') }}">Profile</a></li>
                            <li class="nav-item"><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        @endif
                    </ul>
                </nav>
                <nav class="main-menu clearfix" id="overflow_menu">
                    <ul class="nav-menu clearfix">
                    </ul>
                </nav>
            </div>
            <style type="text/css">
                body~.sub-nav {
                    right: 0
                }
            </style>
        </section>
    </header>

    {{-- for pre loader --}}
    <div id="loaderDiv">
        <div class="loader"></div>
    </div>

    <br>
    @yield('content')

    <!--/.banner-wrapper-->
    <section class="wrapper carousel-wrapper">
        <div class="container common-container four_content carousel-container">
            <div id="flexCarousel" class="flexslider carousel">
                <ul class="slides">
                    <li>
                        <a target="_blank" href="http://digitalindia.gov.in/"
                            title="Digital India, External Link that opens in a new window"><img
                                src="{{ asset('/images/carousel/digital-india.png') }}" alt="Digital India"></a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.makeinindia.com/"
                            title="Make In India, External Link that opens in a new window"> <img
                                src="{{ asset('/images/carousel/makeinindia.png') }}" alt="Make In India"></a>
                    </li>
                    <li>
                        <a target="_blank" href="http://india.gov.in/"
                            title="National Portal of India, External Link that opens in a new window"><img
                                src="{{ asset('/images/carousel/india-gov.png') }}"
                                alt="National Portal of India"></a>
                    </li>
                    <li>
                        <a target="_blank" href="http://goidirectory.nic.in/"
                            title="GOI Web Directory, External Link that opens in a new window"><img
                                src="{{ asset('/images/carousel/goidirectory.png') }}" alt="GOI Web Directory"></a>
                    </li>
                    <li>
                        <a target="_blank" href="https://data.gov.in/"
                            title="Data portal, External Link that opens in a new window"><img
                                src="{{ asset('/images/carousel/data-gov.png') }}" alt="Data portal"></a>
                    </li>
                    <li>
                        <a target="_blank" href="https://mygov.in/"
                            title="MyGov, External Link that opens in a new window"><img
                                src="{{ asset('/images/carousel/mygov.png') }}" alt="MyGov Portal"></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--/.carousel-wrapper-->
    <footer class="wrapper footer-wrapper">
        <div class="footer-top-wrapper">
            <div class="container common-container four_content footer-top-container">
                <ul>
                    <li><a href="#">Website Policies</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Terms and Conditions </a></li>
                    <li><a href="#">Feedback</a></li>
                    <li><a href="#">Web Information Manager</a></li>
                    <li><a href="#">Visitor Analytics</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Disclaimer</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom-wrapper">
            <div class="container common-container four_content footer-bottom-container">
                <div class="footer-content clearfix">
                    <div class="copyright-content"> Developed By <a target="_blank" title="NIC"
                            href="http://www.nic.in/"><strong>National Informatics
                                Centre</strong></a><strong> (NIC)</strong> <span style="text-align: center;">Version :
                            1.0.0</span> </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/.footer-wrapper-->
    <!-- jQuery v1.11.1 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"
        integrity="sha512-nhY06wKras39lb9lRO76J4397CH1XpRSLfLJSftTeo3+q2vP7PaebILH9TqH+GRpnOhfAGjuYMVmVTOZJ+682w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- jQuery Migration v1.4.1 -->
    <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
    <!-- jQuery v3.6.0 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- jQuery Migration v3.4.0 -->
    <script src="https://code.jquery.com/jquery-migrate-3.4.0.min.js"></script>

    <script src="{{ asset('/js/jquery-accessibleMegaMenu.js') }}"></script>
    <script src="{{ asset('/js/framework.js') }}"></script>
    <script src="{{ asset('/js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('/js/font-size.js') }}"></script>
    <script src="{{ asset('/js/swithcer.js') }}"></script>
    <script src="{{ asset('theme/js/ma5gallery.js') }}"></script>
    <script src="{{ asset('/js/megamenu.js') }}"></script>
    <script src="{{ asset('theme/js/easyResponsiveTabs.js') }}"></script>
    <script src="{{ asset('theme/js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
</body>
