<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GameMember;
use Illuminate\Database\Eloquent\Factories\Factory; // Add this import statement


class GameMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GameMember::factory()->count(10)->create(); // Use factory() method directly

    }
}
