<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    public function index() {
        $flights = Flight::with(['city'])->get()->flatten();
        return response()->json([
            'flights' => $flights,
        ], 200,
        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8']
    );
    }
}
