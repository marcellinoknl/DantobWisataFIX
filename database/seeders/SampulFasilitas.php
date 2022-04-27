<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SampulFasilitas extends Seeder
{
    public function run()
    {
        \App\Models\SampulFasilitas::insert([
            [
                'nama_sampul' => 'Samosir',
                'file_foto' => 'samosir.jpeg'
            ]
            // [
            //     'nama_kab' => 'Toba',
            //     'file_foto' => 'Toba.jpg'
            // ],
            // [
            //     'nama_kab' => 'Dairi',
            //     'file_foto' => 'dairi.jpg'
            // ],
            // [
            //     'nama_kab' => 'Simalungun',
            //     'file_foto' => 'Simalungun.jpg'
            // ],
            // [
            //     'nama_kab' => 'Humbang Hasundutan',
            //     'file_foto' => 'Humbang.jpg'
            // ],
            // [
            //     'nama_kab' => 'Pakpak Bharat',
            //     'file_foto' => 'pakpak.jpg'
            // ],
            // [
            //     'nama_kab' => 'Tapanuli Utara',
            //     'file_foto' => 'taput.jpg'
            // ],
            // [
            //     'nama_kab' => 'karo',
            //     'file_foto' => 'karo.jpg'
            // ],
            // [
            //     'nama_kab' => 'nias',
            //     'file_foto' => 'karnaval.jpg'
            // ]
        ]);
    }
}
