<?php

namespace App\Http\Controllers;

use App\Zoom;
use Illuminate\Http\Request;
use App\RentalTransaction;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Type\Integer;

class RentalTransactionController extends Controller
{
    public function index() {
        $zooms = Zoom::all();
        return view('create-transaction',['zooms' => $zooms]);
    }

    public function create(Request $request) {
        $request->validate([
           'rentalDate' => 'required|date',
           'rentalStartTime' => 'required',
           'rentalDuration' => 'required|numeric|min:1'
        ]);
        $zoom = ZoomController::getZoomByParticipant($request->participantLimit);
        $transaction = new RentalTransaction([
           'zoom_id' => $zoom->id,
            'user_id' => Auth::id(),
            'date' => $request->rentalDate,
            'time' => $request->rentalStartTime,
            'duration' => $request->rentalDuration
        ]);
        $transaction->save();
        return redirect('/home')->with('success','You have successfully created a rental schedule');
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
