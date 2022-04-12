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
            <div class="page-title-box chroma-shadow">Reset Password</div>
            <div class="hero-image">
                <div class="login-form inner-content">
                    <div class="form-body">
                        <form action="{{ route('login.store') }}" method="post">
                            @csrf
                            <div class="inputs">
                                <div class="input-group" id="first-group">
                                    <label>You fucking tit. You obviously didn't</label>
                                </div>
                                <div class="input-group">
                                    <label>build a password reset feature.</label>
                                </div>
                                <div class="input-group">
                                    <label>lmao, you fuckin mong.</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
