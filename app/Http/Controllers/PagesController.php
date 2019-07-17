<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function tables()
    {
        // return view('pages.dashboard');
        return view('pages.tables');
    }

    public function icons()
    {
        return view('pages.icons');
    }

    public function notification()
    {
        return view('pages.notification');
    }

    public function typography()
    {
        return view('pages.typography');
    }

    public function profile()
    {
        return view('pages.profile');
    }
}
