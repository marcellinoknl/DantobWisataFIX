<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KelolaWisata extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Objek_Wisata::insert([
        [ 
            'id_obj_wisata' => '1',
            'nama_wisata' => 'Bukit Holbung',               
            'deskripsi' => 'Bukit Holbung merupakan tempat pertama yang harus dikunjungi. Tempat ini merupakan pilihan yang tepat bagi anda yang ingin melihat keindahan alam Danau Toba dari ketinggian.
             Bukit Holbung terletak di Dolok Raja, Kec. Harian, Kab. Samosir, Sumatera Utara. 
            Menurut andalastourism.com, tempat ini sering dijuluki sebagai bukit teletubbies apabila rerumputan sedang menghijau menyelimuti perbukitan Holbung dan sekitarnya. Bukit ini sangat cocok bagi anda yang gemar olahraga tracking. 
            Untuk mencapai puncak bukit hanya diperkirakan waktu 10-15 menit. Di sana anda dapat melihat aktivitas nelayan yang mencari ikan di danau serta memandang luas eksotisme panorama alam Pulau Samosir dan sekitarnya.
            Aksesibilitas
            Rute perjalanan dari Medan ke Bukit Holbung dapat melewati Kabanjahe, dari Kabanjahe ke Bukit Holbung sekitar 8,3 km dengan waktu tempuh 24 menit. Selain itu rute perjalanan dapat ditempuh dari 
            Medan dengan melewati Siantar, Parapat dan Tomok, dari Tomok ke bukit holbung sekitar 8,3 km dengan waktu tempuh 24 menit.
            Fasilitas
            1.	Para wisatawan perlu membeli tiket dengan harga Rp5.000. Wisatawan yang datang menggunakan kendaraan juga harus membayar biaya parkir, untuk tiket parkir roda 2 dengan harga Rp5.000, 
            untuk tiket parkir roda 4 Rp10.000, tiket parkir roda 2 yang berkemah di bukit holbung dengan harga Rp10.000, tiket parkir roda 4 yang berkemah di bukit hombung dengan harga Rp20.000. 
            2.	Fasilitas lain yang disediakan di wisata Bukit Holbung adalah area kemah, toilet, warung penjual makanan dan minuman. ',
            'file_foto' => 'BukitHolbung.jpg',
            'id_obj_wisata_kabupaten' => '1',
            'id_kat_wisata' => '1'
         ],
        ]);
    }
}
