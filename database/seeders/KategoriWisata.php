<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KategoriWisata extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Kategori_Wisata::insert([
            [
                'nama_kategori' => 'Wisata Alam'
                
            ],
          [
            'nama_kategori' => 'Wisata Budaya'
            ],
            [
                'nama_kategori' => 'Wisata Buatan'
            ]
        ]);
    }
}
