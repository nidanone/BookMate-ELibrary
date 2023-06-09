<?php

namespace Database\Factories;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\reviewrating>
 */
class ReviewratingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create();

        $book_id = DB::table('books')->pluck('id')->toArray();
        return [
            'book_id' => $faker->numberBetween(1,20),
            'rating' => $faker->numberBetween(1,5),
            'review' => $faker->paragraph(),
            'jumlah' => $faker->numberBetween(1,20),
        ];
    }
}
