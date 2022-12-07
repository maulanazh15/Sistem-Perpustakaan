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
        $kategori = array("Novel", "Majalah","Kamus","Komik","Manga","Ensiklopedia","Biografi","Naskah","Light Novel");
        $randomInt = random_int(0,count($kategori)-1); 
        return [
            'judul_buku' => fake()->sentence(3),
            'penulis' => fake()->name(),
            'kategori' => $kategori[$randomInt],
            'penerbit' => fake()->sentence(1),
            'tahun_terbit' => fake()->numberBetween(1990, 2022),
            'isbn' => fake()->uuid(),
            'jumlah_buku' => 1,
            'status_buku' => 'tersedia'
        ];
    }
}
