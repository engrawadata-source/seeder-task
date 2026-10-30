<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Book>
 */
class BookFactory extends Factory
{
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->text(maxNbChars:25),
            'description'=>fake()->paragraph(),
            'category_id'=>category::factory(),
            'user_id'=>User::factory()
        ];
    }
}
