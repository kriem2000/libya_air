<?php

namespace Database\Factories;

use App\Models\Airport;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gate>
 */
class GateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "gates_num" => $this->faker->numberBetween(1,10),
            "airport_id" => Airport::all()->random(4)->first()->id,
        ];
    }
}
