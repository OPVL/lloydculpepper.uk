@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="app">
        <header>
            @isset($nav)
                @include('partials.navbar')
            @endisset
        </header>
        <main>
            <div class="page-title-box chroma-shadow">Login</div>
            <div class="hero-image">
                <div class="login-form inner-content">
                    <div class="form-body">
                        <form action="{{ route('login.store') }}" method="post">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            @if ($loginError ?? false)
                                {{ $loginError }}
                            @endif
                            <div class="inputs">
                                {{-- @error('email')
                                    {{ $message }}
                                @enderror --}}
                                <div class="input-group chroma-shadow" id="first-group">
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" id="email" placeholder="nice-cock-bro@example.com"
                                        value="{{ old('email') }}" required>
                                </div>
                                {{-- @error('password')
                                    {{ $message }}
                                @enderror --}}
                                <div class="input-group chroma-shadow">
                                    <label for="password">Password: </label>
                                    <input type="password" name="password" id="password" placeholder="password" required>
                                </div>
                                <div class="help-group">
                                    {{-- <a href="{{ route('login.forgot') }}">lost/forgotten password?</a> --}}
                                </div>
                            </div>
                            <button id="big-square-submit" class="chroma-shadow" type="submit"><i
                                    class="fas fa-chevron-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
