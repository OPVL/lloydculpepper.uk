@extends('layouts.app')

@section('title', 'narcissism corner')

    {{-- @section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
    @endsection --}}
<style>
.split-pane {
    display: flex;
    justify-content: space-between;
}

.big-black-box {
    height: 60vh;
    background: black;
    width: 40%;
    color: white;
}

.right {
    background: white;
    width: 60%;
}
</style>
@section('content')
    <div class="app">
        <header>
            @isset($nav)
                @include('partials.navbar')
            @endisset </header>
        <main>
            <div class="page-title-box chroma-shadow">About</div>
            <div class="hero-image">
                <div class="inner-content">
                    <div class="split-pane">
                        <div class="big-black-box">
                            <div class="heading">
                                SOME BIG TEXT TEXT
                            </div>
                        </div>
                        <div class="right">
                            images or somethings?
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
