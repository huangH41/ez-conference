<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RentalTransaction;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class RentalTransactionController extends Controller
{
    public function index() {
        $user = Auth::User();
        $transactions = RentalTransaction::where("user_id", $user->id)->get();
        return response()->json($transactions);
    }

    public function getAllTransaction() {

    }

    public function getTransactionbyUserId() {

    }

    public function calendar() {
        $id = Auth::id();
        $rents = RentalTransaction::all()->where('user_id','=',$id);
        $date = $rents->pluck('date');
        return response()->json(array_unique($date->toArray()));
    }
}
