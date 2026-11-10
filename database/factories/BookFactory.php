<?php

namespace Database\Factories;

use App\Models\Book;
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
            'judul' => fake()->sentence(3),
            'penulis' => fake()->name(),
            'tahun_terbit' => fake()->year(),
            'kategori' => fake()->randomElement(['Fiksi', 'Non-Fiksi', 'Komik', 'Sejarah']),
            'stok' => fake()->numberBetween(1, 50),

        ];
    }
}
