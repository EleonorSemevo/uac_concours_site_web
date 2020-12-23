<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Astuce_truc;
use App\Models\User;

class AstuceTrucFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AstuceTruc::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titre' => $this->faker->word,
            'contenu' => $this->faker->text,
            'date_publication' => $this->faker->dateTime(),
            'auteur' => $this->faker->word,
            'user_id' => User::factory(),
        ];
    }
}
