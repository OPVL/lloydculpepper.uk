<?php

namespace App\Http\Controllers;

use App\Util\Navbar\Link;
use App\Util\Navbar\Navbar;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function __invoke()
    {
        // dd(Navbar::first());

        $nav = Navbar::first();

        // $nav->links()->saveMany([new Link(['label' => 'TestLabel', 'href' => 'projects'])]);
        dd($nav->links()->pluck('label'));
    }
}
