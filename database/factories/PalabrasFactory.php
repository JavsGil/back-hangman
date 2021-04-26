<?php

namespace Database\Factories;

use App\Models\Categorias;
use App\Models\Palabras;
use Illuminate\Database\Eloquent\Factories\Factory;

class PalabrasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Palabras::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        return [
            'id_categoria'=>rand(1,3),
            'name'=> $this->faker->word(5)
        ];
    }
}
