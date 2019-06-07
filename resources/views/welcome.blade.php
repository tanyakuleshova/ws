@extends('layout')
@section('content')
<noscript>
    <div style="padding:0 30px">
        <h1>White Sound</h1>
    </div>
</noscript>
<div id="root">
    <div class="app">
        <header class="header">
            @include('layouts.header_logo')

            <div class="header__buttons"><button class="header__nav-toggle menu-btn-open">Меню</button>
                <div class="lang header__nav-toggle"><a>ua</a><a>ru</a><a>en</a></div>

                <button class="header__nav-toggle menu-btn-close none">закрити</button>


                <a href="#" class="header__book-link" target="_blank" rel="noopener noreferrer">
                    <div>обсудить</div>
                    <div>проект</div>
                </a>
            </div>
        </header>
        @include('layouts.dropdown_menu')
        <div class="app__content">

            <div class="home">

                <div class="portfolio-gallery">
                    <div class="portfolio_item">
                        <div class="slider_container">
                            <div class="lslider flexslider">
                                <ul class="slides">
                                    <li>
                                        <div class="portfolio_slide" style="background-image: url('{{asset("img/main_slider/3.jpg")}}');"></div>
                                    </li>
                                    <li>
                                        <div class="portfolio_slide" style="background-image: url('{{asset("img/main_slider/2.jpg")}}');"></div>
                                    </li>
                                    <li>
                                        <div class="portfolio_slide" style="background-image: url('{{asset("img/main_slider/4.jpg")}}');"></div>
                                    </li>
                                    <li>
                                        <div class="portfolio_slide" style="background-image: url('{{asset("img/main_slider/1.jpg")}}');"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <img class="footer-img" src="{{asset("img/footer.jpg")}}" alt="">
                <div class="soc-icons">
                    <a href="https://www.facebook.com/whitesoundrental/"><i class="fab fa-2x fa-facebook-square"></i></a>
                    <a href=""><i class="fab fa-2x fa-instagram"></i></a>
                </div>

{{--                <div class="footer" style='background-image: url("{{asset("img/footer.jpg")}}")'></div>--}}
{{--                <div class="home__content block-with-padding">--}}
{{--                    <p class="base-paragraph">БІЛИЙ ЗВУК Rental</p>--}}
{{--                    <p class="base-paragraph base-paragraph-phone">044 555 58 58</p>--}}
{{--                    <p class="base-paragraph base-paragraph-phone">067 840 32 60, 093 880 72 80</p>--}}
{{--                    <p class="base-paragraph">бул. Перова 3а, Киев, Украина</p>--}}
{{--                    <p class="base-paragraph">whitesound@gmail.com</p>--}}
{{--                </div>--}}
                <div class="home__rooms-preview">
                    @include('layouts.right_menu')
                </div>
            </div>
        </div>
{{--        <div class="ticker"><span class="ticker__line">Белый Звук</span></div>--}}
    </div>
</div>
<!-- <script async="" src="https://www.google-analytics.com/analytics.js"></script> -->

@endsection