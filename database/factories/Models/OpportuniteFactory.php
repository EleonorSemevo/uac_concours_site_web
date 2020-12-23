<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Domaine;
use App\Models\Opportunite;
use App\Models\User;

class OpportuniteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Opportunite::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'domaine_id' => Domaine::factory(),
            'type' => $this->faker->word,
            'titre' => $this->faker->word,
            'contenu' => $this->faker->text,
            'date_expiration' => $this->faker->dateTime(),
            'date_publication' => $this->faker->dateTime(),
            'user_id' => User::factory(),
        ];
    }
}
