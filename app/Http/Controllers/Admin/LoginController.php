<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function show(): View
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request): RedirectResponse
    {
        if (Auth::attempt($request->validated(), true))
            return redirect()->route('admin.dashboard');

        return back()->with('loginError', 'unable to process login');
    }

    public function forgot(): View
    {
        return view('auth.forgot');
    }
}

//dd("You fucking tit. You obviously didn't build a password reset feature. lmao you fuckin mong")
