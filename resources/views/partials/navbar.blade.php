<nav class="navigation">
    <ul>
        @isset($nav)
            @foreach ($nav->links as $link)
                <li class="nav-link">
                    <a href="{{ $link->href }}">{{ $link->label }}</a>
                </li>
            @endforeach
        @endisset
    </ul>
</nav>
