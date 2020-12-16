<?php

namespace App\Http\Controllers;

use App\RentalTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $rents = RentalTransaction::all()->where('user_id','=',Auth::id());
        $rentsCount = $rents->count();
        return view('home',['rents' => $rents , 'rentsCount' => $rentsCount]);
    }

    public function calendar() {
        $id = Auth::id();
        $rents = RentalTransaction::all()->where('user_id','=',$id);
        $date = $rents->pluck('date');
        return response()->json($date->toArray());
    }
}
