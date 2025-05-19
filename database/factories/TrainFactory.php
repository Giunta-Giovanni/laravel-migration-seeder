<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {
        $isOnTime = $this->faker->boolean();

        return [
            'date' => Carbon::today()->toDateString(),
            'company' => $this->faker->company(),
            'train_type' => 'Regionale',
            'departure_station' => $this->faker->city(),
            'arrival_station' => $this->faker->city(),
            'departure_time' => $this->faker->time(),
            'arrival_time' => $this->faker->time(),
            'train_number' => $this->faker->bothify('??###'),
            'platform' => $this->faker->numberBetween(0, 20),
            'is_on_time' => $isOnTime,
            'delay_minutes' => $isOnTime ? 0 : $this->faker->numberBetween(5, 120),
            'is_cancelled' => $this->faker->boolean(),
        ];
    }
}
