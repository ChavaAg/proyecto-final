<?php

namespace Database\Seeders;

use App\Models\Servicio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Servicio::create(['servicio'=>'Aseo']);
        Servicio::create(['servicio'=>'Despertador']);
        Servicio::create(['servicio'=>'Parking']);
        Servicio::create(['servicio'=>'Wifi']);
        Servicio::create(['servicio'=>'Lavanderia']);
    }
}
