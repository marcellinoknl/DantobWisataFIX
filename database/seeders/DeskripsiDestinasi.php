<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeskripsiDestinasi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\DeskripsiDestinasi::insert([
            [
                'judul' => 'Jelajahi Budaya dan Warisan
                Unik di Danau
                Toba',
                'deskripsi' => ' Memiliki Budaya dan Warisan yang unik menjadikan Danau Toba
                sebagai destinasi yang harus di kunjungi.
                Berbagai macam wisata yang menyatu dengan budaya yang ada membuat kamu tidak akan melukapan keindahan Danau
                Toba.'
            ]
            
        ]);
    }
}