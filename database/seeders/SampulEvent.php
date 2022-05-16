<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SampulEvent extends Seeder
{
    public function run()
    {
        \App\Models\SampulEvent::insert([
            [                
                'nama_sampul' => 'Budaya',
                'file_foto' => 'budaya.jpg'
            ],
            // [               
            //     'deskripsi_event' => 'music',
            //     'file_foto' => 'musik.jpg',
            //     'judul_event' => 'Music'
            // ],
            // [                
            //     'deskripsi_event' => 'sport',
            //     'file_foto' => 'sport.jpg',
            //     'judul_event' => 'Sport'
            // ],
            // [                
            //     'deskripsi_event' => 'festival',
            //     'file_foto' => 'festival.jpg',
            //     'judul_event' => 'Festival'
            // ]
            
        ]);
    }
}
