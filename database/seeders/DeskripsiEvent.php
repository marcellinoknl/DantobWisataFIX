<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeskripsiEvent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\DeskripsiEventModel::insert([
            [
                'judul' => 'Event',
                'deskripsi' => '  Beberapa Event yang mungkin bisa kamu kunjungi selama berwisata di Danau Toba'
            ]
            
        ]);
    }
}