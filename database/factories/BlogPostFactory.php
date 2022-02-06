<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       
        return [
             'title' => $this->faker->sentence,//generates a fake sentence
        'body' => $this->faker->paragraph(30), //generates a30 fake paragrph
        'user_id' => User::factory(), //generates a user and extract id
            //
        ];
    }
}
