<?php

namespace App\Http\Controllers;
use App\Models\Anime;
use App\Models\Japanese;
use App\Models\Korea;
use App\Models\English;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $numberAnime = Anime::count();
        $numberJapan = Japanese::count();
        $numberKorea = Korea::count();
        $numberEnglish = English::count();
        return view('layouts.dashboard', ['numberAnime' => $numberAnime, 'numberJapan' => $numberJapan, 'numberKorea' => $numberKorea, 'numberEnglish' => $numberEnglish]);
        
    }
}
