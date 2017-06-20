<?php

use Illuminate\Database\Seeder;
use IMTPMD\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'number' => 's1094220',
            ],
            [
                'number' => 's1097398',
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
