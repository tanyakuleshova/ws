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


                    <div class="about-content">
                        <p class="base-paragraph">БІЛИЙ ЗВУК Rental</p>
                        <p class="base-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

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