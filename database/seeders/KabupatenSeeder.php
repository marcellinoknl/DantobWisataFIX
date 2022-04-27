<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Kabupaten::insert([
            [
                'nama_kab' => 'Samosir',
                'file_foto' => 'samosir.jpeg'
            ],
            [
                'nama_kab' => 'Toba',
                'file_foto' => 'Toba.jpg'
            ],
            [
                'nama_kab' => 'Dairi',
                'file_foto' => 'dairi.jpg'
            ],
            [
                'nama_kab' => 'Simalungun',
                'file_foto' => 'Simalungun.jpg'
            ],
            [
                'nama_kab' => 'Humbang Hasundutan',
                'file_foto' => 'Humbang.jpg'
            ],
            [
                'nama_kab' => 'Pakpak Bharat',
                'file_foto' => 'pakpak.jpg'
            ],
            [
                'nama_kab' => 'Tapanuli Utara',
                'file_foto' => 'taput.jpg'
            ],
            [
                'nama_kab' => 'karo',
                'file_foto' => 'karo.jpg'
            ]
        ]);
    }
}