<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeskripsiGaleri extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\DeskripsiGaleri::insert([
            [
                'judul' => 'Galeri',
                'deskripsi' => '  Beberapa Fasilitas yang dapat membantu anda selama mengunjungi Danau Toba'
            ]
            
        ]);
    }
}