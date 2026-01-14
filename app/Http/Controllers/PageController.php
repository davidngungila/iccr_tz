<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function ministries()
    {
        return view('pages.ministries');
    }

    public function events()
    {
        return view('pages.events');
    }

    public function media()
    {
        return view('pages.media');
    }

    public function resources()
    {
        return view('pages.resources');
    }

    public function getInvolved()
    {
        return view('pages.get-involved');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function terms()
    {
        return view('pages.legal.terms');
    }

    public function privacy()
    {
        return view('pages.legal.privacy');
    }

    public function codeOfConduct()
    {
        return view('pages.legal.code-of-conduct');
    }
}

