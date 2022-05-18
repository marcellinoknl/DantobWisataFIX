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
            [                
                'nama_sampul' => 'Musik',
                'file_foto' => 'musik.jpg'
            ],
            [                
                'nama_sampul' => 'Sport',
                'file_foto' => 'sport.jpg'
            ],
            [                
                'nama_sampul' => 'Festival',
                'file_foto' => 'festival.jpg'
            ],
        ]);
    }
}
