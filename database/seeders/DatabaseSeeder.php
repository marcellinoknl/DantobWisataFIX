<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(KabupatenSeeder::class);
        $this->call(SampulFasilitas::class);
        $this->call(KategoriWisata::class);
        $this->call(User::class);
        $this->call(KelolaWisata::class);
        $this->call(KelolaFasilitas::class);
        $this->call(SampulEvent::class);
        $this->call(KelolaEvent::class);
        $this->call(SampulAtraksi::class);
        $this->call(KelolaBerita::class);
        $this->call(KelolaAtraksi::class);
        $this->call(RolesSedeer::class);
        $this->call(homeSeeder::class);
        $this->call(deskripsiberitaSeeder::class);
        $this->call(DeskripsiDestinasi::class);
        $this->call(DeskripsiEvent::class);
        $this->call(DeskripsiAtraksi::class);
        $this->call(DeskripsiGaleri::class);
        $this->call(DeskripsiPaket::class);
        $this->call(DeskripsiPengalaman::class);
        $this->call(DeskripsiDewi::class);
        $this->call(DeskripsiFasilitas::class);
        $this->call(SosialMediaSeeder::class);
        $this->call(CounterSeeder::class);
        $this->call(LogoSeeder::class);
        $this->call(TaglineSeeder::class);
        
    }
}
