<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RentalTransaction;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class RentalTransactionController extends Controller
{
    public function index() {
        
    }
    

    public function getAllTransaction() {

    }

    public function getTransactionbyUserId(Request $request) {
        $search = $request->get('search');
        $user = Auth::User();
        $transactions = RentalTransaction::orderBy('created_at', 'DESC')->where("user_id", $user->id)->paginate(5);
        return view('transaction', ['transactions' => $transactions]);
    }

    public function calendar() {
        $id = Auth::id();
        $rents = RentalTransaction::all()->where('user_id','=',$id);
        $date = $rents->pluck('date');
        return response()->json(array_unique($date->toArray()));
    }
}