<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaglineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Tagline::insert([
            [
                'file_foto' => 'bgpa.jpeg',
                'tagline2' => 'Toba Journey',
                'tagline3' => 'Teman Liburan Terbaik Anda'
            ]
        ]);
    }
}
