<?php

namespace Database\Seeders;

use App\Models\PlaneClase;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class classSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PlaneClase::create(
            [
                'class_name' => 'Economy',
            ]
        );
        PlaneClase::create(
            [
                'class_name' => 'Business',
            ]
        );
    }
}
