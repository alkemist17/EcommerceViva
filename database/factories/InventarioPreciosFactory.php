<?php

namespace Database\Factories;

use App\Models\InventarioPrecios;
use Illuminate\Database\Eloquent\Factories\Factory;

class InventarioPreciosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InventarioPrecios::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo' => str_pad($this->faker->unique()->numberBetween(1,200), 6, "0", STR_PAD_LEFT),
            'tipo_precio' => '01',
            'valor' => $this->faker->numberBetween(10000,100000)
        ];
    }
}
