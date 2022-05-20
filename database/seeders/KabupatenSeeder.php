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
                'file_foto' => 'Tobabg.jpg'
            ],
            [
                'nama_kab' => 'Dairi',
                'file_foto' => 'dairibg.jpg'
            ],
            [
                'nama_kab' => 'Simalungun',
                'file_foto' => 'Simalungunbg.jpg'
            ],
            [
                'nama_kab' => 'Humbang Hasundutan',
                'file_foto' => 'Humbangbg.jpg'
            ],
            [
                'nama_kab' => 'Pakpak Bharat',
                'file_foto' => 'pakpakbg.jpg'
            ],
            [
                'nama_kab' => 'Tapanuli Utara',
                'file_foto' => 'taputbg.jpg'
            ],
            [
                'nama_kab' => 'Karo',
                'file_foto' => 'karobg.jpg'
            ]
            
        ]);
    }
}