<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{

    protected $model = Comment::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => 'Isaac', //$this->faker->nome,
            'texto' => 'Ola tudo bem' //$this->faker->texto()
        ];
    }
}
