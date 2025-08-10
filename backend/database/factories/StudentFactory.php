<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
   public function definition()
{
    return [
        'khmer_name' => $this->faker->word(),
        'latin_name' => $this->faker->name(),
        'gender'     => $this->faker->randomElement(['male', 'female', 'other']),
        'dob'        => $this->faker->date('Y-m-d', '2007-12-31'),
        'address'    => $this->faker->address(),
        'tel'        => $this->faker->numerify('012-###-####'),
    ];
}

}
