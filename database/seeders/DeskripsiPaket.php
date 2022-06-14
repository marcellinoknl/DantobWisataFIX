<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeskripsiPaket extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\DeskripsiPaket::insert([
            [
                'judul' => 'Paket Wisata  ',
                'deskripsi' => ' Tinjau Paket Wisata yang Tersedia.'
            ]
            
        ]);
    }
}