<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\PaymentStatus;
use App\Models\PlaneClase;
use App\Models\PlaneSeat;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\User;

class ReservationController extends Controller
{
    public function create(Request $request) {
        $user = User::find($request->user_id);
        if ($user->reservation->where('flight_id', $request->flight_id)->count() == 0) {
            //getting the flight class id and seat_id from db
        $flight_class_id = PlaneClase::where('class_name', $request->class_name)->first()->id;
        $seat_id = PlaneSeat::whereDoesntHave('reservation')
                    ->where('class_id', $flight_class_id)
                    ->first()->id;

        // create the reservation
        $reservation = Reservation::create([
            'booking_date' => date('now'),
            'canceled' => false,
            'pre_booking' => false,
            'flight_id' => $request->flight_id,
            'user_id' => $request->user_id,
            'status_id' => PaymentStatus::where('status_name' , 'payed')->first()->id,
            'class_id' => $flight_class_id,
            'seat_id' => $seat_id,
        ]);

        // return the response
        return response()->json([
            'flight_num' => Flight::find($request->flight_id)->flight_num,
            'reservation' => $reservation,
            'seat_num' => $reservation->seat->seat_num,
            'class_name' => $reservation->class->class_name,
            'success' => true,
            'message' => 'the flight has been reserved successfully',
          ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'you already has reservaion to this flight.',
              ], 401);
        }
    }
}
