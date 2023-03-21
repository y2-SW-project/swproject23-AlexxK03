<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'time' =>$this->faker->time($format = 'H:i:s', $max ='now'),
            'date' =>$this->faker->date($format = 'Y-m-d',$max ='now'),
            'airport'=>$this->faker->word,
            'seat_number'=>$this->faker->numberBetween($int1=1,$int2=35),
            'flight_number'=>$this->faker->numberBetween($int1=1500,$int2=9500),
        ];
    }
}
