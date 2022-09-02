<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plane>
 */
class PlaneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "plane_num" => $this->faker->unique()->randomNumber(6),
            "col_num_bs" => 2,
            "col_num_ec" => 3,
            "seat_num_bs" => 40,
            "seat_num_ec" => 90,
            ];
    }
}
