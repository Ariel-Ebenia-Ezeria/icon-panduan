<?php

namespace App\Http\Controllers;

use App\Models\Bantuan;
use App\Models\Barang;
use App\Models\Faq;
use App\Models\Router;
use App\Models\Switchh;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('pages.landing');
    }

    public function gudang()
    {
        $barangs = Barang::all();
        return view('pages.gudang', compact('barangs'));
    }

    public function switch()
    {
        $switch = Switchh::all();
        return view('pages.switch', compact('switch'));
    }
    public function router()
    {
        $router = Router::all();
        return view('pages.router', compact('router'));
    }
    public function faq()
    {
        $data = [
            'faqs' => Faq::all(),
            'bantuans' => Bantuan::all()
        ];
        $faqs = Faq::all();
        return view('pages.faq', $data);
    }
}
