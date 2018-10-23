<?php

namespace App\Http\Controllers;

use App\Service;
use App\Slide;
use View;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        $slides = Slide::all();
        return View::make('pages.index')
            ->with('services', $services)
            ->with('slides', $slides);
    }

    public function index_admin()
    {
        return View::make('pages.index_admin');
    }

    public function contact()
    {
        $services = Service::all();
        return View::make('pages.contact')
            ->with('services', $services);
    }

    public function estimate()
    {
        $services = Service::all();
        return View::make('pages.estimate')
            ->with('services', $services);
    }
}
