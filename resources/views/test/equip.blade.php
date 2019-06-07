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

                            @foreach($categories as $category)
                            <?php $alias = mb_strtolower(str_replace(" ", "-", $category->en_name)); ?>
                                <li data-id="{{$category->id}}"><a href="/test-equipment/{{$alias}}">{{$category->ru_name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="right-menu-preview">
                        @include('test.equip_menu')
                    </div>
                </div>
            </div>
            {{--            <div class="ticker"><span class="ticker__line">Белый Звук</span></div>--}}
        </div>
    </div>
    <!-- <script async="" src="https://www.google-analytics.com/analytics.js"></script> -->

@endsection