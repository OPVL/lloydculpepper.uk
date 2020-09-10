    {!! Tracker::script() !!}

    <!-- Stored in resources/views/child.blade.php -->

    @extends('layouts.app')

    @section('title', 'Page Title')

        {{-- @section('sidebar')
        @parent

        <p>This is appended to the master sidebar.</p>
        @endsection --}}

    @section('content')
        <div class="app">
            <header>
                @isset($nav)
                    @include('partials.navbar')
                @endisset </header>
            <main>
                <div class="hero-image">
                    <div class="inner-content">
                        <h1 class="chroma-shadow" id="bigname">Lloyd Culpepper</h1>
                        <h4 class="tagline chroma-shadow">developer, slacker.</h4>
                        <div class="social-icons">
                            @foreach (config('social') as $social)

                                <a href="{{ $social['link'] }}" class="chroma-shadow {{ $social['label'] }}"
                                    target="_blank" rel="noreferrer" aria-label="{{ $social['label'] }}">
                                    <i class="{{ $social['icon'] }}" aria-hidden="true"></i>
                                    {{-- <h6>{{ $social['label'] }}</h6>
                                    --}}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </main>
        </div>
    @endsection
