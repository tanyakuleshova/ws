
<div class="item-preview">@foreach($categories as $category)<a class="item-preview__item" href=""
                             style="background-image: url({{asset("storage/$category->img")}});">
        <div class="item-preview__mask base-paragraph base-paragraph--header base-paragraph--header-clickable equip-style">
            <span>{{$category->ru_name}}</span></div></a>@endforeach
{{--    <a class="item-preview__item" href=""--}}
{{--           style="background-image: url({{asset("img/sound_equipment/6.jpg")}})">--}}
{{--        <div class="item-preview__mask base-paragraph base-paragraph--header base-paragraph--header-clickable equip-style">--}}
{{--            <span>Сценические  <br> конструкции</span></div>--}}
{{--    </a><a class="item-preview__item" href=""--}}
{{--           style="background-image: url({{asset("img/sound_equipment/3.jpg")}})">--}}
{{--        <div class="item-preview__mask base-paragraph base-paragraph--header base-paragraph--header-clickable equip-style">--}}
{{--            <span>Световое  <br> оборудование</span></div>--}}
{{--    </a><a class="item-preview__item" href="#"--}}
{{--           style="background-image: url({{asset("img/sound_equipment/10.jpg")}})">--}}
{{--        <div class="item-preview__mask base-paragraph base-paragraph--header base-paragraph--header-clickable equip-style">--}}
{{--            <span>Видео  <br> и медиа</span></div>--}}
{{--    </a><a class="item-preview__item" href="#"--}}
{{--           style="background-image: url({{asset("img/sound_equipment/9.jpg")}})">--}}
{{--        <div class="item-preview__mask base-paragraph base-paragraph--header base-paragraph--header-clickable equip-style">--}}
{{--            <span>Спецэффекты</span></div>--}}
{{--    </a><a class="item-preview__item" href="#"--}}
{{--           style="background-image: url({{asset("img/sound_equipment/5.jpg")}})">--}}
{{--        <div class="item-preview__mask base-paragraph base-paragraph--header base-paragraph--header-clickable equip-style">--}}
{{--            <span>Другое</span></div>--}}
{{--    </a>--}}

</div>