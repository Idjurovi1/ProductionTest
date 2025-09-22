<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        Car::create(['name' => 'Audi', 'color' => 'Black']);
        Car::create(['name' => 'BMW', 'color' => 'Blue']);
        Car::create(['name' => 'Mercedes', 'color' => 'Silver']);
        Car::create(['name' => 'Volkswagen', 'color' => 'White']);
        Car::create(['name' => 'Fiat', 'color' => 'Red']);
        Car::create(['name' => 'Tesla', 'color' => 'Red']);
    }
}
