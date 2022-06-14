<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeskripsiDewi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\DewiDeskripsi::insert([
            [
                'judul' => 'Jelajahi Desa Wisata yang ada di daerah Danau Toba',
                'deskripsi' => ' Berbagai macam Desa Wisata yang ada di daerah sekitaran Danau Toba serta budaya yang ada membuat kamu tidak akan melukapan keindahan Danau Toba.'
            ]
            
        ]);
    }
}
