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
                'nama_fasilitas' => 'Budaya kita',               
                'deskripsi' => 'budaya',
                'lokasi' => 'Toba',
                'file_foto' => 'budaya.jpg'
             ],
            ]);
        }
    }
    
