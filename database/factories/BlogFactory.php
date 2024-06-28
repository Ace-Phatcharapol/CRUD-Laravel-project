<?php

namespace Database\Factories;
use Illuminate\Support\Facades\Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'content'=>$this->faker->text(),
            'status'=>rand(0,1)
        ];
    }
}
