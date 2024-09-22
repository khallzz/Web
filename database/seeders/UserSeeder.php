<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id' => 1,
            'gender_id' => 1,
            'first_name' => 'cust',
            'last_name' => '1',
            'email' => 'cust@gmail.com',
            'display_picture_link' => '_',
            'password' => bcrypt('cust')
        ]);

        User::create([
            'role_id' => 2,
            'gender_id' => 1,
            'first_name' => 'adm',
            'last_name' => '1',
            'email' => 'adm@gmail.com',
            'display_picture_link' => '_',
            'password' => bcrypt('adm')
        ]);
    }
}
