<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class WorkInProgressController extends Controller
{
    public function parallax(): View
    {
        return view('wip.parallax');
    }
}
