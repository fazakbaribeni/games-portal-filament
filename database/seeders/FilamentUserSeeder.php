<?php

namespace Database\Seeders;

use Couchbase\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Filament\Facades\Filament;

class FilamentUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Filament User',
            'email' => 'filament@example.com',
            'password' => bcrypt('password'), // Change 'password' to your desired password
        ]);

        // Assign the user the role of a Filament administrator
        Filament::user(User::where('email', 'filament@example.com')->first())
            ->attachRole('administrator');

    }
}
