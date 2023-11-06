<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('members')->insert([
            [
                'id' => 1,
                'name' => 'Member 1',
                'join_date_time' => '2023-11-02 17:43:09',
                'password' => 'Test123!',
                'email' => 'member1@gmail.com',
                'phone_number' => '456456546',
                'created_at' => '2023-11-02 17:43:09',
                'updated_at' => '2023-11-02 20:55:28',
            ],
            [
                'id' => 2,
                'name' => 'Member 2',
                'join_date_time' => '2023-11-02 19:21:04',
                'password' => 'Test123!',
                'email' => 'member2@gmail.com',
                'phone_number' => null,
                'created_at' => '2023-11-02 19:21:04',
                'updated_at' => '2023-11-02 19:21:04',
            ],
            [
                'id' => 7,
                'name' => 'Member 3',
                'join_date_time' => '2023-11-02 19:21:04',
                'password' => 'Test123!',
                'email' => 'member3@gmail.com',
                'phone_number' => null,
                'created_at' => '2023-11-02 19:21:04',
                'updated_at' => '2023-11-02 19:21:04',
            ],
            [
                'id' => 9,
                'name' => 'Member 4',
                'join_date_time' => '2023-11-02 19:21:04',
                'password' => 'Test123!',
                'email' => 'member4@gmail.com',
                'phone_number' => null,
                'created_at' => '2023-11-02 19:21:04',
                'updated_at' => '2023-11-02 19:21:04',
            ],
            [
                'id' => 10,
                'name' => 'Member 5',
                'join_date_time' => '2023-11-02 19:21:04',
                'password' => 'Test123!',
                'email' => 'member5@gmail.com',
                'phone_number' => null,
                'created_at' => '2023-11-02 19:21:04',
                'updated_at' => '2023-11-02 19:21:04',
            ],
        ]);
    }
}
