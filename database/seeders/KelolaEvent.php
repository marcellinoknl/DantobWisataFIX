<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KelolaEvent extends Seeder
{
    public function run()
    {
        \App\Models\EventWisata::insert([
            [ 
                'id_sampul_event' => '1',
                'judul_event' => 'Budaya kita',               
                'deskripsi_event' => 'budaya',
                'file_foto' => 'budaya.jpg'
             ],
            // [               
            //     'judul_event' => 'Music',
            //     'deskripsi_event' => 'music',
            //     'file_foto' => 'musik.jpg'
            // ],
            // [                
            //     'judul_event' => 'Sport',
            //     'deskripsi_event' => 'sport',
            //     'file_foto' => 'sport.jpg'
            // ],
            // [                
            //     'judul_event' => 'Festival',
            //     'deskripsi_event' => 'festival',
            //     'file_foto' => 'festival.jpg'
            // ]
            
        ]);
    }
}
