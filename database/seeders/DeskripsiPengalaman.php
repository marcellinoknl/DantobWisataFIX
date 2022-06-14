<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeskripsiPengalaman extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\DeskripPengalaman::insert([
            [
                'judul' => '
                Cari Paket Wisata yang ingin Anda Tinjau
                ',
                'deskripsi' => '  Beberapa Objek Wisata di Danau Toba mempunyai paket wisata yang beragam.'
            ]
            
        ]);
    }
}