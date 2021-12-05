<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function dashboard()
    {
        return view('pages.dashboard');
    }

    public function transactions()
    {
        return view('pages.transactions');
    }

    public function users()
    {
        return view('pages.users');
    }

    public function user()
    {
        return view('pages.user');
    }
}
