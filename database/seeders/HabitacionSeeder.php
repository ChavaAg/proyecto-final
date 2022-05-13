<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HabitacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('habitacions')->insert([
            'tipo' => 'Sencilla',
            'costo' => '500',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('habitacions')->insert([
            'tipo' => 'Ejecutiva',
            'costo' => '1000',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('habitacions')->insert([
            'tipo' => 'Lujo',
            'costo' => '2500',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
