<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homePage()
    {
        return view('pages.homepage');
    }
    public function pricingPage()
    {
        return view('pages.pricing');
    }
    public function faqPage()
    {
        return view('pages.faq');
    }
    public function fiturPage()
    {
        return view('pages.fitur');
    }
    public function comingSoon()
    {
        return view('coming-soon');
    }

    public function guidePage()
    {
        return view('pages.petunjuk');
    }
}
