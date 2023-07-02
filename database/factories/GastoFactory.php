<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Categoria;
use \App\Models\Pago;
use \App\Models\Perfil;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gasto>
 */

class GastoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'detalle' => fake()->sentence(),
            'importe' =>fake()->randomFloat(2, 1, 100000),
            'fecha' => fake()->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
            'fijo' => fake()->numberBetween(0, 100),

            
            'categoria_id' => function(){
                return Categoria::inRandomOrder()->pluck('id')->first();
            },
            'pago_id' => function(){
                return Pago::inRandomOrder()->pluck('id')->first();
            },
            'perfil_id' => function(){
                return Perfil::inRandomOrder()->pluck('id')->first();
            }
        ];
    }
}
    