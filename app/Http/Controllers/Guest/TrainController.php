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
        $trains = Train::where('date', '>=', $today)
            ->orderBy('date', 'asc')
            ->orderBy('departure_time', 'asc')
            ->get();
        dd($trains);
        // return view('home');
    }
}
