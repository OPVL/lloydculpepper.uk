
    <!-- Stored in resources/views/child.blade.php -->

    @extends('layouts.app')

    @section('title', 'Parallax Title')

        {{-- @section('sidebar')
        @parent

        <p>This is appended to the master sidebar.</p>
        @endsection --}}

    @section('content')
        <div class="app">
            <header>
                <nav class="navigation">
                    <ul>
                        <li>
                            <a href="/about">$about</a>
                        </li>
                    </ul>
                </nav>
            </header>
            <main>
                <div id="scene" class="hero-image" >
                    <div class="inner-content" data-depth="0.2">
                        <h1 class="chroma-shadow" id="bigname">Lloyd Culpepper</h1>
                        <h4 class="tagline chroma-shadow">developer, slacker.</h4>
                        <div class="social-icons">
                            @foreach (config('social') as $social)

                                <a href="{{ $social['link'] }}" class="chroma-shadow {{ $social['label'] }}">
                                    <i class="{{ $social['icon'] }}" aria-hidden="true"></i>
                                    {{-- <h6>{{ $social['label'] }}</h6> --}}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <script>
            var scene = document.getElementById('scene');
            var parallax = new Parallax(scene);

            console.log(parallax);
        </script>
    @endsection
