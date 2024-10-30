<?php

namespace Database\Seeders;

use App\Models\Talaba;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        for ($i = 1; $i < 1001; $i++) {
            Talaba::create([
                'name' => 'Talaba ' . $i,
                'guruh_id' => rand(1, 32),
                'tel' => rand(1234, 99999),
                'manzil_id' => rand(1, 10),
            ]);
        }
    }
}
