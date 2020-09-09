@extends('layouts.app')

@section('title', 'narcissism corner')

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
                    
                </div>
            </div>
        </main>
    </div>
@endsection
