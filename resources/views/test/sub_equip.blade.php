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

                           @foreach($categories as $cat)
                                <?php $alias = mb_strtolower(str_replace(" ", "-", $cat->en_name)); ?>
                               <li data-id="{{"$cat->id"}}"><a class="{{"cat_list"}}" href="{{"/test-equipment/$alias"}}">{{$cat->ru_name}}</a>
                                   @foreach($subcategory as $sub)
                                       @if($sub->category_id == $cat->id)
                                           <ul>
                                               <li><a href="">
                                                   {{$sub->ru_name}}
                                                   </a>
                                               </li>
                                           </ul>
                                       @endif
                                   @endforeach
                               </li>
                           @endforeach
                        </ul>
                    </div>

                    <div class="right-menu-preview">
                        @include('test.sub_equip_menu')
                    </div>
                </div>
            </div>
            {{--            <div class="ticker"><span class="ticker__line">Белый Звук</span></div>--}}
        </div>
    </div>
    <!-- <script async="" src="https://www.google-analytics.com/analytics.js"></script> -->

@endsection
