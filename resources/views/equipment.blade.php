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
                    <div class="lang mobile-none header__nav-toggle"><a>ua</a><a>ru</a><a>en</a></div>

                    <button class="header__nav-toggle menu-btn-close none">закрити</button>
                    <h1 class="header__content-header"></h1><a
                            href="#"
                            class="mobile-none header__book-link" target="_blank" rel="noopener noreferrer">Обсудить <br> проект</a>
                </div>
            </header>
            @include('layouts.dropdown_menu')
            <div class="app__content">
                <div class="home">
                    <div class="equipment-content">
                        <ul class="content-list">
                            <li><a href="/equipment/sound-equipment">Звуковое оборудование</a></li>
                            <li><a href="#">Сценические конструкции</a></li>
                            <li><a href="#">Световое оборудование</a></li>
                            <li><a href="#">Видео и медиа</a></li>
                            <li><a href="#">Спецэффекты</a></li>
                            <li><a href="#">Другое</a></li>
                        </ul>
                    </div>
                    <div class="right-menu-preview">
                        @include('layouts.equipment_menu')
                    </div>
                </div>
            </div>
{{--            <div class="ticker"><span class="ticker__line">Белый Звук</span></div>--}}
        </div>
    </div>
    <!-- <script async="" src="https://www.google-analytics.com/analytics.js"></script> -->

@endsection