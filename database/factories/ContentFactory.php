<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'last_name'=>$this->faker->lastName(),
        'first_name'=>$this->faker->firstName(),
        'gender'=>$this->faker->randomElement(['1', '2']),
        'email'=>$this->faker->email,
        'postcode'=>$this->faker->postcode,
        'address'=>$this->faker->address(),
        'building_name'=>$this->faker->company,
        'opinion'=>$this->faker->realText(120)
        ];
    }
}
