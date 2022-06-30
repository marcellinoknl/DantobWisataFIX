<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SosialMediaSeeder extends Seeder
{
    public function run()
    {
        \App\Models\SosialMedia::insert([
            [
                'facebook' => 'https://www.facebook.com/profile.php?id=100082362470457'
                
            ],
            [
                'instagram' => 'https://www.instagram.com/toba.journey/?hl=id'
                
            ],
            [
                'twitter' => 'https://www.instagram.com/wisatadantob/'
                
            ]


        ]);
    }
}
