<?php

namespace Database\Factories;

use App\Models\InventarioItems;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class InventarioItemsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InventarioItems::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_name = $this->faker->unique()->words($nb=2,$asText=true);
        $slug = Str::slug($product_name);
        return [
            'codigo' => str_pad($this->faker->unique()->numberBetween(1,100), 6, "0", STR_PAD_LEFT),
            'slug' => $slug,
            'descripcion' => $product_name,
            'referencia' => '',
            'referencia2' => '',
            'grupo1' => $this->faker->numberBetween(1,23),
            'grupo2' => $this->faker->numberBetween(1,83),
            'grupo3' => '1',
            'clase_iva' => 'S',
            'porcentaje_iva' => $this->faker->numberBetween(0,19),
            'estado' => '1',
            'fabricante' => str_pad($this->faker->numberBetween(100,1000), 4, "0", STR_PAD_LEFT),
            'linea_fabricante' => '',
            'temperatura' => '0',
            'controlado' => '',
            'cantidad_empaque' => $this->faker->numberBetween(1,300),
            'ubicacion' => '',
            'formulacion' => '',
            'grupo_farmacologico' => '',
            'invima' => '',
            'fecha_invima' => '1900-01-01',
            'forma_farmaceutica' => '',
            'presentacion' => '',
            'principio_activo' => '',
            'programa' => '',
            'codigo_atc' => '',
            'codigo_cum' => '',
            'indicaciones' => '',
            'oferta' => 'NO',
            'featured' => false,
        ];
    }
}
