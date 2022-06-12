<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class homeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\HomeModel::insert([
            [
                'judul' => 'Telusuri Hal Menarik Di Danau Toba',
                'deskripsi' => 'Danau Toba terletak di Sumatera Utara, Indonesia. Danau Toba terbentuk dari letusan gunung api Toba yang sangat dahsyat yang terjadi sekitar 74.000 tahun yang lalu. Dengan luas lebih dari 1.145 kilometer persegi dan kedalaman 450 meter. Ingin tahu lebih tentang danau Toba?Yuk jelajahi website ini.'
            ]
            
        ]);
    }
}
