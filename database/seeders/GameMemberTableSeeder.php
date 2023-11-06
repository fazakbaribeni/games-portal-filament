<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameMemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('game_member')->insert([
            [
                'id' => 1,
                'score' => 98,
                'member_id' => 1,
                'game_id' => 1,
                'is_winner' => 1,
                'created_at' => '2023-11-02 20:11:06',
                'updated_at' => '2023-11-03 12:38:31',
            ],
            [
                'id' => 5,
                'score' => 90,
                'member_id' => 9,
                'game_id' => 1,
                'is_winner' => 0,
                'created_at' => '2023-11-03 10:24:59',
                'updated_at' => '2023-11-03 12:38:31',
            ],
            [
                'id' => 6,
                'score' => 40,
                'member_id' => 9,
                'game_id' => 2,
                'is_winner' => 1,
                'created_at' => '2023-11-03 10:24:59',
                'updated_at' => '2023-11-03 11:40:54',
            ],
            [
                'id' => 7,
                'score' => 30,
                'member_id' => 2,
                'game_id' => 2,
                'is_winner' => 0,
                'created_at' => '2023-11-03 10:24:59',
                'updated_at' => '2023-11-03 11:40:54',
            ],
            [
                'id' => 8,
                'score' => 12,
                'member_id' => 1,
                'game_id' => 3,
                'is_winner' => 0,
                'created_at' => '2023-11-03 11:41:28',
                'updated_at' => '2023-11-03 11:41:28',
            ],
            [
                'id' => 9,
                'score' => 33,
                'member_id' => 2,
                'game_id' => 3,
                'is_winner' => 1,
                'created_at' => '2023-11-03 11:41:28',
                'updated_at' => '2023-11-03 11:41:28',
            ],
            [
                'id' => 10,
                'score' => 44,
                'member_id' => 7,
                'game_id' => 4,
                'is_winner' => 1,
                'created_at' => '2023-11-03 11:42:08',
                'updated_at' => '2023-11-03 11:42:08',
            ],
            [
                'id' => 11,
                'score' => 23,
                'member_id' => 10,
                'game_id' => 4,
                'is_winner' => 0,
                'created_at' => '2023-11-03 11:42:08',
                'updated_at' => '2023-11-03 11:42:08',
            ],
            [
                'id' => 12,
                'score' => 44,
                'member_id' => 7,
                'game_id' => 5,
                'is_winner' => 1,
                'created_at' => '2023-11-03 11:42:08',
                'updated_at' => '2023-11-03 11:42:08',
            ],
            [
                'id' => 13,
                'score' => 23,
                'member_id' => 10,
                'game_id' => 5,
                'is_winner' => 0,
                'created_at' => '2023-11-03 11:42:08',
                'updated_at' => '2023-11-03 11:42:08',
            ],
            [
                'id' => 14,
                'score' => 23,
                'member_id' => 10,
                'game_id' => 6,
                'is_winner' => 1,
                'created_at' => '2023-11-03 11:42:08',
                'updated_at' => '2023-11-03 11:42:08',
            ],
            [
                'id' => 15,
                'score' => 20,
                'member_id' => 10,
                'game_id' => 6,
                'is_winner' => 0,
                'created_at' => '2023-11-03 11:42:08',
                'updated_at' => '2023-11-03 11:42:08',
            ],
            [
                'id' => 16,
                'score' => 24,
                'member_id' => 10,
                'game_id' => 7,
                'is_winner' => 1,
                'created_at' => '2023-11-03 11:42:08',
                'updated_at' => '2023-11-03 11:42:08',
            ],
            [
                'id' => 17,
                'score' => 20,
                'member_id' => 10,
                'game_id' => 7,
                'is_winner' => 0,
                'created_at' => '2023-11-03 11:42:08',
                'updated_at' => '2023-11-03 11:42:08',
            ],
            [
                'id' => 18,
                'score' => 20,
                'member_id' => 10,
                'game_id' => 8,
                'is_winner' => 0,
                'created_at' => '2023-11-03 11:42:08',
                'updated_at' => '2023-11-03 11:42:08',
            ],
            [
                'id' => 19,
                'score' => 22,
                'member_id' => 10,
                'game_id' => 8,
                'is_winner' => 1,
                'created_at' => '2023-11-03 11:42:08',
                'updated_at' => '2023-11-03 11:42:08',
            ],
            [
                'id' => 20,
                'score' => 22,
                'member_id' => 10,
                'game_id' => 9,
                'is_winner' => 1,
                'created_at' => '2023-11-03 11:42:08',
                'updated_at' => '2023-11-03 11:42:08',
            ],
            [
                'id' => 21,
                'score' => 20,
                'member_id' => 10,
                'game_id' => 9,
                'is_winner' => 1,
                'created_at' => '2023-11-03 11:42:08',
                'updated_at' => '2023-11-03 11:42:08',
            ],
            [
                'id' => 22,
                'score' => 20,
                'member_id' => 10,
                'game_id' => 10,
                'is_winner' => 1,
                'created_at' => '2023-11-03 11:42:08',
                'updated_at' => '2023-11-03 11:42:08',
            ],
            [
                'id' => 23,
                'score' => 19,
                'member_id' => 10,
                'game_id' => 10,
                'is_winner' => 0,
                'created_at' => '2023-11-03 11:42:08',
                'updated_at' => '2023-11-03 11:42:08',
            ],
        ]);
    }
}
