<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('pages.landing');
    }

    public function gudang()
    {
        return view('pages.gudang');
    }

    public function switch()
    {
        return view('pages.switch');
    }
    public function router()
    {
        return view('pages.router');
    }
    public function faq()
    {
        return view('pages.faq');
    }
}