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
                    <h1 class="header__content-header"></h1><a
                            href="#"
                            class="header__book-link" target="_blank" rel="noopener noreferrer">Обсудить <br> проект</a>
                </div>
            </header>
            @include('layouts.dropdown_menu')
            <div class="app__content" style="height: 100%">
                <div class="home">


                    <div class="portfolio-content">
                        <p style="padding-left: 20px; font-size: 18px" class="base-paragraph">Наш профиль</p>
                        <ul class="content-list">
                            <li><a href="#">live - концерты и фестивали</a></li>
                            <li><a href="#">свадебные церемонии</a></li>
                            <li><a href="#">показы мод</a></li>
                            <li><a href="#">бизнес - конференции</a></li>
                            <li><a href="#">промо - мероприятия</a></li>
                            <li><a href="#">виниловые DJ - вечеринки</a></li>
                            <li><a href="#">мастер-классы и аукционы</a></li>
                            <li><a href="#">съемки клипов и TV</a></li>
                            <li><a href="#">закрытые и частные мероприятия</a></li>
                        </ul>

                    </div>
                    <div class="home__rooms-preview">
                        @include('layouts.right_menu')
                    </div>
                </div>
            </div>
{{--            <div class="ticker"><span class="ticker__line">Белый Звук</span></div>--}}
        </div>
    </div>
    <!-- <script async="" src="https://www.google-analytics.com/analytics.js"></script> -->

@endsection