<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SampulFasilitas extends Seeder
{
    public function run()
    {
        \App\Models\SampulFasilitas::insert([
            [
                'nama_sampul' => 'Homestay',
                'file_foto' => 'homestay.jpg'
            ],
            [
                'nama_sampul' => 'Transportasi',
                'file_foto' => 'transportasi.jpg'
            ],
            [
                'nama_sampul' => 'Rumah Makan',
                'file_foto' => 'rumah_makan.jpg'
            ],
            [
                'nama_sampul' => 'Tempat Ibadah',
                'file_foto' => 'gereja.jpg'
            ]

        ]);
    }
}
