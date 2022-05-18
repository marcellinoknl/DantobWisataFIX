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
    }
}
