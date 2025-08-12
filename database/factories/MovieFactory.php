<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    public function definition(): array
    {
    // protected $fillable = ['name',	'synopsis',	'year',	'category',	'cover_image',	'trailer_link'];

        return [
            'name' => $this->faker->sentence(3),
            'synopsis' => $this->faker->paragraph(),
            'year' => $this->faker->year(),
            'category' => $this->faker->sentence(1),
            'cover_image' => $this->faker->sentence(1),
            'trailer_link' => $this->faker->sentence(1),
        ];
    }
}
