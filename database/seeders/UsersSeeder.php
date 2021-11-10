<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'first_name' => 'test',
                'last_name' => 'man',
                'email' => 'testman@gmail.com',
                'tel' => '0964096784',
                'line_user_id' => 'U08f2e0895b23efaf64acaeb60f96ef37',
                'password' => bcrypt('123456'),
                'role' => 1, 'role' => 1,

            ]


        ]);
    }
}
