<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'id' => 1,
            'item_name' => 'Bayam',
            'item_desc' => 'Sayuran Hijau',
            'price' => 'Rp. 5000'
        ]);

        DB::table('items')->insert([
            'id' => 2,
            'item_name' => 'Sawi',
            'item_desc' => 'Sayuran Hijau',
            'price' => 'Rp. 5000'
        ]);

        DB::table('items')->insert([
            'id' => 3,
            'item_name' => 'Kol',
            'item_desc' => 'Sayuran Hijau',
            'price' => 'Rp. 5000'
        ]);
    }
}
