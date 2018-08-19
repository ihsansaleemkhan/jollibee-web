<div id="nav_menu-2" class="widget widget_nav_menu">
    <div class="menu-food-menu-container">
        <ul id="menu-food-menu-2" class="menu">
            @foreach($categories as $cat)
            <li class="menu-item"><a href="{{ route('cat',$cat['GroupCode']) }}">{{$cat['GroupDesc']}}</a></li>
            @endforeach
        </ul>
    </div>
</div>
