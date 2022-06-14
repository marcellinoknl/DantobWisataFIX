<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\LogoWeb::insert([
            [
                'caption' => 'Danau Toba',
                'file_foto' => 'galeribul2.jpg'
            ]
        ]);
    }
}
