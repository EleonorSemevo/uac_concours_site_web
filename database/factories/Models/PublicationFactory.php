<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Publication;
use App\Models\User;

class PublicationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Publication::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titre' => $this->faker->word,
            'image' => $this->faker->word,
            'date_publication' => $this->faker->dateTime(),
            'contenu' => $this->faker->text,
            'auteur_id' => User::factory(),
            'like' => $this->faker->randomNumber(),
        ];
    }
}
