<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function tables()
    {
        return view('layouts.pages.tables');
    }

    public function icons()
    {
        return view('layouts.pages.icons');
    }

    public function notification()
    {
        return view('layouts.pages.notification');
    }

    public function typography()
    {
        return view('layouts.pages.typography');
    }

    public function profile()
    {
        return view('layouts.pages.profile');
    }
}
