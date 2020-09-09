<?php

namespace App\Http\Controllers;

use App\Util\Navbar\Navbar;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutController extends Controller
{
    public function __invoke(): View
    {
        $nav = Navbar::whereSlug(config('navbar.pages.about', 'main'))->first();

        return view('about.index')->with('nav', $nav);
    }
}
