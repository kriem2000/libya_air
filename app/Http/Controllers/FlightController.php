<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    public function index() {
        $flights = Flight::with(['city'])->get();
        return response()->json([
            'flights' => $flights,
        ], 200);
    }
}
