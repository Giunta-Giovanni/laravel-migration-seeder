<?php

namespace App\Http\Controllers\Guest;


use Carbon\Carbon;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        //settiamo una variabile con la data odierna 
        $today = Carbon::today();
        // dd($today);
        $trains = Train::where('date', '>=', '2025-05-15') //for test use 2025-05-16 else use $today
            ->orderBy('date', 'asc')
            ->orderBy('departure_time', 'asc')
            ->get();
        return view('departureTrains', compact('trains'));
    }
}
