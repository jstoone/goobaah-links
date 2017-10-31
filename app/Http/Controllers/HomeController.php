<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gooLinks = Link::where('type', Link::TYPE_GOO)->get();
        $baahLinks = Link::where('type', Link::TYPE_BAAH)->get();

        $totalLinks = Link::count();
        $linkRating = 0;

        if ($totalLinks > 0) {
            $linkRating = ($gooLinks->count() / $totalLinks) * 100;
            $linkRating = round($linkRating, 1);
        }

        return view('home')
            ->with('gooLinks', $gooLinks)
            ->with('baahLinks', $baahLinks)
            ->with('totalLinks', $totalLinks)
            ->with('linkRating', $linkRating);
    }
}
