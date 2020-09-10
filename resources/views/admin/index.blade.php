@extends('layouts.app')

@section('title', 'Page Title')


@section('content')
    <div class="app">
        <header>
            @isset($nav)
                @include('partials.navbar')
            @endisset </header>
        <main>
            
        </main>
    </div>
@endsection
