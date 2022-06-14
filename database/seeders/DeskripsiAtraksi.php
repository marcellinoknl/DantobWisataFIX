<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeskripsiAtraksi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\DeskripsiAtraksiModel::insert([
            [
                'judul' => 'Atraksi',
                'deskripsi' => ' Beberapa daya tarik yang mungkin bisa kamu dapati selama berkunjungi di Danau Toba'
            ]
            
        ]);
    }
}
