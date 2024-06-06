<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\All;
use App\Models\Flashcard;
use App\Models\bisyaratvideo;
use App\Models\Musik;
use App\Models\Tari;
use App\Models\Gambar;
use App\Models\Galeri;
use App\Models\Karyagbr;
use App\Models\Karyavid;

class AllController extends Controller
{
    public function home()
    {
        return view('webUtama.home');
    }

    public function landing()
    {
        return view('webUtama.landing');
    }

    public function tBhsisyarat()
    {
        $flashcards = Flashcard::all();
        $videos = bisyaratvideo::all();
        return view('webUtama.tutorial.tBhsisyarat', compact('flashcards', 'videos'));
    }

    public function tMusik()
    {
        $vmusik = Musik::all();
        return view('webUtama.tutorial.tMusik', compact('vmusik'));
    }

    public function tTari()
    {
        $vtari = Tari::all();
        return view('webUtama.tutorial.tTari', compact('vtari'));
    }

    public function tGambar()
    {
        $gambar = Gambar::all();
        return view('webUtama.tutorial.tGambar', compact('gambar'));
    }

    public function galeri()
    {
        $karya = Karyagbr::all();
        return view('Admin.Galeri.galeri', compact('karya'));
    }

    public function karya()
    {
        $karya = Karyagbr::all();
        $karya = Karyavid::all();
        return view('Admin.Galeri.galeri', compact('karya'));
    }

    public function galerivideo()
    {
        $karya = Karyavid::all();
        return view('Admin.Galeri.galeri-video', compact('karya'));
    }
}
