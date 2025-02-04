<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\WeightLog;
use App\Models\User;
use Faker\Factory as Faker;

class WeightLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = WeightLog::class;

    public function definition()
    {
        $user = User::first();
        $faker = Faker::create('ja_JP');

        return [
            'user_id' => $user->id,
            'date' => $this->faker->date(),
            'weight' => $this->faker->randomFloat(1, 30, 200),
            'calories' => $this->faker->optional()->numberBetween(500, 3000),
            'exercise_time' => sprintf('%02d:%02d', rand(0, 23), rand(0, 59)),
            'exercise_content' => $this->faker->optional()->realText(120),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
