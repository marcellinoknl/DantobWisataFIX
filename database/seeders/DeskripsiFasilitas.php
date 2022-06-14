<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeskripsiFasilitas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\DeskripsiFasiltas::insert([
            [
                'judul' => 'Fasilitas',
                'deskripsi' => '  Beberapa Fasilitas yang dapat membantu anda selama mengunjungi Danau Toba'
            ]
            
        ]);
    }
}
