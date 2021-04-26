<?php

namespace Database\Factories;

use App\Models\Artigo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArtigoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Artigo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->name(),
            'descricao' => $this->faker->text(),
            'data' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
