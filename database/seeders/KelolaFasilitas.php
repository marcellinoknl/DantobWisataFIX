<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KelolaFasilitas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Fasilitas::insert([
            [ 
                'id_fasilitas' => '1',
                'nama_fasilitas' => 'HKBP Balige',               
                'deskripsi' => 'Gereja HKBP Balige diresmikan pada tahun 1881 dan masih tetap kokoh dengan konstruksi kayunya. Pada tahun 1923, HKBP Balige sempat direnovasi, namun sebatas pada penggantian lantai serta kursi-kursinya, sedangkan konstruksi utamanya tetap. ',
                'lokasi' => 'Jl. Gereja, Lumban Dolok, Haume Bange, Balige, Kab. Toba, Sumatera Utara.',
                'file_foto' => 'hkbpBalige.jpg',
                'id_sampul_fasilitas' => '4'
             ],
            ]);
        }
    }