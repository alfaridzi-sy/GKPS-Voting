<?php

namespace App\Http\Controllers;

use App\Client;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $client = Client::all();
        $client_limit = Client::latest()->limit(5)->get();
        return view('home', ["clients" => $client, "clients" => $client_limit]);
    }
}
