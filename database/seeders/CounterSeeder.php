<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CounterSeeder extends Seeder
{
    public function run()
    {
        \App\Models\counter::insert([
            [
                'views' => '0'
                
            ]

        ]);
    }
}
