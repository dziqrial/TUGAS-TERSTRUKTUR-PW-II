<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function index()
    {
        return view('pages.design');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function gallery()
    {
        return view('pages.gallery');
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
