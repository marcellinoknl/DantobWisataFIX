<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KelolaBerita extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Berita_Wisata::insert([
            [
                'judul_berita' => 'Wisatawan ke Samosir Tembus 27 Ribu saat Libur Lebaran',
                'isi_berita' => 'Pada saat perayaan hari raya lebaran kemarin wisatawan yang berkunjung ke Kabupaten Samosir meningkat drastis dari tahun tahun sebelumnya',
                'file_foto' => 'Berita1.jpg',
                'id_user' => '1'
            ],
            [
                'judul_berita' => 'Libur Lebaran 2022, Kunjungan ke Kaldera Toba Tembus 30.000 Wisatawan',
                'isi_berita' => 'Kunjungan wisatan ke kaldera biasanya sekitar 250 orang per harinya dibandingkan pada saat 5 Mei 2022 jumlah wisatawan yang berkunjung menembus  6.000 wisatawan. ',
                'file_foto' => 'Berita2.jpg',
                'id_user' => '1'
            ],
            [
                'judul_berita' => 'Dermaga Paropo Bakal Jadi Ikonik Dairi, Ditargetkan Beroperasi Tahun Ini',
                'isi_berita' => 'Kepala Balai Pengelola Transportasi Darat Wilayah II Sumatera Utara Batara hari Kamis lalu mengunjungi dermaga Paropo di Silahisabungan.',
                'file_foto' => 'Berita3.jpg',
                'id_user' => '1'
            ],
            [
                'judul_berita' => '3 Desa Wisata Sumut Berhasil Masuk 50 Besar ADWI 2022',
                'isi_berita' => 'Kementerian Pariwisata dan Ekonomi Kreatif (Kemenparekraf) telah mengumumkan 50 desa wisata terbaik Anugerah Desa Wisata Indonesia (ADWI) 2022. ',
                'file_foto' => 'Berita4.jpg',
                'id_user' => '1'
            ],
            [
                'judul_berita' => 'Sanggar Seni ‘Tonggi’ Humbahas Terbaik Kategori Tortor Kreasi pada Festival Gondang Naposo',
                'isi_berita' => 'Festival Gondang Naposo merupakan event Dinas Kebudayaan dan Pariwisata Kabupaten Samosir yang diikuti oleh Dinas Pariwisata Pemuda dan Olahraga Kabupaten Humbang Hasundutan melalui Program Pengembangan Kebudayaan Kegiatan Fasilitasi Seni dan Budaya ',
                'file_foto' => 'Berita5.jpg',
                'id_user' => '1'
            ],
        ]);
    }
}