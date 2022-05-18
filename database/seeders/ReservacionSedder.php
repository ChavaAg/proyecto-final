<?php

namespace Database\Seeders;

use App\Models\Reservacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservacionSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reservacion::factory()->times(15)->create();
    }
}
