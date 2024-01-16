@php
$nav_links = config('nav.header_links');  
@endphp

<header>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center py-2">
            <div>
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="" class="w-75">
            </div>
            <nav>
                <ul class="d-flex gap-3  justify-content-end">
                    @foreach ($nav_links as $link)
                        <li>
                            <a href="{{ route($link['route_name']) }}"  style="color: black">{{ $link['title'] }}</a>
                        </li>
                    @endforeach
                    <li>
                        <select name="shop" id="shop">
                            <option value="">SHOP</option>
                        </select>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
