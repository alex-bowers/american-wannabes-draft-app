<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('active');
    }

    /**
     * Show the application.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
    * Show the holding page. Which is needed when a user isn't authenticated.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function showHoldingPage()
    {
        return view('holding');
    }
}
