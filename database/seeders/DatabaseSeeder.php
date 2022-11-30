<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Buku;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $jumlah_peminjam = 20;
        for ($i = 0; $i < $jumlah_peminjam; $i++) {
            User::factory()->create([
                'name' => fake()->name(),
                'username' => fake()->userName(),
                'email' => fake()->unique()->safeEmail(),
                'email_verified_at' => now(),
                'status' => 'peminjam',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ]);
        }
        $jumlah_pustakawan = 10;
        for ($i = 0; $i < $jumlah_pustakawan; $i++) {
            User::factory()->create([
                'name' => fake()->name(),
                'username' => fake()->userName(),
                'email' => fake()->unique()->safeEmail(),
                'email_verified_at' => now(),
                'status' => 'pustakawan',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ]);
        }

        Buku::factory(30)->create();
    }
}
