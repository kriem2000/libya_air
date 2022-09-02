<?php

namespace Database\Seeders;

use App\Models\Plane;
use App\Models\PlaneClase;
use App\Models\PlaneSeat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class seatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plane1 = Plane::find(1);
        $econimic = PlaneClase::where('class_name', 'Economy')->first();
        $business = PlaneClase::where('class_name', 'Business')->first();
        // business seats
        for($i = 1; $i< 2; $i++) {
            for($j = 0; $j < 10; $j++) {
                PlaneSeat::create([
                    'seat_num' => 'A'.'-'.$i.'-'.$j,
                    'plane_id' => $plane1->id,
                    'class_id' =>  $business->id,
                ]);
                PlaneSeat::create([
                    'seat_num' => 'B'.'-'.$i.'-'.$j,
                    'plane_id' => $plane1->id,
                    'class_id' =>  $business->id,
                ]);
            }
        }

        // economic seats
        for($i = 1; $i < 3; $i++) {
            for($j = 0; $j < 10 ; $j++) {
                PlaneSeat::create([
                    'seat_num' => 'A'.'-'.$i.'-'.$j,
                    'plane_id' => $plane1->id,
                    'class_id' =>  $econimic->id,
                ]);
                PlaneSeat::create([
                    'seat_num' => 'B'.'-'.$i.'-'.$j,
                    'plane_id' => $plane1->id,
                    'class_id' =>  $econimic->id,
                ]);
                PlaneSeat::create([
                    'seat_num' => 'C'.'-'.$i.'-'.$j,
                    'plane_id' => $plane1->id,
                    'class_id' =>  $econimic->id,
                ]);
            }
        }
    }
}
