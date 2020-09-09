<nav class="navigation">
    <ul>
        @isset($nav)
            @foreach ($nav->links as $link)
            <li class="nav-link {{ Route::currentRouteName() === $link->href ? 'active' : '' }}">
                    <a href="{{ $link->url }}">{{ $link->label }}</a>
                </li>
            @endforeach
        @endisset
    </ul>
</nav>
