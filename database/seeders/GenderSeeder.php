<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->insert([
            'id' => 1,
            'gender_desc' => 'male'
        ]);

        DB::table('genders')->insert([
            'id' => 2,
            'gender_desc' => 'female'
        ]);

    }
}
