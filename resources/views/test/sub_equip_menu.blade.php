


<div class="item-preview">@foreach($subcategory as $sub)<?php ($sub->img) ? $img = $sub->img : $img = "default_sound_equipment.jpg"?><a class="item-preview__item" href=""
                                                               style="background-image: url({{asset("storage/$img")}});">
        <div class="item-preview__mask base-paragraph base-paragraph--header base-paragraph--header-clickable equip-style">
            <span>{{$sub->ru_name}}</span></div></a>@endforeach
</div>
