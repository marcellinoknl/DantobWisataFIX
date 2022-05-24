<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KelolaFasilitas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Fasilitas::insert([

            [ 
                'id_fasilitas' => '1',
                'nama_fasilitas' => 'HKBP Balige',               
                'deskripsi' => 'Gereja HKBP Balige diresmikan pada tahun 1881 dan masih tetap kokoh dengan konstruksi kayunya. Pada tahun 1923, HKBP Balige sempat direnovasi, namun sebatas pada penggantian lantai serta kursi-kursinya, sedangkan konstruksi utamanya tetap. ',
                'lokasi' => 'Jl. Gereja, Lumban Dolok, Haume Bange, Balige, Kab. Toba, Sumatera Utara.',
                'file_foto' => 'hkbpBalige.jpg',
                'id_sampul_fasilitas' => '4',
                'id_user' => '1'
             ],
             [ 
                'id_fasilitas' => '2',
                'nama_fasilitas' => 'Masjid Awal',               
                'deskripsi' => 'Masjid Awal merupakan salah satu masjid tertua di Kabupaten Simalungun yang dibangun pada tahun 1927. Masjid dibangun di tengah permukiman warga yang mayoritas non Muslim. Pada saat membangun masjid ini, warga di sana bergotong royong baik dari sisi tenaga dan juga sumbangan dana. Namun, masjid ini menyimpan pengalaman buruk. Dulu masjid ini dibakar orang Belanda, setelah itu dibangun lah dalam bentuk panggung. Masjid awal sudah berusia 95 tahun.',
                'lokasi' => 'Jl. Saribu Dolok, Kec. Pematang Raya, Kab. Simalungun, Sumatera Utara.',
                'file_foto' => 'MasjidAwal.jpg',
                'id_sampul_fasilitas' => '4',
                'id_user' => '1'
             ],
             [ 
                'id_fasilitas' => '3',
                'nama_fasilitas' => 'HKBP Sihorbo Tanjung',               
                'deskripsi' => 'Berdirinya HKBP Sihorbo Tanjung tidak terlepas dari pengaruh pengembangan Zending atau Pekabaran Injil ke berbagai daerah sebagai indikator panggilan gereja yang hidup seperti Zending Btaak yang datang ke wilayah Rura Tanjung. HKBP Sihorbo Tanjung berdiri pada tahun 1920. Pendiri Gereja HKBP Sihorbo Tanjung adalah Gr Ogus Hutagalung yang merupakan zendeling dari Zending Batak dan sekaligus penyebar agama Kristen Protestan yang pertama di Rura Tanjung. Respons dari masyarakat beserta raja-raja Rura Tanjung menerima Injil (barita nauli) walaupun pada awalnya banyak kendala yang dihadapi Gr Ogus Hutagalung. Dengan semangat Zending maka Injil tersebut dapat diterima oleh masyarakat dan raja-raja Rura Tanjung terutama yang belum menganut agama Kristen Protestan.',
                'lokasi' => 'Rura tanjung, Kec. Pakkat, Kab. Humbang Hasundutan, Sumatera Utara.',
                'file_foto' => 'hkbpSihorbo.jpg',
                'id_sampul_fasilitas' => '4',
                'id_user' => '1'
             ],
             [ 
                'id_fasilitas' => '4',
                'nama_fasilitas' => 'Salib Kasih',               
                'deskripsi' => 'Tempat itu menjadi obyek wisata rohani Kristiani di kawasan Tapanuli Utara, diminati dan ramai dikunjungi wisatawan mancanegara maupun wisata lokal terutama pada hari Raya Kristani, seperti Natal atau Paskah. Salib Kasih yang terletak di Siatas Barita adalah tempat yang dibangun untuk mengenang jasa missionaris agama Kristen yang berasal dari Jerman, DR.Ingwer Ludwig Nommensen yang wafat 23 Mei 1918 dan dimakamkan di desa Sigumpar sekitar 60 kilometer sebelah utara Tarutung. Tempat itu pula pada 1863, merupakan tempat DR.IL Nommensen untuk memandang ke arah Rura Silindung di bawahnya. Pendakian sekitar 1 kiloneter dapat dilakukan sambil menikmati perbukitan yang teduh dan tenang, suara semilir angin di antara dedaunan pohon pinus di sekitarnya. Tak hanya pemandangan dan suasana yang nyaman, sepanjang perjalanan pengunjung juga disuguhkan 10 Perintah Allah dan ayat-ayat suci yang dituliskan pada kayu atau ukiran batu, dan ditempel di pohon-pohon pinus. Setiap pengunjung bisa berdoa di ruangan yang berukuran 2 x 2 meter dengan khusyuk. Selain itu, terdapat sebuah aula yang biasa digunakan untuk kebaktian wisata rohani.',
                'lokasi' => 'Bukit Dolok, Siatas Barita, Kab. Tapanuli Utara, Sumatera Utara.',
                'file_foto' => 'SalibKasih.jpeg',
                'id_sampul_fasilitas' => '4',
                'id_user' => '1'
             ],
             [ 
                'id_fasilitas' => '5',
                'nama_fasilitas' => 'HKBP Dame Saitnihuta',               
                'deskripsi' => 'HKBP Hutadame didirikan oleh Ompui IL Nommensen pada 29 Mei tahun 1864 di Perkampungan Dame yang berada di pinggir Suangi (Aek) Sigeaon. HKBP Hutadame merupakan gereja yang pertama kali berdiri di Silindung. ',
                'lokasi' => 'Hutatoruan V, Tarutung, Kab. Tapanuli Utara, Sumatera Utara',
                'file_foto' => 'hkbpDame.jpg',
                'id_sampul_fasilitas' => '4',
                'id_user' => '1'
             ],
             [ 
                'id_fasilitas' => '6',
                'nama_fasilitas' => 'HKBP Pearaja',               
                'deskripsi' => 'Pada tahun 1834 pekabar injil datang ke tanah batak untuk yang pertama kali dari Gereja Baptis Inggris yaitu Pdt. Burton dan Pdt. Ward. Pada tahun 1825-1829 terjadi Perang Bonjol yang melibatkan bangsa batak. Pdt Samuel Munson dan Pdt. Hendy Lyman datang ke tanah batak disuruh oleh Persekutuan Zending Boston, akan tetapi mereka dibunuh di desa Lobu Pinang. Seiring berjalanan nya waktu pada tahu 2011 diadakan Jubileum 150 tahun HKBP.',
                'lokasi' => 'Jl. Raja Johannes Hutabarat, Hutatoruan V, Tarutung, Kab. Tapanuli Utara, Sumatera Utara.',
                'file_foto' => 'hkbpPearaja.jpg',
                'id_sampul_fasilitas' => '4',
                'id_user' => '1'
             ],
             [ 
                'id_fasilitas' => '7',
                'nama_fasilitas' => 'Masjid Nurul Islam',               
                'deskripsi' => 'Masjid Nurul Islam dulu dibangun sendiri oleh tetua setempat yaitu Tumbur Samosir. Lalu dikerjakan bersama oleh keluarga dan warga setempat. Menurut Tribun-Medan.com, Oppu Benry boru Samosir, mengatakan ajaran Islam dibawa ke Samosir pertama sekali oleh ayahnya, Tumbur Samosir. Tumbur Samosir belajar di Aceh selama dua tahun, kemudian pulang ke Bona Pasogit, Samosir membawa Islam sekitar tahun 1947. Berdirinya masjid ini memiliki sejumlah kendala dan tantangan yang harus dilewati, dimulai dari penyesuaian dengan warga hingga akhirnya diterima oleh penduduk setempat.',
                'lokasi' => 'Jl. Siti Aminah Samosir, Desa Tambun Sukkean, Kec. Onan Runggu, Kab. Samosir.',
                'file_foto' => 'MasjidNurulIslam.jpg',
                'id_sampul_fasilitas' => '4',
                'id_user' => '1'
             ],
             [ 
                'id_fasilitas' => '8',
                'nama_fasilitas' => 'HKBP Pangururan Kota',               
                'deskripsi' => 'Setelah kegagalan dari Sinode Godang HKBP yang ke-51 di Seminarium Sipoholon, muncullah perpecahan di HKBP. Mulai dari masa itu ada yang melangsungkan ibadah di Gereja dan ada juga yang melangsungkan di dalam rumah jemaat. Hal ini yang melatarbelakangi berdirinya HKBP Pangururan Kota. Pada bulan September 1999, telah dibeli tanah di jalan Danau Toba, dilaksanakan gotong royong untuk membersihkan tanah tersebut. ',
                'lokasi' => 'Jl. Gereja, Pasar Pangururan, Pangururan, Kab. Samosir, Sumatera utara.',
                'file_foto' => 'hkbpPangururan.jpg',
                'id_sampul_fasilitas' => '4',
                'id_user' => '1'
             ],
             [ 
                'id_fasilitas' => '9',
                'nama_fasilitas' => 'Gereja HKBP Lumban Silintong',               
                'deskripsi' => 'Gereja HKBP Lumban Silintong terletak di pinggiran danau toba. Arsitektur gereja yang terbilang unik ini, ikut melengkapi keindahan Danau Toba. Gereja ini semakin memesona dengan panduan hamparan persawahan serta perkampungan penduduk sekitarnya. Pada puncak gereja terdapat tiga buah menara yang mengingatkan doktrin Kristen tentang Tritunggal atau Trinitas serta filosifis atau wawasan sosial masyarakat dan budaya Batak yakni dalihan na tolu. Gereja HKBP Lumban Silintong merupakan pemekaran dari HKBP Hinalang Silalahi.',
                'lokasi' => 'Lumban Silintong, Kec. Balige, Kab. Toba, Sumatera Utara',
                'file_foto' => 'hkbpLumbanSilintong.jpg',
                'id_sampul_fasilitas' => '4',
                'id_user' => '1'
             ],
             [ 
                'id_fasilitas' => '10',
                'nama_fasilitas' => 'Tempat Ibadah Taman Wisata Iman',               
                'deskripsi' => 'Taman wisata iman menyediakan tempat ibadah dari berbagai agama seperti gereja, masjid, vihara dan kuil. Taman wisata ini dibangun sebagai ikatan beberapa agama di indonesia. Taman ini juga dihiasi dengan beberapa keindahan panorama alam dan barisan hutan pinus yang begitu rindang. Disana terdapat ornamen ibadah dari agama-agama resmi di Indonesia seperti Islam, Kristen protestan, Khatolik, Hindu, dan Budha.',
                'lokasi' => 'Desa Sitinjo, Kec. Sitinjo, Kab. Dairi, Sumatera Utara.',
                'file_foto' => 'TamanWisataIman.jpg',
                'id_sampul_fasilitas' => '4',
                'id_user' => '1'
             ],
             [ 
                'id_fasilitas' => '11',
                'nama_fasilitas' => 'GKPPD Salak Kota',               
                'deskripsi' => 'GKPPD terbentuk sebagai hasil Zending HKBP yang mengutus Pdt. Samuel Panggabean mengabarkan Injil di tanah Pakpak pada 7 September 1905. Ibadah perdana dilaksanakan di rumah keluarga Raja Sibayak Pakasior Manik di desa Kuta Usang Suak Pegagan. Pada 20 Oktober 1990 diadakan sidang penetapan nama, penetapan aturan-aturan gereja. ',
                'lokasi' => 'Salak II, Kec. Salak, Kab. Pakpak Bharat, Sumatera Utara.',
                'file_foto' => 'gkppd.jpg',
                'id_sampul_fasilitas' => '4',
                'id_user' => '1'
             ],
             [ 
                'id_fasilitas' => '12',
                'nama_fasilitas' => 'Gunawan Homestay',               
                'deskripsi' => '
                Berada di daerah Parsoburan Tobasa Homestay ini memiliki beberapa keunggulan. Mengusung konsep Homestay, pemilik menjadikan Homestay senyaman mungkin dengan menghadirkan beberapa fasilitas dan kenyamanan layaknya di rumah pribadi. Lain diantaranya yaitu harganya yang tidak terlalu mahal, tempatnya yang bersih dan nyaman, pemilik homestay yang ramah, dan beberapa Fasilitas yang menunjang Homestay ini. Berikut beberapa fasilitas yang di tawarkan oleh Homestay Gunawan, yaitu: 
                - Free Wifi
                - Water Heater
                - Kamar Mandi dalam
                - Kasur
                - Perlengkapan Mandi
                - Dapur Umum
                Telephone : 0812-6308-9861',
                'lokasi' => 'Parsoburan Tengah, Kec. Habinsaran, Toba, Sumatera Utara 22383',
                'file_foto' => 'GunawanHomestay.jpeg',
                'id_sampul_fasilitas' => '1',
                'id_user' => '1'
             ],
             [ 
                'id_fasilitas' => '13',
                'nama_fasilitas' => 'Taman Eden Homestay',               
                'deskripsi' => '
                Homestay ini berada di dalam Taman Eden 100, yang di mana memiliki 4 Bangunan yang nyaman, bersih serta besar. Dimana setiap bangunannya mampu menampung 8-10 orang. Dengan mengusung konsep alam Homestay ini memiliki daya tarik sendiri ketika bermalam di Homestay ini, karena lokasinya yang berada di dalam Taman Eden sehingga para pengunjung bukan hanya sekedar bermalam saja tapi bisa sekaligus berekreasi di Taman. Homestay ini juga Sudah dilengkapi listrik, kamar mandi dan kasur. Bagi pengunjung yang mau memesan boleh menghubungi Taman Eden, baik melalui telepon ataupun akun media sosial. 
                Telepon : 0812-6439-856',
                'lokasi' => 'Taman eden 100 Lumbanrang, Ps. Lumban Julu, Kec. Lumban Julu, Toba, Sumatera Utara 22386',
                'file_foto' => 'TamanEden.png',
                'id_sampul_fasilitas' => '1',
                'id_user' => '1'
             ],
             [ 
                'id_fasilitas' => '14',
                'nama_fasilitas' => 'The Kaldera Glamping',               
                'deskripsi' => 'The Kaldera Toba ini bukanlah destinasi wisata biasa, melainkan lokasi wisata yang menawarkan fasilitas super lengkap dengan sentuhan premium. Tempat wisata ini berada di kawasan seluas 386,7 hektar yang menyediakan sarana glamping modern rasa hotel bintang lima seluas 2 hektare. Di sini, wisatawan bisa menginap di sebuah tenda ala bohemian yang didalamnya sudah tersedia kasur, lengkap dengan kursi dan meja. Selain itu, ada juga bubble tent, di mana wisatawan bisa tidur dengan melihat suasana alam sekitar karena bagian atas tenda transparan. Semua ini tentu ditambah dengan pemandangan indah Danau Toba yang bisa dilihat langsung dari lokasi menginap.
                Telepon : (061) 42002060',
                'lokasi' => 'Desa Sibisia, Kecamatan Ajibata, Kabupaten Toba (dulu Toba Samosir).',
                'file_foto' => 'Caldera.jpg',
                'id_sampul_fasilitas' => '1',
                'id_user' => '1'
             ],
             [ 
                'id_fasilitas' => '15',
                'nama_fasilitas' => 'Bagus Bay Homestay',               
                'deskripsi' => 'Bagus Bay Homestay yang terletak di Tuk Tuk, menyediakan kamar keluarga dan teras yang di mana Anda dapat menikmati pemandangan danau toba secara langsung. Kamar-kamar di Homestay ini memiliki area tempat duduk dan setiap kamar dilengkapi dengan seprai dan handuk juga. Dengan harga yang murah, tempat yang nyaman dan bersih serta fasilitas yang memadai menjadikan Homestay ini menjadi tempat yang tepat untuk bermalam. Berikut fasilitas kamar dan fasilitas umum yang di sediakan oleh Bagus Bay Homestay, yaitu Kamar mandi dalam, Restoran, bar, Taman, Wi-Fi, dan 24 jam keamanan.
                Telepon : 0819-9006-6034',
                'lokasi' => 'Jl. Lkr. Tuktuk No.Kelurahan, Tuktuk Siadong, Simanindo, Kabupaten Samosir, Sumatera Utara.',
                'file_foto' => 'BagusHomestay.png',
                'id_sampul_fasilitas' => '1',
                'id_user' => '1'
             ],
             [ 
                'id_fasilitas' => '16',
                'nama_fasilitas' => 'Leokap Homestay',               
                'deskripsi' => 'Leokap Homestay yang terletak di Tuk Tuk, memiliki akses Wi-Fi gratis di seluruh area dan taman untuk bersantai. Kamar-kamar di guest house ini menampilkan pemandangan indah dan memiliki kamar mandi pribadi dengan shower. Anda dapat menikmati sarapan setiap hari juga.
                Telepon : 0822-9884-2296',
                'lokasi' => 'Jl. Lkr. Tuktuk, Tuktuk Siadong, Simanindo, Kabupaten Samosir, Sumatera Utara.',
                'file_foto' => 'LeokapHomestay.png',
                'id_sampul_fasilitas' => '1',
                'id_user' => '1'
             ],
             [ 
                'id_fasilitas' => '17',
                'nama_fasilitas' => 'Horas Family Home',               
                'deskripsi' => 'Menawarkan tempat peristirahatan yang damai di tengah alam hijau, Horas Family Home terletak di daerah Tuk Tuk di Pulau Samosir. Anda dapat menikmati akses langsung ke Danau Toba dan WiFi gratis. Semua unit suite menawarkan dapur berperalatan lengkap dan ruang makan. Setiap rumah dengan kipas angin menampilkan arsitektur bergaya Batak, serta menyediakan area tempat duduk dengan sofa dan TV. Anda dapat bersantai di teras pribadi sambil menikmati pemandangan danau dan taman. Fasilitas shower air panas tersedia di kamar mandi dalam. Rental kendaraan dan layanan laundry tersedia berdasarkan permintaan. Staf dapat membantu Anda dengan pengaturan wisata dan kegiatan, seperti memancing. Anda juga dapat menikmati pijat relaksasi. Perahu kecil dapat digunakan gratis, dan parkir gratis tersedia di tempat.
                Telepon : 0813-6105-1419',
                'lokasi' => 'Jl. Lkr. Tuktuk, Tuktuk Siadong, Simanindo, Kabupaten Samosir, Sumatera Utara',
                'file_foto' => 'HorasFamilyHome.png',
                'id_sampul_fasilitas' => '1',
                'id_user' => '1'
             ],
             [ 
               'id_fasilitas' => '18',
               'nama_fasilitas' => 'Beryl Farm Resto Tarutung',               
               'deskripsi' => 'Beryl Farm khas dengan restoran yang dirancang menyerupai rumah ala belanda didominasi warna merah dan putih. Terdapat hidangan yang lezat seperti steak sampai menikmati secangkir kopi yang merupakan menu andalannya.               ',
               'lokasi' => 'Terletak di siarangarang, Partali Julu, Tarutung,Kab. Tapanuli Utara. Terpaut 5,3 kilometer dari ibukota kabupaten dan dapat ditempun dengan waktu perjalanan 13 menit.',
               'file_foto' => 'BerylFarmResto.jpg',
               'id_sampul_fasilitas' => '3',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '19',
               'nama_fasilitas' => 'Angkasa Cafe & Resto',               
               'deskripsi' => 'Salah satu cafe yang nyaman, ada karaoke, live musik dengan aneka menu masakan yang cocok dan enak. Saya suka Angkasa Avocado Kami sering pilih ini untuk tempat arisan atau meeting bersama komunitas saya
               salah satu tempat nongkrong yang populer di kota Tarutung. Tersedia menu makanan western dan Nusantara, serta tersedia kopi dan minuman alkohol. Tempat parkir luas dan ada tempat cuci kendaraan. Pada malam hari anda dapat berkaraoke disini. Harga makanan dan minumannya standart Resto.',
               'lokasi' => 'Jalan Mayjend J. Samosir No 1, Kelurahan Hutatoruan X, Kecamatan Tarutung, Kabupaten Tapanuli Utara, Sumatera Utara',
               'file_foto' => 'AngkasaKafeResto.png',
               'id_sampul_fasilitas' => '3',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '20',
               'nama_fasilitas' => 'Jennys Restaurant',               
               'deskripsi' => 'Jennys Restaurant memiliki lokasi yang sangat strategis karena sangat dekat dengan Danau Toba. Oleh sebab itu, setelah melalui petualangan asyik di Danau Toba, sangat tepat jika Anda memilih ke Jenny’s Restaurant untuk mengisi kekosongan perut.
               Jika dilihat dari luar, bangunan Jennys Restaurant tampak biasa saja dengan plang nama restoran yang terbuat dari kayu. Namun, ketika Anda memasuki bagian dalam ruangannya, Anda akan terpesona melihat bangunan yang didominasi oleh kayu. Anda juga akan disambut hangat oleh pemilik restoran yang bernama, Jenny. Menu yang wajib Anda coba adalah ikan bakar ala Jenny’s Restaurant. Menu ikan bakar menjadi yang paling difavoritkan karena rasanya yang memang sangat enak. Selain ikan bakar, Jenny’s Restaurant juga menyediakan berbagai menu lainnya, mulai dari masakan Nusantara hingga mancanegara. Harga yang dibanderol pun relatif terjangkau.',
               'lokasi' => 'Jl. Lkr. Tuktuk, Tuktuk Siadong, Kec. Simanindo, Kab. Samosir.',
               'file_foto' => 'JennysRestaurant.jpg',
               'id_sampul_fasilitas' => '3',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '21',
               'nama_fasilitas' => 'Maruba Restaurant',               
               'deskripsi' => 'Maruba Restaurant, di restaurant ini, Anda dapat menikmati masakan yang sangat mantap dengan view hamparan Danau Toba yang indah. Menu masakan ala Nusantara hingga menu masakan ala western tersedia di restaurant ini. Menu masakan ala Nusantara yang bisa Anda coba, di antaranya gado-gado, cah kangkung, dan sambal tempe. Sementara itu, menu ala western yang juga wajib Anda coba, di antaranya vegetable taco, hawaiian pizza, dan avoccado salad.',
               'lokasi' => 'Tuktuk Siadong, Kec. Simanindo, Kab. Samosir.',
               'file_foto' => 'MarubaRestaurant.jpg',
               'id_sampul_fasilitas' => '3',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '22',
               'nama_fasilitas' => 'Rumah Makan Garuda',               
               'deskripsi' => 'Rumah makan di sidikalang dairi yang pertama adalah RM Garuda Sidikalang. Tempat makan di sidikalang yang pertama ini cukup poluer di kalangan masyarakat dan menjadi sasaran utama ketika berburu wisata kuliner di Dairi.Rumah makan yang viral di sidikalang ini sangat bersih dan tempatnya pun begitu nyaman bagi setiap pengunjung, selain itu juga pelayanannya begitu ramah sehingga membuat wisatawan betah dan mau mengunjungi tempat makan satu ini di sidikalang.',
               'lokasi' => 'Jl. Sisingamangaraja No. 167, Kota Sidikalang, Kabupaten Dairi',
               'file_foto' => 'RMGarudaSidikalang.jpg',
               'id_sampul_fasilitas' => '3',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '23',
               'nama_fasilitas' => 'Rumah Makan Khas Batak RS',               
               'deskripsi' => 'Rumah Makan Khas Batak RS yang bisa menjadi pilihan lain untuk teman-teman celotehpraja.com berburu Wisata Kuliner di Dairi. Rumah makan di sidikalang dairi yang satu ini ramai dikunjungi masyarakat setempat karena masakannya yang lezat.
               Tempat rumah makan ini cukup viral dan populer dan menjadi wisata kuliner favorite bagi kebanyakan masyarakat Sidikalang Kab. Dairi. Selain itu juga menyediakan kuliner dan makanan khas Sidikalang Kabupaten Dairi yang patut di cicipi.',
               'lokasi' => 'Jl. Ahmad Yani simpang salak depan kantor pengadilan, Batang Beruh, Sidikalang, Kabupaten Dairi',
               'file_foto' => 'RumahMakanKhasBatak.jpg',
               'id_sampul_fasilitas' => '3',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '24',
               'nama_fasilitas' => 'Resto Apung Tipang Mas',               
               'deskripsi' => 'Restoran Apung Tipang Mas jadi salah satu favorit. Lesehan di atas keramba ini terletak di Desa Tipang, Kecamatan Bakti Raja, Kabupaten Humbang Hasundutan. Rumah ini benar-benar terapung di permukaan air Danau Toba. Kamu bisa makan ditemani pemandangan indah. Ikan bakar ala Tipang Mas jadi menu pilihan untuk dicoba. Selain itu juga ada ikan mas, mujair hingga nila . Disajikan dengan sabal Tuk-tuk dan Andaliman khas Batak.Pengunjung juga bisa memancing di restoran terapung ini. Hanya memakan waktu 30 menit dari Pelabuhan Muara.',
               'lokasi' => 'Tipang, Kec. Bakti Raja, Kabupaten Humbang Hasundutan, Sumatera Utara',
               'file_foto' => 'RestoApung.jpeg',
               'id_sampul_fasilitas' => '3',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '25',
               'nama_fasilitas' => 'KR. Sipinsur Resto',               
               'deskripsi' => 'KR. Sipinsur Resto  merupakan salah satu tempat makan wisata kuliner di daerah Humbang Hasundutan cukup populer dan ramai dikunjungi oleh wisatawan. Memiliki ruang luas,bersih, mewah dan sejuk membuat pemburu kuliner nyaman berada disana. Selain itu harga kuliernya terjangkau dan enak sekali. Ada banyak menu favorite seperti Chinese food, Nusantara food, nasi goreng kampung, ikan saus Singapura',
               'lokasi' => 'Parulohan, Lintong Nihuta, Kabupaten Humbang Hasundutan',
               'file_foto' => 'SipinsurResto.png',
               'id_sampul_fasilitas' => '3',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '26',
               'nama_fasilitas' => 'Restoran Nelayan Sumsum Kecupak',               
               'deskripsi' => 'Tempat Makan di Pakpak Bharat ternyaman satu ini memiliki menu aneka makanan laut, bagi anda yang menyukai makanan laut kunjungilah Restoran Nelayan Sumsum Kecupak. Rasanya tidak usah diragukan lagi.
               Lokasi Restoran Nelayan Sumsum Kecupak sendiri berada di Jalan Lae Une Salak Sumatra Utara. Dari Kota salak memerlukan jarak tempuh sekitar 2,97 KM.Untuk harga makanan di restoran nelayan sumsum kecupak terbilang sangat murah meriah.',
               'lokasi' => 'Jalan Lae Une Salak, Sumatra Utara',
               'file_foto' => 'RestoranNelayan.jpg',
               'id_sampul_fasilitas' => '3',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '27',
               'nama_fasilitas' => 'Rumah Makan Muslim Madu Ntedoh',               
               'deskripsi' => 'Jika anda ingin mencicipi aneka makanan asia tempat makan di Pakpak Bharat ini pas untuk Anda kunjungi. Karena Rumah Makan Muslim Madu Ntedoh menyajikan makanan Asia yang memiliki citra rasa khas. Maka tak heran bila tempat makan ini selalu penuh dikunjungi para penikmat makanan asia, lokasi rumah makan muslim madu ntedoh berada di Jalan Napasengkut no.12, Salak, Pakpak Bharat, yang memiliki tempat nyaman bisa anda gunakan untuk melepas lelah setelah berkeliling kota Pakpak Bharat.',
               'lokasi' => 'Jalan Napasengkut no.12, Salak, Pakpak Bharat',
               'file_foto' => 'RMMuslimMaduNtedoh.jpg',
               'id_sampul_fasilitas' => '3',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '28',
               'nama_fasilitas' => 'Waroenk Pinus Damasus',               
               'deskripsi' => 'Menurut libur.co  tempat kuliner ini berada di lingkungan hutan pinus dan menyuguhkan pemandangan Danau Toba. Menggunakan kursi dan peralatan makan yang terbuat dari kayu membuat suasananya begitu nyaman layaknya di rumah. Memiliki fasilitas yang cukup lengkap dan juga bersih menjadikan warung makan satu ini harus Anda kunjungi.Anda bisa menemukan fasilitas seperti lahan parkir yang luas, hingga fasilitas umum lainnya. Tak heran jika tempat satu ini seringkali dijadikan sebagai tempat berkumpul bersama keluarga. Suasananya juga sangat mendukung untuk makan bersama keluarga atau teman teman. Apalagi menu yang ditawarkan juga sangat beragam.',
               'lokasi' => 'Jl. Parapat, Dolok Tomuan, Kec. Dolok Panribuan, Kab. Simalungun, Sumatera Utara.',
               'file_foto' => 'WaroenkPinusDamasus.jpeg',
               'id_sampul_fasilitas' => '3',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '29',
               'nama_fasilitas' => 'Rumah Makan Khas Batak Silindung',               
               'deskripsi' => 'Menurut libur.co Rumah makan satu ini cocok untuk Anda yang ingin mencicipi masakan non halal khas Batak. Seperti yang kita tahu, Batak juga kondang akan rasa masakannya yang nikmat. Rumah Makan Khas Batak Silindung ini sudah dibangun sejak puluhan tahun lalu. Sudah melegenda, Anda tak perlu meragukan cita rasa yang ditawarkan oleh tempat kulineran satu ini. 
               Untuk menu yang ditawarkan juga sangat beragam, mulai dari babi panggang sampai ikan bakar. Tidak ketinggalan menu minuman seperti susu kerbau juga bisa Anda temukan di tempat ini. Lokasinya yang strategis dengan tempatnya yang nyaman, membuatnya begitu kondang di Simalungun.',
               'lokasi' => 'Jl. Narumonda Bawah No.115, Kec. Siantar Timur, Kota Pematang Siantar, Sumatera Utara.',
               'file_foto' => 'RumahMakanSilindung.jpg',
               'id_sampul_fasilitas' => '3',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '30',
               'nama_fasilitas' => 'Cafe & Resto Boruku Toba Art',               
               'deskripsi' => 'Liburan ke Danau Toba dan objek wisata Toba Samosir makin seru dengan mencicipi Pizza Andaliman di Cafe & Resto Boruku Toba Art. Bentuk boleh Italia, namun rasa dari kuliner satu ini Batak banget. Ya, Pizza Andaliman dimodifikasi dengan berbagai rempah khas setempat hingga memiliki cita rasa yang unik dan berbeda. Untuk harganya juga lumayan terjangkau mulai dari Rp 7.000 – 60.000 tergantung variasi ukuran dan juga taburan di atasnya.',
               'lokasi' => 'Jl. Siborong Borong – Parapat, Sangkar Nihuta, Balige, Kabupaten Toba Samosir, Sumatera Utara',
               'file_foto' => 'PizzaAndaliman.jpg',
               'id_sampul_fasilitas' => '3',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '31',
               'nama_fasilitas' => 'Toba tio cafe & resto',               
               'deskripsi' => 'Toba Tio Cafe & Resto merupakan tempat yang berlokasi di Jl. Sibolahotang, Sibola Hotangsas, Kabupaten Toba Samosir, Sumatera.Tempat ini berada di pinggiran danau, dan memiliki daya tarik kepada pengunjung karena memiliki tempat untuk memandang danau saat makan atau minum.Menyediakan fasilitas Live Music, Wi-Fi, sewa tempat dan ruang VIP.Toba Tio Cafe & Resto juga menyediakan berbagai menu makanan dan minuman',
               'lokasi' => 'l. Sibolahotang, Sibola Hotangsas, Kabupaten Toba Samosir, Sumatera Utara',
               'file_foto' => 'tobatio.jpg',
               'id_sampul_fasilitas' => '3',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '32',
               'nama_fasilitas' => 'TTC',               
               'deskripsi' => 'www.tobatimes.com - TTC adalah layanan taksi bandara Silangit dan Kualanamu, pilihan anda untuk liburan dan berwisata di kawasasan danau Toba dan sekitarnya. TTC layanan transportasi yang mengutamakan kenyamanan dan keamanan dalam operasinya. Unit mobil yang bersih dan kabin mobil yang nyaman dan Full AC menjamin ke tenangan anda dalam perjalanan. TTC juga dipandu para super profesional dan handal, ramah dan bersih. Dalam perjalanan TTC juga menyediakan air mineral dan snack untuk menemani perjalanan anda.
               Kontak: tobatranscab@gmail.com / sitobatabo@gmail.com',
               'lokasi' => 'Bandara Silangit, Kabupaten Tapanuli Utara, Sumatera Utara, Indonesia.',
               'file_foto' => 'ttc.jpg',
               'id_sampul_fasilitas' => '2',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '33',
               'nama_fasilitas' => 'PERUM DAMRI',               
               'deskripsi' => 'Damri terus membantu akses transportasi wisatawan yang ingin liburan di Danau Toba. Sehingga traveler akan sangat terbantukan jika ingin bepergian antar lokasi di Kawasan Strategis Pariwisata Nasional (KSPN) di Indonesia ini.
               Kontak: 0812-6319-9797',
               'lokasi' => 'Terminal Lubuk Pakam, Jl. Lintas Sumatra, Tj. Garbus Satu, Kec. Lubuk Pakam, Kabupaten Deli Serdang, Sumatera Utara 20551',
               'file_foto' => 'Damri.jpg',
               'id_sampul_fasilitas' => '2',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '34',
               'nama_fasilitas' => 'TobaTrans',               
               'deskripsi' => 'TOBAtrans hadir untuk melayani jasa rental mobil di Kawasan Danau Toba Medan, Sumatera Utara. kami melayani untuk berbagai keperluan antara lain seperti perjalanan wisata, perjalanan dinas, acara keluarga dan keperluan lainnya. Kami TOBAtrans menyediakan layanan rental mobil di Bandara Kualanamu Medan dan Bandara Silangit Siborong-borong dengan harga yang sangat terjangkau. Jasa sewa mobil yang kami sediakan memiliki standar layanan yang selalu kami jaga demi mempertahankan kualitas untuk penyewa.
               Kontak: 082285951833',
               'lokasi' => 'Jl. Justin Sirait No.5, Pardamean Ajibata, Kec. Ajibata, Toba, Sumatera Utara',
               'file_foto' => 'TobaTrans.jpg',
               'id_sampul_fasilitas' => '2',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '35',
               'nama_fasilitas' => 'Pelabuhan Ajibata ',               
               'deskripsi' => 'shipsapp.co.id - Pelabuhan ini mengantarkan penumpang dengan Kapal Ferry dan Kapal Wisata untuk menuju ke Pelabuhan Tomok, Samosir. nSepanjang perjalanan akan di kelilingi di danau toba yang begitu luas dengan pemandangan bukit barisan yang begitu indah. Kecamatan Ajibata memiliki salah satu pelabuhan menuju Pulau Samosir selain Balige dan Tigaras. Di Ajibata ada dua jenis pelabuhan yakni reguler (untuk kapal-kapal kayu tradisional pengangkut penumpang) dan pelabuhan ferry yang menyeberangkan mobil, barang maupun orang dari dan ke Pulau Samosir. Terdapat 3 desa di Kecamatan Ajibata yang hanya masih terjangkau menggunakan transportasi angkutan air.',
               'lokasi' => 'JL. Justin Sirait, Pardamean Ajibata, Ajibata, Simalungun',
               'file_foto' => 'PelabuhanAjibata.jpg',
               'id_sampul_fasilitas' => '2',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '36',
               'nama_fasilitas' => 'Pelabuhan Tigaraja',               
               'deskripsi' => 'shipsapp.co.id - Pelabuhan Tiga Raja (Danau Toba) terletak di Parapat, Sumatra Utara. Pelabuhan ini mengantarkan penumpang dengan Kapal Ferry dan Kapal Wisata untuk menuju ke seluruh Pelabuhan di Samosir. Sepanjang perjalanan akan di kelilingi di danau toba yang begitu luas dengan pemandangan bukit barisan yang begitu indah.',
               'lokasi' => 'Tiga Raja, Kec. Girsang Sipangan Bolon, Kabupaten Simalungun, Sumatera Utara',
               'file_foto' => 'PelabuhanTigaraja.jpg',
               'id_sampul_fasilitas' => '2',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '37',
               'nama_fasilitas' => 'Pelabuhan Tomok',               
               'deskripsi' => 'shipsapp.co.id - Pelabuhan Tomok (Danau Toba) terletak di Pulau Samosir, Sumatra Utara. Pelabuhan ini mengantarkan penumpang dengan Kapal Ferry dan Kapal Wisata untuk menuju ke seluruh Pelabuhan di Samosir. Sepanjang perjalanan akan di kelilingi di danau toba yang begitu luas dengan pemandangan bukit barisan yang begitu indah.
               Kontak: +62 813-7093-0082',
               'lokasi' => 'Simanindo, Kabupaten Samosir, Sumatera Utara',
               'file_foto' => 'PelabuhanTomok.png',
               'id_sampul_fasilitas' => '2',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '38',
               'nama_fasilitas' => 'Bandar Udara Internasional Sisingamangaraja XII',               
               'deskripsi' => 'angkasapura2.co.id - Bandara Silangit adalah satu-satunya bandara kelas IV yang memiliki fasilitas dan kemampuan setara bandara kelas II di Indonesia. Pada 14 Desember 2012, Pemerintah melalui Kementerian Perhubungan secara resmi menyerahkan operasional pengelolaan Bandara Silangit kepada PT Angkasa Pura II (Persero). Dengan demikian, status bandara ini secara otomatis berubah dari bandara UPT menjadi bandara komersial. Sebagai Bandara ke 13 PT. Angkasa Pura II (Persero), pembenahan fasilitas pelanan terus dilakukan hingga saat ini, renovasi toilet untuk pemenuhan standar toilet juara, renovasi Musholla dan Tempat Wudhu yang layak, pembuatan Kid Zone, pengadaan Free Charging, penguatan sinyal wifi, perbaikan area counter check in dan pembenahan Nursery Room, adalah sebagian dari pembenahan tersebut. Bandar Udara Silangit juga sedang mengupayakan kesempurnaan Manajemen Kesehatan dan Keselamatan Kerja, demi mewujudkan program zero incident, zero accident & zero workplace accident. Bandara Silangit juga sedang dipersiapkan untuk melayani peningkatan wisatawan ke Danau Toba dan area Tapanuli lainnya.
               Kontak: 0632-4320152, silangitairport@yahoo.co.id',
               'lokasi' => 'Jalan Silangit, Silando Muara, Silando, Kec. Siborongborong, Kabupaten Tapanuli Utara, Sumatera Utara',
               'file_foto' => 'Silangit.jpg',
               'id_sampul_fasilitas' => '2',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '39',
               'nama_fasilitas' => 'Bandar Udara Sibisa',               
               'deskripsi' => 'bisnis.tempo.co - Pengelolaan Bandara Sibisa sejauh ini ditangani oleh Unit Pelaksana Teknis Ditjen Perhubungan Udara. Meski sudah mulai beroperasi, Bandara Sibisa masih terus dalam tahap pengembangan. Salah satunya, panjang lintasan yang akan ditambah menjadi 1.200 x 30 meter dari sebelumnya 750 x 23 meter. Diharapkan dengan pengoperasian Bandara Sibisa, ikut mendongkrak kunjungan wisatawan baik lokal maupun asing untuk mengunjungi Kawasan Danau Toba. Berbagai destinasi yang sudah tersedia dan dikembangkan dapat semakin mudah diakses.',
               'lokasi' => 'Pardamean Sibisa, Kec. Ajibata, Toba, Sumatera Utara',
               'file_foto' => 'Sibisa.jpg',
               'id_sampul_fasilitas' => '2',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '40',
               'nama_fasilitas' => 'The Sasta Hotel',               
               'deskripsi' => 'Berlokasi di tengah kota hotel ini memberikan kenyamanan dan kebersihan kepada pengunjungnya. Selain itu beberapa fasilitas umum serta fasilitas kamar yang dapat di gunakan para pengunjung yaitu, Restoran, Laundry, Wifi, Shower, AC.
               Telepon: 0812-6594-2044',
               'lokasi' => 'Jl. Sisingamangaraja No.80, Batang Beruh, Kec. Sidikalang, Kabupaten Dairi, Sumatera Utara.',
               'file_foto' => 'TheSastaHotel.png',
               'id_sampul_fasilitas' => '1',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '41',
               'nama_fasilitas' => 'Hotel Angkasa Raya',               
               'deskripsi' => 'Akomodasi yang tak kalah nyaman dan terjangkau, Hotel Angkasa Raya sebuah penginapan yang luar biasa berlokasi strategis. Pilihan yang fantastis untuk mendapatkan pengalaman yang tidak terlupakan. Nikmati layanan professional, penuh perhatian, ramah dan intim demi kenyamanan Anda selama menginap.',
               'lokasi' => 'Jl. Nusantara No.5, Kota Sidikalang, Sidikalang, Kabupaten Dairi, Sumatera Utara, Indonesia',
               'file_foto' => 'HotelAngkasaRaya.png',
               'id_sampul_fasilitas' => '1',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '42',
               'nama_fasilitas' => 'Waris Hotel',               
               'deskripsi' => 'Waris Hotel adalah salah satu hotel recommended yang bisa Anda temukan di wilayah Pakpak Bharat. Hotel kelas melati ini menyediakan sekitar 19 unit kamar yang cukup nyaman untuk dijadikan tempat beristirahat dan masing-masing sudah dilengkapi dengan kamar mandi dalam. Di Waris Hotel menyediakan fasilitas seperti ruang pertemuan, area parkir kendaraan yang cukup luas, hingga fasilitas sarapan. Sayang kabarnya di Waris Hotel belum dilengkapi dengan fasilitas penyejuk ruangan alias air conditioner (AC).',
               'lokasi' => 'Jl. Mpu Bada Desa Salak, Kecamatan Salak, Kabupaten Pakpak Bharat, Sumatera Utara, 22271, Indonesia',
               'file_foto' => 'WarisHotel.png',
               'id_sampul_fasilitas' => '1',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '43',
               'nama_fasilitas' => 'Hotel Impana',               
               'deskripsi' => 'Hotel Impana menyediakan sekitar 11 unit kamar yang bisa dijadikan tempat melepas lelah setelah melalui perjalanan yang panjang. Saat menginap di Hotel Impana, Anda bisa menikmati sederet fasilitas layaknya di hotel berbintang seperti ruang pertemuan (meeting room), restoran, kolam renang outdoor, cafe, taman, hingga ruang keluarga.',
               'lokasi' => 'Jl. Kecupak, Desa Kecupak II, Kecamatan Pergetteng-getteng Sengkut, Kabupaten Pakpak Bharat, 22272, Sumatera Utara, Indonesia',
               'file_foto' => 'HotelImpana.png',
               'id_sampul_fasilitas' => '1',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '44',
               'nama_fasilitas' => 'Simalungun City Hotel',               
               'deskripsi' => 'Terletak secara ideal di area wisata utama Pematangsiantar, Simalungun City Hotel menjanjikan kunjungan yang santai dan mengagumkan. Hotel ini menawarkan berbagai fasilitas dan fasilitas untuk memastikan Anda bersenang-senang. Staf yang siap melayani akan menyambut dan memandu Anda di Simalungun City Hotel. Kamar-kamar dilengkapi dengan semua fasilitas yang Anda butuhkan untuk tidur malam yang nyenyak. Banyak kamar memiliki sandal, AC, layanan bangun pagi, balkon/teras, telepon. Untuk meningkatkan kualitas pengalaman menginap para tamu, hotel ini menawarkan fasilitas rekreasi seperti taman air (waterpark), ruangan yoga, pusat kebugaran, sauna, kolam renang luar ruangan. Suasana yang ramah dan pelayanan yang istimewa dapat Anda harapkan selama menginap di Simalungun City Hotel.
               Telepon: (021) 29707602',
               'lokasi' => 'Jalan Sutomo, Kompleks Griya Hapoltakan, Kec. Pematang Raya, Kab. Simalungun, Raya, Simalungun, Sumatera Utara, Indonesia.',
               'file_foto' => 'SimalungunCity.png',
               'id_sampul_fasilitas' => '1',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '45',
               'nama_fasilitas' => 'My Nasha Hotel Tigaras',               
               'deskripsi' => 'My nasha tigaras simalungun berlokasi di tigaras-simalungun hotel in terletak 5 menit dari pelabuhan tigaras. terdapat beberapa tempat menarik disekitar hotel, seperti bukit indah simarjarunjung yang berjarak sekitar1,38 km. my nasha adalah pilihan yang tepat untuk menginap yang menyediakan fasilitas yang layak serta pelayanan yang baik, bermalam dengan berbagai fasilitas hiburan untuk anda dan seluruh keluarga di my nasha tigaras, akomodasi yang luar biasa untuk liburan keluarga anda. meja depan 24 jam tersedia untuk melayani anda mulai dari check-in hingga check-out, atau bantuan apapun yang anda butuhkan apabila anda menginginkan lebih jangan ragu untuk bertanya ke meja depan, kami selalu siap menampung anda.
               Telepon: 0815-3453-4383',
               'lokasi' => 'Togu Domu Nauli, Kec. Dolok Pardamean, Kabupaten Simalungun, Sumatera Utara',
               'file_foto' => 'MyNasha.png',
               'id_sampul_fasilitas' => '1',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '46',
               'nama_fasilitas' => 'Martin Anugrah Hotel & Restaurant',               
               'deskripsi' => 'Terletak di Dolok Sanggul, ibukota Kabupaten Humbang Hasundutan yang memamerkan pegunungan dan air terjun yang indah, angin sepoi-sepoi, dan makanan eksotis, Martin Anugrah Hotel & Restaurant sangat cocok untuk pelancong bisnis. Hotel ini memiliki resepsionis 24 jam dan keamanan, di luar kolam renang, ruang bersantai / TV bersama, area merokok, dan tempat parkir gratis. Selain itu, pembersih tangan tersedia dan pengiriman makanan di luar diizinkan untuk kenyamanan para tamu. Staf properti baik dan efisien membuat tinggal di hotel ini lebih menyenangkan dan menarik.
               Telepon: 0811-6261-820',
               'lokasi' => 'Jalan Raya Bakkara Sosorgonting, Pasaribu, Dolok sanggul, Humbang Hasundutan Regency, North Sumatra.',
               'file_foto' => 'MartinAnugrah.png',
               'id_sampul_fasilitas' => '1',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '47',
               'nama_fasilitas' => 'Villa Tuan Nagani Paradise',               
               'deskripsi' => 'Cozy Hotel dan Resort di Dolok Sanggul, Humbang Hasundutan ini memiliki jarak 9 KM dari Pusat Kota Dolok Sanggul dan dekat dengan beberapa lokasi wisata terkenal di Kabupaten Humbang Hasundutan seperti Bakara Danau Toba, Air Terjun Janji, Istana Sisingamangaraja dan Geosite Sipinsur dan pesona wisata lainnya. Memiliki Wahana permainan sendiri, dan desain yang unik serta minimalis, cocok banget untuk kamu yang ingin berlibur di kabupaten Humbang Hasundutan tapi belum punya tempat inap. Sudah termasuk sarapan, Kolam renang, dan Fruit Slice.
               Telepon: 0822-1742-0420',
               'lokasi' => 'Jl. Pakkat - Dolok Sanggul No.km 8, Sosor Tambok, Dolok sanggul,Humbang Hasundutan',
               'file_foto' => 'TuanNagani.png',
               'id_sampul_fasilitas' => '1',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '48',
               'nama_fasilitas' => 'Piltik Homestay',               
               'deskripsi' => 'Selain membuka kedai kopi, Piltik juga memiliki penginapan yang cukup nyaman dan bersih. Dengan fasilitas kamar dan fasilitas umum yang cukup lengkap, seperti restoran yang dapat di kunjungi para pengunjung selama menginap di homestay ini dan perlengkapan kamar yang bersih. 
               Telepon: 0813-7588-7580',
               'lokasi' => 'Jl. Sadar/Sipahutar No. 33, Dusun Parhasioran, Desa Lobusiregar II, Siborongborong, Tapanuli Utara, Siborongborong, Tapanuli Utara, Sumatera Utara, Indonesia.',
               'file_foto' => 'PiltikHomestay.jpg',
               'id_sampul_fasilitas' => '1',
               'id_user' => '1'
            ],
            [ 
               'id_fasilitas' => '49',
               'nama_fasilitas' => 'Noah Hotel Silangit',               
               'deskripsi' => 'Noah Hotel Silangit memiliki taman dan teras di Siborongborong. Fasilitas yang ditawarkan di akomodasi ini meliputi restoran, resepsionis 24 jam, layanan kamar, dan Wi-Fi gratis di seluruh areanya. Tersedia parkir pribadi gratis dan hotel juga menyediakan layanan penyewaan mobil untuk Anda yang ingin menjelajahi daerah sekitarnya. Semua kamar di hotel ini memiliki area tempat duduk, TV satelit layar datar, dan kamar mandi pribadi dengan sandal dan shower. Seprai telah disediakan di setiap kamar. Anda dapat menikmati sarapan prasmanan juga.
               Telepon: 0813-2449-2022',
               'lokasi' => 'Jalan Raya Balige-Tarutung No.77 Silangit Siborong-borong, Muara, Tapanuli Utara, Sumatera Utara, Indonesia.',
               'file_foto' => 'NoahHotel.jpg',
               'id_sampul_fasilitas' => '1',
               'id_user' => '1'
            ],
            [ 
                'id_fasilitas' => '50',
                'nama_fasilitas' => 'Grand Mutiara Hotel Berastagi',               
                'deskripsi' => 'Grand Mutiara Hotel Berastagi terletak di lokasi strategis, hanya dengan 7 menit berjalan kaki dari Mikie Funland. Hotel ini memiliki kamar-kamar dengan pemandangan taman, fasilitas karaoke, dan kolam renang outdoor. Kamu bisa mengakses WiFi gratis di seluruh area hotel. Kamar-kamar luas dan cerahnya memiliki TV layar datar dengan saluran internasional, ruang duduk dan fasilitas pembuat kopi/teh. Tersedia pula air mineral gratis. Ada shower dengan bathtub, pengering rambut dan peralatan mandi di kamar mandi dalamnya. Beberapa kamar memiliki balkon pribadi dengan pemandangan Gunung Sinabung. Restoran di dalam Grand Mutiara Hotel Berastagi menyajikan aneka hidangan, yang bisa dinikmati di dalam atau di pinggir kolam renang. Selain itu, ada pilihan tempat makan lain dalam 10 menit perjalanan dengan mobil, yakni Deep Art Cafe, Jabu Berastagi dan Restoran Asia. Kamu bisa menggunakan fasilitas biliar di Grand Mutiara Hotel Berastagi. Layanan dan fasilitas lain yang ada, di antaranya resepsionis 24 jam dengan penitipan bagasi, concierge, dan ruang pertemuan. Dengan biaya tambahan, kamu juga bisa memanfaatkan layanan laundry dan cuci kering. Bandara Internasional Kualanamu hanya butuh 2 jam perjalanan mobil dari Grand Mutiara Hotel Berastagi. Selain itu, Gunung Sibayak terletak 1,7 km dari hotel. Sedangkan Bukit Gundaling dan Air Terjun Dua Warna mudah dijangkau, tidak sampai 20 menit berkendara saja.
                Telepon: (0628) 91311',
                'lokasi' => 'Jl. Peceren No.168, Berastagi, Kab. Karo, North Sumatra, Indonesia.',
                'file_foto' => 'GrandMutiara.png',
                'id_sampul_fasilitas' => '1',
		        'id_user' => '1' 
             ],
             [ 
                'id_fasilitas' => '51',
                'nama_fasilitas' => 'Hotel Kalang Ulu Berastagi',               
                'deskripsi' => 'Terletak secara strategis di Desa Sempa Jaya, Hotel Kalang Ulu Berastagi berlokasi sejauh 4,8 km dari Puncak Gundaling Brastagi. Hotel ini didekorasi dengan kebun yang rimbun, area lounge bersama di atap dan tersedia pula area parkir pribadi yang dapat digunakan secara gratis. WiFI gratis dapat diakses di seluruh area. Kamarnya dilengkapi dengan furnitur dan lantai kayu. Seluruh kamar dilengkapi dengan AC, TV layar datar dan meja. Kamu juga akan mendapatkan air mineral gratis. Kamar mandi dalam memiliki fasilitas shower, handuk, sandal dan peralatan mandi gratis. Tamu dapat menyantap sarapan khas Amerika yang tersaji setiap pagi di restoran hotel. Di dekat hotel, terdapat Jabu Berastagi sejauh 2,3 km, KFC dalam jarak 5 menit berkendara dan Panorama Resto sejauh 8 menit berkendara dari hotel yang dapat menjadi pilihan tempat makan alternatif. Kamu dapat meminta bantuan kepada resepsionis jika memerlukan fasilitas penyimpanan bagasi atau layanan laundry dengan biaya tambahan. Staf hotel juga akan dengan senang hati membantumu untuk penukaran mata uang.
                Telepon: 0852-2548-1162',
                'lokasi' => 'Jl. Mumpin Tua No.99 (Arah Vihara Dharma Shanti), Desa Sempa Jaya, Berastagi - Karo.',
                'file_foto' => 'HotelKalang.png',
                'id_sampul_fasilitas' => '1',
		        'id_user' => '1'
             ],
            ]);
        }
    }