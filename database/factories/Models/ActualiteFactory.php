<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Actualite;
use App\Models\User;

class ActualiteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Actualite::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titre' => $this->faker->word,
            'images' => $this->faker->word,
            'contenu' => $this->faker->text,
            'auteur_id' => User::factory(),
            'date_publication' => $this->faker->dateTime(),
        ];
    }
}
