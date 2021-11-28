<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class profiler_langFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $profilerIDs = DB::table('profiler_info')->pluck('id')->toArray();

        return [
            'language' => $this->faker->languageCode,
            'language_level' => $this->faker->randomNumber(5),
            'profiler_info_id' => $this->faker->randomElement($profilerIDs),
        ];
    }
}
