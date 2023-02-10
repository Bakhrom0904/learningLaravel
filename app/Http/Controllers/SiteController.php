<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function test()
    {
        return view('test');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        dd("test");
        dd($request->ip());
    }

    public function about()
    {
        return view('about');
    }
}
