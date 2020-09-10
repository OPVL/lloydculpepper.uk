<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function show(): View
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request): RedirectResponse
    {
        $data = $request->validated();

        \Auth::login($user, $request->cookie('remember_me'));

        return redirect()->to($_SESSION['referrer'] ?? route('admin.index'));
    }

    public function forgot(): View
    {
        return view('auth.forgot');
    }
}

//dd("You fucking tit. You obviously didn't build a password reset feature. lmao you fuckin mong")