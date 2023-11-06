<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('games')->insert([
            [
                'id' => 1,
                'winner_id' => 1,
                'name' => 'Test member1',
                'created_at' => '2023-11-02 19:22:46',
                'updated_at' => '2023-11-03 12:38:31',
            ],
            [
                'id' => 2,
                'winner_id' => 9,
                'name' => 'Test member2',
                'created_at' => '2023-11-02 19:22:46',
                'updated_at' => '2023-11-03 10:24:59',
            ],
            [
                'id' => 3,
                'winner_id' => 2,
                'name' => 'Test member3',
                'created_at' => '2023-11-02 19:22:46',
                'updated_at' => '2023-11-03 11:41:28',
            ],
            [
                'id' => 4,
                'winner_id' => 7,
                'name' => 'Test member 4',
                'created_at' => '2023-11-02 19:22:46',
                'updated_at' => '2023-11-03 11:42:08',
            ],
            [
                'id' => 5,
                'winner_id' => 7,
                'name' => 'Test member 5',
                'created_at' => '2023-11-02 19:22:46',
                'updated_at' => '2023-11-03 10:24:59',
            ],
            [
                'id' => 6,
                'winner_id' => 10,
                'name' => 'Test member 6',
                'created_at' => '2023-11-02 19:22:46',
                'updated_at' => '2023-11-03 10:24:59',
            ],
            [
                'id' => 7,
                'winner_id' => 10,
                'name' => 'Test member7',
                'created_at' => '2023-11-02 19:22:46',
                'updated_at' => '2023-11-03 10:24:59',
            ],
            [
                'id' => 8,
                'winner_id' => 10,
                'name' => 'Test member 8',
                'created_at' => '2023-11-02 19:22:46',
                'updated_at' => '2023-11-03 10:24:59',
            ],
            [
                'id' => 9,
                'winner_id' => 10,
                'name' => 'Test member 9',
                'created_at' => '2023-11-02 19:22:46',
                'updated_at' => '2023-11-03 10:24:59',
            ],
            [
                'id' => 10,
                'winner_id' => 10,
                'name' => 'Test member10',
                'created_at' => '2023-11-02 19:22:46',
                'updated_at' => '2023-11-03 10:24:59',
            ],
            [
                'id' => 11,
                'winner_id' => 10,
                'name' => 'Test member 11',
                'created_at' => '2023-11-02 19:22:46',
                'updated_at' => '2023-11-03 10:24:59',
            ],
        ]);

    }
}
