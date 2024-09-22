<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'id' => '1',
            'role_name' => 'Customer'
        ]);

        Role::create([
            'id' => '2',
            'role_name' => 'Admin'
        ]);
    }
}
