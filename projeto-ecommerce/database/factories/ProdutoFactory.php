<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \Faker\Generator as faker;


class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' =>$this->faker->name(),
             'foto' =>  $this->faker->randomDigit(30),
             'descricao' => $this->faker->name(), 
             'categoria_id' => Categoria, 
             'valor' =>  $this->faker->randomFloat()
        ];
    }
}
