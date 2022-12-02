<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul_buku' => fake()->sentence(3),
            'penulis' => fake()->name(),
            'kategori' => fake()->sentence(1),
            'penerbit' => fake()->sentence(1),
            'tahun_terbit' => fake()->numberBetween(1990, 2022),
            'isbn' => fake()->uuid(),
            'jumlah_buku' => fake()->randomDigit(),
            'status_buku' => 'tersedia'
        ];
    }
}
