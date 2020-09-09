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
                        <form action="{{ route('auth.login.store') }}" method="post">
                            @csrf
                            <div class="inputs">
                                <div class="input-group chroma-shadow" id="first-group">
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" id="email" placeholder="nice-cock-bro@example.com">
                                </div>
                                <div class="input-group chroma-shadow">
                                    <label for="password">Password: </label>
                                    <input type="password" name="password" id="password" placeholder="password">
                                </div>
                                <div class="help-group">
                                    <a href="{{ route('auth.login.forgot') }}">lost/forgotten password?</a>
                                </div>
                            </div>
                            <button id="big-square-submit" class="chroma-shadow" type="submit"><i class="fas fa-chevron-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
