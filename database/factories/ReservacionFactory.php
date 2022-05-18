<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservacion>
 */
class ReservacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' =>User::factory(),
            'habitacion_id'=>$this->faker->numberBetween(1, 3),
            'dias' =>$this->faker->numberBetween(1, 100),
            'costo' =>$this->faker->numberBetween(1, 2000),
            'inicia' =>$this->faker->dateTimeBetween('-1 week', '+1 week'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
