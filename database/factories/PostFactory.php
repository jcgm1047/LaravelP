<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class PostFactory extends Factory
{

    public function definition()
    {
        return [
            
            //'user_id' => 1,
            'user_id' => User::all()->random()->id,
            'title' => $title = $this->faker->sentence(),
            'slug' => str::slug($title),
            'body' => $this->faker->text(2200),

        ];
    }
}
