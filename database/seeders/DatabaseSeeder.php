<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\GameMemberTableSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\MembersTableSeeder;
use Database\Seeders\GamesTableSeeder;
use Database\Seeders\FilamentUserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        MembersTableSeeder::class;
        GamesTableSeeder::class;
        GameMemberTableSeeder::class;
        FilamentUserSeeder::class;

    }
}
