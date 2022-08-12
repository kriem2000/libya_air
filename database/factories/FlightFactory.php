<?php

namespace Database\Factories;

use App\Models\Airport;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Planes;
use App\Models\City;
use App\Models\Gate;
use App\Models\Plane;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        do {
        $origin_city = City::all()->random(1)->first();
        $origin_air = Airport::where("city_id", $origin_city->id);
        while($origin_air->count() == 0 ) {
            $origin_city = City::all()->random(1)->first();
            $origin_air = Airport::where("city_id", $origin_city->id);
        }
        $origin_gate = Gate::where('airport_id', $origin_air->first()->id);
        }while($origin_gate->count() == 0);

        do {
        $dastination_city = City::all()->random(1)->first();
        $departure_air = Airport::where("city_id", $dastination_city->id);
        while($departure_air->count() == 0) {
            $dastination_city = City::all()->random(1)->first();
            $departure_air = Airport::where("city_id", $dastination_city->id);
        }
        $departure_gate = Gate::where('airport_id', $departure_air->first()->id);
        }while($departure_gate->count() == 0);

        return [
        "flight_num" => $this->faker->unique()->randomNumber(6),
        "flight_date" => $this->faker->date(),
        "bs_price" => $this->faker->numberBetween(400, 800),
        "ec_price" => $this->faker->numberBetween(100, 250),
        "plane_id" => Plane::all()->random(4)->first()->id,
        "origin_city" => $origin_city->id,
        "origin_air_id" => $origin_air->first()->id,
        "origin_gate_id" => $origin_gate->first()->id,
        "dastination_city" => $dastination_city->id,
        "departure_air_id" => $departure_air->first()->id,
        "departure_gate_id" => $departure_gate->first()->id,
        "flight_img" => $this->faker->imageUrl(),
        ];
    }
}
