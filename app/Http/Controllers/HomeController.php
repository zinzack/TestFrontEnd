<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

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
        return view('home');
    }

    public function features()
    {
        return view('features');
    }

    public function testimonial()
    {
        return view('testimonial');
    }

    public function ss()
    {
        return view('ss');
    }

    public function price()
    {
        return view('price');
    }
}
