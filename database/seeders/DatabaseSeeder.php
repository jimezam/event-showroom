<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Section;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Section::factory(5)->create();

        User::factory()->create([
            'name' => 'Jorge I. Meza',
            'email' => 'jimezam@autonoma.edu.co',
        ]);
    }
}
