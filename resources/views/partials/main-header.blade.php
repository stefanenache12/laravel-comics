@php
    $menu = [
    'CHARACTERS',
    'COMICS',
    'MOVIES',
    'TV',
    'GAMES',
    'COLLECTIBLES',
    'VIDEOS',
    'FANS',
    'NEWS',
    'SHOP'
];
@endphp

<header>
    <div>
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
    </div>

    <div class="menu">
        <div class="single-menu">
            @foreach ($menu as $item)
                <a href="">{{ $item }}</a>
            @endforeach
        </div>
    </div>
</header>