<?php

namespace App\Http\Controllers;

use App\RentalTransaction;
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
        $rents = RentalTransaction::all();
        $rentsCount = $rents->count();
        return view('home',['rents' => $rents , 'rentsCount' => $rentsCount]);
    }
}
