<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SampulAtraksi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\SampulAtraksi::insert([
            [
                'nama_sampul' => 'Budaya',
                'file_foto' => 'Budaya.jpg'
            ],
            [
                'nama_sampul' => 'Kesenian',
                'file_foto' => 'Kesenian.jpg'
            ],
            [
                'nama_sampul' => 'Kuliner',
                'file_foto' => 'Kuliner.jpeg'
            ],
            [
                'nama_sampul' => 'Flora dan Fauna',
                'file_foto' => 'FloraFauna.jpg'
            ]

        ]);
    }
}