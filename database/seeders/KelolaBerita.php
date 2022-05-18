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
                'isi_berita' => 'Pada saat perayaan hari raya lebaran kemarin wisatawan yang berkunjung ke Kabupaten Samosir meningkat drastis dari tahun tahun sebelumnya,rata-rata wisatawan yang berkunjung menyebrang melalui kapal ke Saamosir. Jumlah wisatwan jika dikalkulasikan sekitar 27.876 disampaikan oleh ujar Koordinator Satuan Pelayanan (Korsatpel) Toba, Rijaya Simarmata.',
                'file_foto' => 'Berita1.jpg',
                'id_user' => '1'
            ],
            [
                'judul_berita' => 'Libur Lebaran 2022, Kunjungan ke Kaldera Toba Tembus 30.000 Wisatawan',
                'isi_berita' => 'Kunjungan wisatan ke kaldera biasanya sekitar 250 orang per harinya dibandingkan pada saat 5 Mei 2022 jumlah wisatawan yang berkunjung menembus  6.000 wisatawan. Jimmy B Panjaitan selaku Direktur Utama Badan Pelaksana Otorita Danau Toba (BPODT), menyampaikan  "Senang dengan naiknya jumlah pengunjung, masyarakat tampak begitu antusias dan menikmati pemandangan alam yang indah dan beragam atraksi hiburan di destinasi yang berada di wilayah Toba Caldera Resort (TCR) ini," kata Jimmy dalam siaran persnya.',
                'file_foto' => 'Berita2.jpg',
                'id_user' => '1'
            ],
            [
                'judul_berita' => 'Dermaga Paropo Bakal Jadi Ikonik Dairi, Ditargetkan Beroperasi Tahun Ini',
                'isi_berita' => 'Kepala Balai Pengelola Transportasi Darat Wilayah II Sumatera Utara Batara hari Kamis lalu mengunjungi dermaga Paropo di Silahisabungan. Bupati Dairi Dr Eddy Berutu bersama Kepala Dinas Perhubungan Parulian Sihombing ikut mendampingi Batara.Batara dan Bupati Eddy Berutu berdiskusi soal rencana pembangunan dermaga Paropo yang ada di Silahisabungan dilakukan secara berkelanjutan. Batara dengan gamblang mengatakan, dermaga Paropo akan menjadi ikonik di Silahisabungan. Menurutnya pembangunan dermaga Paropo sangat luar biasa.“Menurut saya dermaga ini luar biasa, bagus. Indah dan bisa menjadi ikonik Kabupaten Dairi ke depan,” kata Batara.',
                'file_foto' => 'Berita3.jpg',
                'id_user' => '1'
            ],
            [
                'judul_berita' => '3 Desa Wisata Sumut Berhasil Masuk 50 Besar ADWI 2022',
                'isi_berita' => 'Kementerian Pariwisata dan Ekonomi Kreatif (Kemenparekraf) telah mengumumkan 50 desa wisata terbaik Anugerah Desa Wisata Indonesia (ADWI) 2022. Tiga desa wisata di Sumatera Utara (Sumut) berhasil masuk dalam daftar desa terbaik itu.Tiga desa wisata di Sumut yang masuk 50 besar ADWI 2022 itu yakni Desa Wisata Hilisimaetano di Kabupaten Nias Selatan, Desa Wisata Buluh Duri di Kabupaten Serdang Bedagai dan Desa Wisata Kampung Warna Warni Tigarihit di Kabupaten Simalungun."Selamat kami ucapkan bagi desa wisata yang berhasil lolos menjadi 50 desa wisata terbaik," kata Menparekraf, Sandiaga Salahuddin Uno melalui keterangan resminya.',
                'file_foto' => 'Berita4.jpg',
                'id_user' => '1'
            ],
            [
                'judul_berita' => 'Sanggar Seni ‘Tonggi’ Humbahas Terbaik Kategori Tortor Kreasi pada Festival Gondang Naposo',
                'isi_berita' => 'Festival Gondang Naposo merupakan event Dinas Kebudayaan dan Pariwisata Kabupaten Samosir yang diikuti oleh Dinas Pariwisata Pemuda dan Olahraga Kabupaten Humbang Hasundutan melalui Program Pengembangan Kebudayaan Kegiatan Fasilitasi Seni dan Budaya .Dinas Pariwisata Pemuda dan Olahraga Kabupaten Humbang Hasundutan memberangkatkan Sanggar Seni Tonggi yang merupakan sanggar binaan Dinas Pariwisata Pemuda dan Olahraga Kabupaten Humbang Hasundutan.
                 Sebagai hasil dari Festival, panitia dan tim juri mempunyai kategori penilaian yakni untuk Kategori Penyaji Tortor Tradisi terbaik kali ini dibawa pulang oleh Sanggar Tunas Kelapa Kabupaten Samosir, Kategori Penyaji Tortor Kreasi Terbaik masih tetap dipegang oleh pemenang sebelumnya Sanggar Seni Tonggi dari Kabupaten Humbang Hasundutan .',
                'file_foto' => 'Berita5.jpg',
                'id_user' => '1'
            ],
        ]);
    }
}