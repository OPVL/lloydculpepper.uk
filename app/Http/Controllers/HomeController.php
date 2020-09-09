<?php

namespace App\Http\Controllers;

use App\Util\Navbar\Link;
use App\Util\Navbar\Navbar;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(Request $request): View
    {
        $nav = Navbar::whereSlug(config('navbar.pages.home'))->first();
                
        return view('home.index')->with('nav', $nav);
    }
}
