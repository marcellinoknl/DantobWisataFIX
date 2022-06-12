<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class deskripsiberitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\DeskripsiBeritaModel::insert([
            [
                'judul' => 'Berita Wisata Di Danau Toba',
                'deskripsi' => 'Berita Wisata menyajikan banyak informasi teraktual dan terpercaya'
            ]
            
        ]);
    }
}
