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
         [
            'id_obj_wisata' => '2',
            'nama_wisata' => 'Air Terjun Efrata',
            'deskripsi' => '
            Air Terjun Efrata merupakan wisata alam yang sangat menarik memiliki ketinggian sekitar 20 meter. Air Terjun Efrata terletak di Sosor Dolok, Harian, Kec. Harian, Kab. Samosir, Sumatera Utara. Lokasi ini sering digunakan menjadi lokasi berkemah karena keindahan alamnya. Pengunjung dapat merasakan kesegaran pancuran air terjun sambil berenang maupun bersantai memandangi ke elokan tebing di sekitar air terjun itu. Air Terjun ini tampak mempesona, dengan debit airnya yang deras. 
            Bagi anda yang hobby berfotografi, anda dapat menyalurkan hobby anda di sekitar objek wisata ini, sebab keindahannya layak untuk di abadiakan di dalam kamera anda. Menurut travelspromo.com, Keindaha panorama yang disajikan oleh air terjun ini memang memukau. Hamparan persawahan yang hijau serta pepohonan yang rindang hanya sebagian kecil panorama alam yang tersaji. 
            Aksesibilitas
            Rute perjalanan menuju wisata ini melalui Samosir, bisa langsung menuju Kecamatan Harian. Setelah itu melanjutkan perjalanan menuju Desa Sosor Dolok. Jarak tempuh menuju lokasi Air Terjun Efrata sekitar 38 km, dengan waktu tempuh sekitar 1 jam 30 menit. Dapat diakses dengan kendaraan roda dua dan roda empat. 
            Fasilitas
            1.	Bagi pengunjung yang tertarik untuk bermain ke Air Terjun ini cukup menyiapkan tiket masuk Rp8.000/orang dan tiket masuk kendaraan Rp2.000.
            2.	Fasilitas yang tersedia di wisata ini berupa toilet, tempat ganti pakaian dan pondok-pondok kecil untuk bersantai.',
            'file_foto' => 'AirTerjunEfrata.jpg',
            'id_obj_wisata_kabupaten' => '1',
            'id_kat_wisata' => '1'
         ],
         [
            'id_obj_wisata' => '3',
            'nama_wisata' => 'Bukit Sibea-bea',
            'deskripsi' => '
            Bukit Sibea-bea merupakan destinasi yang terletak di daerah Samosir pada ketinggian 1.021 meter diatas permukaan laut. Bukit Sibea bea berada di Turpuk Sihotang, Boho, Kec. Harian, Kabupaten Samosir, Sumatera Utara. Bukit ini dikenal sebagai salah satu objek yang memiliki bentuk jalan yang berkelok-kelok dan memiliki Patung Yesus yang masih dalam pembangunan. Patung Yesus di Samosir adalah sebuah patung figur yang dibuat dari material beton dan rangka besi. Patung Yesus yang masih dalam pembangunan tersebuh memiliki tinggi mencapai 61 meter.
            Di sini, wisatawan akan disuguhkan dengan cantiknya pemandangan alam Danau Toba dengan bukit yang mengitarinya dan juga jalanan yang berkelok yang kini jadi spot favorit untuk berfoto. Menuurt idntimes.com, touring menuju puncak bukit akan terasa menyenangkan dan berkesan. Banyak spot yang dijumpai si beberapa titik pandang sepanjang jalanan berkelok. Tidak perlu tancap gas, cukup perlahan sambil menikmati keindahan alam.
            Aksesibilitas
            Untuk menuju Bukit Sibea-bea dapat melalui Medan cukup jauh, yakni sekitar 177 km sekitar 4 jam 30 menit. Wisata ini dapat diakses roda dua dan roda empat. 
            Fasilitas
            1.	Bukit ini menjadi objek wisata yang mematok biaya cukup terjangkau. Tiket Bus Rp150.000, tiket roda 4(mobil) Rp50.000, tiket sepeda motor Rp20.000, penguntung umum Rp5000/orang.
            2.	Di Bukit ini tersedia juga fasilitas lain seperti toilet. ',
            'file_foto' => 'BukitSibeabea.jpg',
            'id_obj_wisata_kabupaten' => '1',
            'id_kat_wisata' => '1'
            ],
            [
                'id_obj_wisata' => '4',
                'nama_wisata' => 'Dolok Pusuk Buhit',
                'deskripsi' => '
                Inews.id - Menurut cerita warga setempat, Pusuk Buhit merupakan gunung yang disakralkan oleh masyarakat Batak. Pusuk Buhit terletak di Pardugul, Kec. Pangururan, Kab. Samosir, Sumatera Utara. Dari puncak Anda bisa menyaksikan keindaha alam yang sangat menakjubkan, bisa melihat hamparan Danau Toba yang sangat luas. Di kaki bukit terdapat kebun bunga Matahari yang menjadi objek favorit pengunjung. Pusuk Buhit sebagai destinasi untuk menghabiskan waktu berlibur menjadi momen paling tepat.
                Tidak hanya itu, batu-batu berukuran sangat besar yang masih menjadi misteri pada bukit ini juga akan menemani perjalanan Anda. Jika beruntuk anda bisa menyaksikan indahnya pemandangan Danau Toba di beberapa titik, serta pegunungan yang mengitarinya.
                Aksesibilitas
                Jaraknya cukup jauh dari pusat kota, kurang lebih berkendara 4-5 jam dari Desa Limbong. Letaknya tepat di pinggir barat Danau Toba, dengan ketinggian sekitar 1.982 meter diatas permukaan laut. 
                Fasilitas
                1.	Untuk masuk ke Pusuk Buhit akan dikenakan tiket seharga Rp10.000.',
                'file_foto' => 'PusukBuhit.jpg',
                'id_obj_wisata_kabupaten' => '1',
                'id_kat_wisata' => '1'
            ],      
            [
                'id_obj_wisata' => '5',
                'nama_wisata' => 'Air Terjun Situmurun Binangalom',
                'deskripsi' => '
                Travelingyuk.com - Air Terjun Sirumurun Binangalom memiliki keindahan alam yang menyejukkan mata. Air Terjun Situmurun Binangalom terletak di Jonggi Nihuta, Lumban Julu, hatinggian, Kec. Lumban Julu, Kab. Toba Samosir, Sumatera Utara. Air terjun ini sangat unik karena aliran airnya yang mengalir deras dan langsung turun menuju Danau Toba. Waktu yang paling tepat untuk mengunjungi air terjun ini adalah pada saat senja sambil menikmati indahnya sunset.
                Air Terjun Situmurun begitu istimewa. Tingginya saja mencapai 70 meter dengan 7 tingkatan. Tak heran bila pesonanya membuat pelancong rela menempuh perjalanan jauh. Anda dapat berenang menikmati segarnya air terjun, bagi  yang tidak terlalu pandai berenang anda tetap bisa menikmati panorama alam dengan duduk santai ditepian yang disediakan oleh pengelola wisata tersebut.
                Aksesibilitas
                Perjalanan menuju Air Terjun Situmurun tergoloong jauh dari perkotaan, apabila anda dari Medan menuju kota Parapat sekitar 4-5 jam. Setiba di Parapat anda bisa turun di Pantai Atsari Hotel, di Pelabuhan Tigaraja dan pelabuhan Ajibata untuk menyewa kapal. Lama perjalanan dari parapat menuju tempat ini sekitar 45 menit. Untuk menuju wisata ini hanyalah jalur transportasi air
                Fasilitas
                1.	Untuk ke tempat ini juga biasanya dengan menyewa kapal yang harganya mulai dari Rp 1.000.000 sampai Rp 2.500.000 tergantung kapasitas dan besar kecilnya kapal. Namun kapal tersebut sudah dapat mengangkut penumpang sekitar 50 sampai 100 orang.
                2.	Di wisata ini bisa melakukan aktivitas lain seperti memancing. ',
                'file_foto' => 'AirTerjunSitumurun.jpeg',
                'id_obj_wisata_kabupaten' => '1',
                'id_kat_wisata' => '1'
            ],
            [
                'id_obj_wisata' => '6',
                'nama_wisata' => 'Aek Rangat Pangururan',
                'deskripsi' => '
                Aek Rangat Pangururan merupakan salah satu destinasi favorit ketika berkunjung ke Pulau Samosir. Aek Rangat Pangururan terletak di Aek Rangat, Kec. Pangururan, Kab. Samosir, Sumatera Utara. Aek Rangat memiliki arti sebagai air panas, karena ini berlokasi tepat pada lereng Gunung Pusuk Buhit yang dikenal masih aktif. Air panas tersebut dialirkan ke kolam-kolam yang dikelola oleh penduduk setempat dan didukung oleh pemerintahan Samosir. Bagi Anda yang berwisata dengan teman-teman atau keluarga, Anda dapat menyarankan untuk menikmati sejenak pemandian air panas disini. 
                Ada beberapa kolam pemandian yang telah tersedia bagi para pengunjung dan diatur pula tingkat panasnya sesuai dengan selera anda. Tidak hanya pesona. Air panasnya yang Anda dapatkan di lokasi ini, namun juga pemandangannya yang memanjakan mata menatap Indahnya Danau Toba. Batuan kapur yang putih tadi sering digunakan beberapa pengujung menjadi spot untuk berphoto bersama teman sekantor, pra-wedding karena background yang putih dan bersih seakan berphoto di salju.
                Aksesibilitas
                Wisata ini jaraknya kira-kira 3 km dari pusat kota Samosir sekitar 15-20 menit, tidak terlalu jauh bila ditempuh dengan berkendaraan.
                Fasilitas
                1.	Jika anda ingin menyewa kolam pemandian selama beberapa jam untuk keluarga  atau teman, maka anda akan dikenakan biaya rentang 50 ribu – 100 ribu.
                2.	Pada wisata ini juga menyediakan rumah makan.',
                'file_foto' => 'AekRangatPangururan.jpg',
                'id_obj_wisata_kabupaten' => '1',
                'id_kat_wisata' => '1'
            ],          
            [
                'id_obj_wisata' => '7',
                'nama_wisata' => 'Air Terjun Sampuran Efrata',
                'deskripsi' => '
                Air Terjun Sampuran Efrata ini merupakan permata tersembunyi di balik perbukitan yang membentang di sekitar Danau Toba. Tempat ini sering digunakan menjadi lokasi berkemah karena keindahan alamnya. Wisata ini terletak di Sosor Dolok, Harian, Kec. Harian, Kab. Samosir, Sumatera Utara. Pengunjung dapat merasakan kesegaran pancuran air terjun sambil berenang maupun bersantai memandangi ke elokan tebing di sekitar air terjun. 
                Air terjun tersebut turun melalui tebing-tebing yang terjal dan curan dengan debit air yang sangat deras, sehingga memenuhi sungai yang mengalir dibawahnya. Tebing-tebing tersebut memiliki tinggi yang mencapai 26 meter dengan kontur yang bertingkat-tingkat dan di dominasi oleh bebatuan cadas berwarna hitam. Menurut visitsamosir.com, Menuju ke destinasi air terjun, di sepanjang perjalanan pengunjung akan disuguhkan pemandangan luar biasa indah. Di kanan dan kiri pengunjung disuguhi pemandangan tebing pegunungan dengan barisan hutan pinus. Tak lama setelahnya hamparan danau Toba dengan barisan gunung dan bukit tampak dari kejauhan.
                Aksesibilitas
                Air terjun Efrata terletak di Desa Sosor Dolok, Kecamatan Harian, sekitar 20 km dari pusat Kabupaten Samosir dan sekitar 20 menit dari menara Pandang Tele. Dari pusat kota kabupaten, menuju ke air terjun Efrata tinggal mengikuti satu jalan aspal menuju Desa Sosor Dolok. Tidak begitu sulit untuk menemukan lokasi ini karena papan penunjuk jalan ada dimana-mana.
                Fasilitas
                1.	Anda bisa mengunjungi air terjun ini setiap hari dari jam 6 pagi sampai dengan jam 7 malam dengan harga tiket masuk Rp8.000/orang dan uang parkir Rp2.000.
                2.	Wisata ini juga menyediakan area perkemahan karena keindahan alamnya.',
                'file_foto' => 'AirTerjunEfrata.jpg',
                'id_obj_wisata_kabupaten' => '1',
                'id_kat_wisata' => '1'
            ],        
            [
                'id_obj_wisata' => '8',
                'nama_wisata' => 'Danau Sidihoni',
                'deskripsi' => '
                Ada yang unik di dalam Pulau Samosir, yaitu adanya danau di dalam danau. Didalam Pulau Samosir terdapat Danau Sidihoni yang terletak di wilayah Desa Sabungan Nihuta, Kec. Longgur Nihuta, Kab. Samosir, Sumatera Utara. Untuk masuk ke Danau Sigihoni ini gratis, bahkan parkir juga gratis. Danau ini juga memiliki pemandangan yang cukup cantik yang memiliki lapangan berumput hijau yang mengelilingi danau ini. Air danaunya juga masih bersih dan jernih, bahkan airnya dimanfaatkan oleh penduduk sekitar untuk kegiatan sehari-hari seperti mandi dan mencuci. 
                Menurut travelingyuk.com, Dari kejauhan Danau Sidihoni memang tampak hanya sekedar seperti kubangan air. Namun jika diperhatikan dengan seksama, pemandangan yang ada di sekitarnya begitu indah. Terdapat banyak tanah lapang hijau dan juga wilayah pepohonan rimbun di sekitarnya. Udaranya sangat sejuk, cocok sekali untuk bersantai.
                Aksesibilitas
                Untuk mencapai wisata ini, dapat melakukan perjalanan melalui Pangururan, danau ini berjarak sekitar 25 menit.
                Fasilitas
                Memasuki kawasan wisata ini tidak dikenakan biaya atau gratis.',
                'file_foto' => 'DanauSidihoni.jpg',
                'id_obj_wisata_kabupaten' => '1',
                'id_kat_wisata' => '1'
            ],
            [
                'id_obj_wisata' => '9',
                'nama_wisata' => 'Menara Pandang Tele',
                'deskripsi' => '
                Menara Pandang Tele sangat cocok bagi anda yang memiliki hobby fotografi atau sekedar ingin berselfie. Menara Pandang Tele terletak di turpuk Limbong, Kec. Harian, Kab. Samosir, Sumatera Utara. Tak hanya sekedar mendapatkan pengalaman memandang alam Toba dari ketinggian, pengunjung bisa melakukan beragam aktivitas wisata ketika berada di objek wisata ini. Pengunjung juga dapat memandang danau Toba dari tempat terbaik dengan menaiki menara pandang tersebut. 
                Menurut travelspromo.com, Tak hanya menyajikan pemandangan alam semata, pemerintah setempat membangun sebuah tempat beristirahat bagi para wisatawan yang datang. Fasilitas ini sering disebut sebagai rest area. Rest Area memiliki bangunan seluas 241 meter yang terdiri dari 2 lantai. Selain itu, terdapat juga sejarah menara pandang tele, tepatnya di depan menara tersebut.
                Aksesibilitas
                Lokasi menara pandang ini hanya berjarak 15 menit dari air terjun Sampuran Efrata. 
                Fasilitas
                1.	Untuk dapat menikmati panorama indah Danau Toba dari atas menara pandang, pengunjung hanya perlu membayar tiket sebesar Rp7.000 perorang.
                2.	Di sekitar  menara pandang pengunjung juga dapat berburu kuliner batak di Rest Area.',
                'file_foto' => 'MenaraPandangTele.jpg',
                'id_obj_wisata_kabupaten' => '1',
                'id_kat_wisata' => '3'
            ],      
            [
                'id_obj_wisata' => '10',
                'nama_wisata' => 'Desa Lumban Suhi-suhi',
                'deskripsi' => '
                Desa Lumban Suhi-Suhi memperkenalkan kain tenun khas Batak yang sudah mendunia, yaitu kain ulos. Desa Lumban Suhi-Suhi terletak di Lumban Suhi Suhi Toruan, Kec. Pangururan, Kab. Samosir, Sumatera Utara. Pengrajin ulos di desa ini adalah masyarakat sekitar yang terdiri dari ibu-ibu dan gadis menggunakan tangan dan alat tenun. Ulos yang dihasilkan dari desa ini sudah cukup terkenal baik Nasional maupun Internasional. 
                Pembuatan ulos membutuhkan 1-4 minggu, tergantung jenis kain dan tingkat kerumitannya. Semakin bagus kain dan tingkat kerumitannya yang tinggi maka harga akan semakin mahal. Harga ulos di desa ini mulai dari Rp300.000 – Rp5.000.000. Ulos memiliki 12 motif, antara lain: motif sadum, motif Sibolang, motif Bintang Maratur, motif Jugia, motif Lobu-lobu, motif Suri Suri Ganjang, motif Runjat, motif Jungkit, motif Ragidup, motif Ragihotang, motif mangiring dan motif sitoluntuho-Bolean. Kain Ulos bagi masyarakat batak digunakan untuk beberapa acara seperti: acara adat, pernikahan, pemakaman, dan pesta marga.
                Aksesibilitas
                Menuju desa ini dapat berjalan melalui Desa Tomo menempuh waktu 40 menit. Jika perjalanan dari Medan – Parapat waktu tempuh sekitar 4 jam, dan melalui penyeberangan Parapat (pelabuhan Ajibata) – Pulau Samosir (Pelabuhan Ambarita) sekitar 45 menit menggunakan ferry. Dari Pelabuhan Ambarita menuju Desa Lumban Suhi-suhi sekitar 40 menit.
                Fasilitas
                Masuk ke Desa Lumban Suhi-Suhi tidak dikenakan biaya masuk.',
                'file_foto' => 'LumbanSuhi-Suhi.jpg',
                'id_obj_wisata_kabupaten' => '1',
                'id_kat_wisata' => '2'
            ],   
            [
                'id_obj_wisata' => '11',
                'nama_wisata' => 'Museum Batak',
                'deskripsi' => '
                Museum Batak situs bersejarah yang memiliki koleksi peninggalan budaya batak. Museum ini terletak di Tomok, kec. Simanindo, Kab. Samosir, Sumatera Utara. Museum Batak Tomok ini punya koleksi yang cukup beragam Barang-barang koleksinya seperti peralatan perang, peralatan pertanian dan mata pencaharian penduduk, hingga peralatan sehari-hari seperti peralatan dapur dan rumah tangga. Selain itu juga terdapat barang-barang yang cukup khas seperti topeng kayu, patung kayu, berbagai jenis ukiran, alat tenun dan kain ulosnya dengan berbagai motif, buku dengan aksara Batak, tongkat Batak, hingga puluhan benda-benda lainnya
                Menurut travel.tempo.co, Di bagian dalam 10 rumah adat Batak Toba. Uniknya terdapat 10 tanduk kerbau di atas atapnya. Menunjukkan 10 generasi dalam marga Batak. Di bagian inilah biasanya digelar pertunjukan Sigale-gale. Tarian boneka kayu dengan iringan musik tradisional dan para penari. Setiap harinya, pertunjukan ini digelar dua kali, yakni  pada pukul 10.30 dan pukul 11.45, kecuali hari Minggu hanya satu kali yakni pukul 11.45. Kebanyakan memang turis asing yang ikut menonton, bahkan di akhir pertunjakan pun dengan semangat ikut menari tortor. 
                Aksesibilitas
                Dari Dermaga Tomok, tempat kapal-kapal feri berlabuh, jaraknya sekitar 20 kilometer. Atau bisa dicapai dalam 30 menit.
                Fasilitas
                Untuk masuk ke museum ini tidak dipungut biaya.',
                'file_foto' => 'MuseumBatak.jpg',
                'id_obj_wisata_kabupaten' => '1',
                'id_kat_wisata' => '2'
            ],   
            [
                'id_obj_wisata' => '12',
                'nama_wisata' => 'Museum Huta Bolon Simanindo',
                'deskripsi' => '
                Museum Huta Bolon Simanindo merupakan umah adat warisan Raja Sidauruk. Museum ini terletak di Jl. Pelabuhan Simanindo, Simanindo Sangkal, Kec. Simanindo, Kab. Samosir, Sumatera Utara. Menurut getlost.id, Ada beberapa area yang bisa kamu kunjungi. Pertama, museum yang menyimpan berbagai peninggalan budaya suku Batak, mulai dari pakaian adat, perhiasan, peralatan memasak, peralatan tenun, persenjataan, porselen Belanda dan Tiongkok, hingga patung dan ukiran khas Batak.
                Koleksi museum ini berupa peninggalan leluhur orang Batak Toba, seperti parhalaan, pustaha laklak, tunggal panaluan, dan solu bolon. Di museum ini anda juga dapat menjumpai patung Batak yang terkenal yaitu si gale-gale. Anda tak hanya dapat melihat langsung keelokan para penari, namun juga menyaksikan patung sigale-gale setinggi 1,5 meter yang mengenakan pakaian adat dan meliuk-liuk mengikuti alunan musik sehingga sekilas mirip manusia.
                Aksesibilitas
                Untuk mencapai museum ini anda perlu melakukan 45-50 menit perjalanan dari pusat Kabupaten Samosir.
                Fasilitas
                Museum ini bisa dikunjungi setiap hari dari pukul 9 pagi hingga pukul 5 sore dengan harga tiket Rp10.000.',
                'file_foto' => 'MuseumHutaBolon.jpg',
                'id_obj_wisata_kabupaten' => '1',
                'id_kat_wisata' => '2'
            ],   
            [
                'id_obj_wisata' => '13',
                'nama_wisata' => 'Aek Sipitu Dai',
                'deskripsi' => '
                Sumber mata air Aek Sipitu Dai ini terletak di Desa Aek Sipitu Dai. Terdapat tujuh pancuran mata air yang mempunyai rasa berbeda-beda. Aek Sipitu Dai terletak di Kec. Sianjur mula mula, Kab. Samosir, Sumatera Utara. Tujuh mata air ini dibagi menjadi dua ruangan, empat pancuran berada di ruang perempuan sementara sisanya di tempat khusus laki-laki. Sejak dulu mata air ini dianggap sakral, sehingga banyak yang datang untuk melakukan ritual tertentu. 
                Tujuh mata air ini punya karakteristik yang berbeda. Dari mata air pertama air yang keluar agak asin, kemudian yang kedua sedikit bersoda, pancuran ketiga punya air sedikit pahit, dan yang ke empat mirip dengan mata air kedua namun dengan rasa soda yang lebih banyak. Mata air kelima agak sedikit rawar, mata air yang keenam juga bersoda, dan yang ketujuh airnya terasa sedikit pahit. Aek Sipitu Dai dipercayai dapat mengabulkan permintaan.
                Aksesibilitas
                Untuk mencapai tempat ini memiliki jarak tempuh sekitar 10 mm dari ibu kota Pangururan.
                Fasilitas
                1.	Boleh membawa pulang air tersebut jika membawa botol, jika tidak membawa botol ada warung yang menyediakan jeriken plastik yang bermuatan 5 liter air. Harganya hanya Rp 10 ribu per buah.
                2.	Menyediakan tempat mandi.
                3.	Tidak jarang, penduduk di sana melakukan ritual demi menjaga kelestarian sumber mata air ini. Bagi pengunjung yang ingin merasakan khasiat dari air Aek Sipitu Dai ini, juga diwajibkan mengikuti ritual di tempat tersebut. Pengunjung harus memanjatkan doa sambil meletakkan jeruk purut dan sirih di antara tujuh mangkuk putih di sana.',
                'file_foto' => 'AekSipituDai.jpg',
                'id_obj_wisata_kabupaten' => '1',
                'id_kat_wisata' => '2'
            ], 
            [
                'id_obj_wisata' => '14',
                'nama_wisata' => 'Tanjung Unta',
                'deskripsi' => '
                Wisata Tanjung Unta merupakan salah satu destinasi pariwisata yang terletak di Nagari Desa Sipolha, Kec. Sidamanik, Kab. Simalungun, Sumatera utara. Berdasarkan cerita yang beredar di masyarakat sekitar, pemberian nama ini dari Bapak Muhammad Hatta (wakil Presiden RI pertama) yang pada waktu itu berkunjung ke danau toba. Wisata ini memiliki panorama eksotis dan instagenik.
                Tanjung unta yang berada di sisi timur Danau Toba dan menjorok ke Danau Toba yang dimana bentuk dari tanjung tersebut seperti unta yang sedang beristirahat. Kegiatan yang dapat dilakukan di tanjung unta adalah berkemah, memancing, dan lain-lain.
                Aksesibilitas
                Lokasi wisata ini dari Pematang Siantar adalah 61 km atau jika berjalan dari Medan jarak untuk ke wisata ini sekitar 109 km.
                Fasilitas
                Di wisata ini menyediakan area camping dan toilet.',
                'file_foto' => 'TanjungUnta.PNG',
                'id_obj_wisata_kabupaten' => '4',
                'id_kat_wisata' => '1'
            ],   
            [
                'id_obj_wisata' => '15',
                'nama_wisata' => 'Bukit Indah Simarjarunjung',
                'deskripsi' => '
                Puncak Simarjarunjung adalah tempat favorit bagi para pecinta alam di Sumatera Utara. Lokasi Puncak Simarjarunjung di Jl. Simarjarunjung, Butu Bayu Pane Raja, Dolok Pardamean, Kabupaten Simalungun, Provinsi Sumatera Utara. Pengunjung dapat melihat indahnya sunset dan sunrise dari puncak bukit ini. Selain itu, pengunjung juga dapat memandang keindahan daerah sekitar Danau Toba. Pengunjung juda akan menemukan pemandangan hijau perkebunan the saat berjalan menuju puncak. 
                Angin yang berhembus di kawasan ini sangat kencang dan terasa dingin. Pengunjung yang sering mendatanggi puncak ini adalah para pemuda pecinta alam yang mengadakan kegiatan camping. Menurut wesata.id, bukit Simarjarunjung menjadi spot yang tepat buat menikmati keindahan Danau Toba dari ketinggian. ak dapat dipungkiri bahwa salah satu daya tarik sebuah tempat wisata, selain pemandangan dan nilai historinya, adalah spot-spot foto cantik yang ditawarkan. Di zaman sekarang, keberadaan spot foto cantik menjadi salah satu magnet seseorang mengunjungi suatu tempat wisata.
                Aksesibilitas
                Aksesibilitas menuju wisata ini dapat melewati Jl. Pematang Purba – Parapat dan jl. Asahan.
                Fasilitas
                1.	Untuk masuk ke wisata ini, perlu untuk membayar tiket masuk dengan beberapa jenis tiket yaitu:
                        o	Tiket masuk mobil dengan harga Rp30.000.
                        o	Tiket masuk motor dengan harga Rp10.000.
                        o	Tiket Pohon Cinta, Bulan, I Love BIS Rp5.000.
                        o	Tiket wahana sepeda roda 2 Rp20.000.
                        o	Tiket Wahana sepeda roda 2 untuk 2 orang Rp30.000.
                        o	Tiket Wahana Becak Rp20.000.
                        o	Tiket Wahana Becak untuk 2 orang Rp30.000.
                2.	Untuk berkunjung ke BIS tidak perlu khawatir jika anda dan keluarga anda tidak membawa makanan, disana disediakan kantin atau tempat makan.
                3.	Jika anda ingin membawa kenangan dari wisata BIS, anda bisa membeli cinderamata dari tokonya.
                4.	Selain itu ada juga fasilitas yang di sediakan di tempat ini seperti pondok-pondok, tempat berkemah, dan toilet.
                5.	Anda ingin menikmati suasana di lokasi wisata dengan bermalam, anda bisa menginap di penginapan yang disediakan di tempat ini, dengan tarif mulai dari Rp300.000 – Rp400.000.',
                'file_foto' => 'BukitIndahSimarjarunjung.jpg',
                'id_obj_wisata_kabupaten' => '4',
                'id_kat_wisata' => '1'
            ],     
            [
                'id_obj_wisata' => '16',
                'nama_wisata' => 'Air Terjun Katasa',
                'deskripsi' => '
                Air Terjun Katasa disebut juga Air Terjun Kembar. Air Terjun Katasa berada di Kec. Hatonduan. Air Terjun Katasa memiliki keunikan ini adalah kedua air terjun tersebut tidak saling menyatu atau saling bersentuhan. Pemandangan yang bagus ditambah asir putih yang ada disekitar air terjunnya, sehingga menambah kesan yang indah saat berfoto di tempat ini.
                Menurut travel.detik.com, Air Terjun Katasa dijuluki juga sebagai Air Terjun Kembar karena air terjunnya memang memiliki dua aliran air terjun yang berasal dari dua aliran sungai yang berbeda yaitu Sungai Balah dan Sungai Turunan. Kedua aliran ini jauh di tempat yang sama namun kedua aliran ini terpisah beberapa meter dan tidak menyatu. Air Terjun Katasa adalah sebuah air terjun kembar yang tak sama.Keunikan lain adalah Air Terjun Katasa adalah adanya pulau pasir di dekat kolam air terjun. Pulau pasir ini berwarna putih bersih dan membuatnya terasa seperti pantai, padahal berada di air terjun.
                Aksesibilitas
                Jika dari Pematang Siantar bisa melewati Tanah Jawa lalu ke Hatonduan menuju negeri bayu bagasan lalu memasuki area perkebunan kelapa sawit PTPN. Di setiap persimpangan tersebut terdapat penunjuk arah, namun di beberapa persimpangan, tidak terlihat adanya penunjuk arahnya.
                Fasilitas
                Di wisata ini masih kurang dalam fasilitas, karena hanya tersedia area parkir saja.',
                'file_foto' => 'AirTerjunKatasa.jpg',
                'id_obj_wisata_kabupaten' => '4',
                'id_kat_wisata' => '1'
            ],  
            [
                'id_obj_wisata' => '17',
                'nama_wisata' => 'Air Terjun TOnduhan',
                'deskripsi' => '
                Air Terjun Tonduhon berada di dalam area perkebunan kelapa sawit PTPN IV Pemandangan air terjun ini cukup indah dan menyegarkan, aliran air terjunya yang deras nampak terbagi dua karena adanya batu yang menonjol di puncak air terjun. Banyak yang mengatakan kalau Air Terjun Tonduhan sama seperti Air Terjun Sipiso-piso. Air Terjun ini berasal dari Air Sungai Bah Kapasu. Tinggi air terjun ini sekitar 30 meter, dan disekitar air terjun ini kita dapat berenang. 
                Di sekitar Air Terjun Tonduhan terdapat bebatuan yang menambah keindahan Air Terjun Tonduhan. Pasir putihnya terhampar begitu indah.
                Aksesibilitas
                Hatonduan dan berjarak sekitar 33 kilometer dari kota Pematang Siantar. Jika Ditempuh dari kota Medan sekitar 157 kilometer atau 3 jam.
                Fasilitas
                Di Air Terjun Tonduhan cocok untuk tempat bersantai dan bisa mancing ikan juga.',
                'file_foto' => 'AirTerjunTonduhan.jpg',
                'id_obj_wisata_kabupaten' => '4',
                'id_kat_wisata' => '1'
            ],    
            [
                'id_obj_wisata' => '18',
                'nama_wisata' => 'Pemandian Aek Manik',
                'deskripsi' => 'Pemandian ALam Aek Manik atau nama lainnya yaitu Pemandian lam bah Damanik. Pemandian Alam Aek Manik ini terletak di Ambarisan, Sidamanik, Kabupaten Simalungun, Sumatera Utara. Jarak tempuh dari medan sekitar 150 kilometer dengan kisaran watu 4 jam perjalanan. Aek Manik terlihat biru, jernih dan sejuk. Keberadaan pepohonan rindang di sekitar kolam, membuat suasana tidak terasa panas bahkan terasa sejuk walaupun siang hari. 
                Pada pinggiran pemandian terdapat jalan setapak yang bisa dijadikan untuk tempat berfoto, jika anda malas membasahi diri ke dalam kolam. Mulanya pemandian ini merupakan aliran sungai biasa, jika melihat dasar kolam maka akan terlihat hamparan pasir putih seperti pasir pantai yang sangat lembut dan beberapa bebaruan pegunungan berbagai ukuran, sehingga memberikan suasana asri memesona.
                Aksesibilitas
                Untuk menuju ke Aek Manik, jika saat anda sudah sampai di pusat kota Siantar, selanjutnya anda mengambil rute ke arah Parapat hingga menemukan simpang 3. Silahkan belok ke kanan uuntuk menuju ke Sidamanik, dari sini sekitar 45 menit untuk sampai ke lokasi Aek Manik.
                Fasilitas 
                1.	Harga tiket masuk untuk dewasa sebesar Rp5.000, dan untuk tiket masuk anak sebesar Rp2.000.
                2.	Tersedia juga kamar mandi, tempat ganti, warung makan, hingga pelampung ban
                3.	Tersedia rumah tradisional yang terbuat dari kayu dan bambu agar pengunjung dapat berteduh.
                4.	Dapat melakukan camping dan barbeque di tempat ini bagi pengunjung yang ingin menikmati suasana Aek Manik.',
                'file_foto' => 'PemandianAlamAekManik.jpg',
                'id_obj_wisata_kabupaten' => '4',
                'id_kat_wisata' => '1'
            ],  
            [
                'id_obj_wisata' => '19',
                'nama_wisata' => 'Air Tejun Bah Biak',
                'deskripsi' => '
                Air Terjun Bah Biak terletak di kawasan Kebun Teh butong atau disebut juga Kebun Teh Sidamanik, Kab. Simalungun, Sumatera Utara. Letak Air Terjun Bah Biak di kawasan kebun the dan perkebunan kopi, menjadikan lokasi wisata ini sangat cocok bagi mereka yang sudah penat dengan nuansa kota dan tumpukan pekerjaan yang tiada hentinya. Udara di sekitar air terjun sangat menyejukkan, panorama pemandangan semakin memanjakan mata yang melihat. Di sisi lain, pepohonan dan hijaunya rerumputan menjadikan keteduhan bagi anda yang sedang berjalan menuju Air Terjun Bah Biak.
                Aksesibilitas
                Untuk menuju air terjun ini anda bisa memilih 2 rute, yaitu dari Pematang Siantar dan dari Tiga Runggu. Jika dari Medan dan Parapat anda bisa melalui rute Pematang Siantar karena akan lebih dekat. Sementara bagi anda yang berada di Tanah Karo atau Dairi anda bisa melalui rute Tiga Runggu. Jarak air terjun ini dari jalan raya sekitar 1 kilometer. Saran dari ninna.id, anda harus memperhatikan cuaca sebelum ke sini. Jika hari hujan, sebaiknya jangan ke sini mengingat Bah Biak dikelilingi sungai. Siapa tahu seketika sungai bisa meluap dan semburan air terjun membesar, bisa malah berbahaya.
                Fasilitas
                1.	Harga tiket masuk ke Air Terjun bah biak dengan harga Rp2.000/orang, harga tiket motor Rp5.000, harga tiket mobil Rp10.000. 
                2.	Fasilitas lain terdapat mushola, toilet, area berenang, pondok, warung dan area permainan anak-anak.',
                'file_foto' => 'AirTerjunBahBiak.jpg',
                'id_obj_wisata_kabupaten' => '4',
                'id_kat_wisata' => '1'
            ], 
            [
                'id_obj_wisata' => '20',
                'nama_wisata' => 'Pemandian Alam Swimbath Bahapal',
                'deskripsi' => '
                Pemandian Alam Swimbath adalah sebuah kolam renang alami, dimana sumber airnya berasal dari mata air yang begitu jernih. Wisata ini terletak di Bundah Huluan, Kab. Simalungun, Sumatera Utara. Simbath mempunyai arti berenang dan mandi. Nama itu diberikan oleh Belanda. Sejak awal didirikan hingga sekarang, tujuan utama pengunjung datang ke kolam renang ini adalah untuk berendam sembari rekreasi. 
                Air-air bersih dari pegunungan yang mengisi kolam selau bergantian setiap detik sehingga pengunjung tak perlu khawatir soal kebersihannya. Dengan kedalaman kolam sekitar 30-70 cm, Anda bisa tenang selama berada di kawasan rekreasi ini. Menurut pariwisatasumut.net, selain air jernih seperti kilauan kristal cair, anda akan disajikan dengan panorama hijau yang aduhai indahnya di Swimbath. Pepohonan rimbun berbatang kokoh memancarkan potret alam yang benar-benar meneduhkan.
                Aksesibilitas
                Akses ke lokasi dapat dilalui dengan melintasi jalan ke Pematang Siantar, setibanya di Dolok Merangin, kemudian putar arah kendaraan ke arah kiri dan teruskan ke desa Nagori Soppa seputaran Bahapal.
                Fasilitas
                1.	Harga tiket masuk ke pemandian alam Swimbath Bahapal adalah Rp5.000/orang, sewa ban kecil Rp5.000, sewa ban besar Rp10.000, sewa pondok Rp10.000.
                2.	Terdapat fasilitas lain seperti pondok, area pemandian anak dan dewasa terpisah dan juga tempat makanan.',
                'file_foto' => 'PemandianAlamSwimbathBahapal.jpg',
                'id_obj_wisata_kabupaten' => '4',
                'id_kat_wisata' => '1'
            ],  
            [
                'id_obj_wisata' => '21',
                'nama_wisata' => 'Pemandian Alam Sejuk PAS',
                'deskripsi' => '
                Pariwisatasumut.net - Pemandian Alam Sejuk Pas merupakan wisata pemandian dengan air segar yang dikelola oleh warga. Lokasi pemandian ini di Mariah Jambi Batu km 8, tepatnya di Dolok Hataran. Pemandian Alam Sejuk sangan menggoda karena aliran air langsung bersumber dari mata air sehingga terlihat begitu jernih dan tentu bersih. Selain itu hijaunya alam di sekitar lokasi juga menjadi daya tarik bagi wisatawan. 
                Pemandian Alam Sejuk juga menyediakan berbagai wisata olahraga yang menantang adrenalin. Ada satu permainan yang tidak boleh anda lewatkan, wisata olahraga dapat juga dilakukan di tempat ini, seperti flying fox misalnya yang dipandu langsung oleh instruktur profesional. Menurut akuntt.com, hijaunya alam di tempat wisata Pemandiam Alam Sejuk juga menjadi daya tarik para wisatawan/pengunjung. Jadi sangat wajar bila ada banyak wisatawan, yang sengaja datang ke sini hanya untuk melihat-lihat pemandangan alamnya saja. Ditambah suara riuh kicauan burung-burung yang beterbangan kesana-kemari diantara pepohonan dengan suaranya yang merdu semakin menambah suasana khas alam bebas yang begitu eksotis.
                Aksesibilitas
                Pemandian Alam Sejuk berjarak sekitar 13 kilometer dari kota Pematanng Siantar. Transportasi roda dua ataupun roda empat dapat digunakan untuk menempuh perjalanan ke PAS, akan tetapi harus tetap hati-hati karena harus melewati perkebunan sawit sehingga jalanan sedikit rusak.
                Fasilitas
                1.	Harga tiket masuk adalah Rp2.000, sementara biaya parkir sebesar Rp1.000.
                2.	Terdapat pondok untuk istirahat, dan kolam pemandian. Selain itu ada juga tempat makan untuk berkuliner.
                3.	Tempat wisata ini menyediakan flying fox yang dipandu oleh pemandu profesional.',
                'file_foto' => 'PemandianAlamSejukPas.jpg',
                'id_obj_wisata_kabupaten' => '4',
                'id_kat_wisata' => '1'
            ],   
            [
                'id_obj_wisata' => '22',
                'nama_wisata' => 'Kawah Putih Tinggi Raja',
                'deskripsi' => '
                Kawah Putih Tinggi Raja merupakan objek wisata bertemakan alam yang sudah berumur ratusan tahun. Wisata ini terletak di Dolok Marawa, Silau Kahean, Kab. Simalungun, Sumatera Utara. Berada di area cagar Alam Dolok Tinggi Raja, bagi orang uang belum pernah ke area tersebut tidak akan menyangka bahwa di dalamnya terdapat pesona pemandangan kawah yang luar biasa. Di sana para wisatawan akan menyaksikan keindahan kolam – kolam air panas yang berwarna biru kehijau-hijauan di tengan belerang panas. 
                Kawah Putih Tinggi Raja terbentuk dari panas bumi yang mengandung belerang, kemudian membentuk bukit kapur putih dengan sumber air panas bersuhu 90 derajat celcius.
                Aksesibilitas
                Lokasi wisata air panas yang memiliki luas 4 hektar dan masih alami ini dapat dijangkau dengan menggunakan roda empat maupun roda dua selama kurang lebih 3 – 4 jam dari kota Medan.
                Fasilitas
                Fasilitas objek wisata ini masih sangat minim dan belum ada penginapan bahkan warung makan. Menurut directoripariwisata.id, alangkah baiknya bila anda membawa bekal makanan sendiri dari rumah.',
                'file_foto' => 'KawahPutihTinggiRaja.jpg',
                'id_obj_wisata_kabupaten' => '4',
                'id_kat_wisata' => '1'
            ], 
            [
                'id_obj_wisata' => '23',
                'nama_wisata' => 'Bukit Gundul (Sipiso-piso)',
                'deskripsi' => '
                Bukit Gundul terkenal sebagai tempat untuk berkemah dengan pemandangan indah dari atas bukit melihat hamparan Danau Toba. Wisata ini berlokasi di Naga Mariah, Pematang Silimahut, Kab. Simalungun, Sumatera Utara. Bukit ini berada di kawasan Air Terjun Sipiso-piso. Berada di Bukit gundul, anda tidak hanya dapat menikmati keindahan Danau Toba dari ketinggian 1.900 mdpl saja. Wisatawan juga dapat menimati pemandangan air terjun Sipiso-piso. 
                Untuk mendapatkan lautan awan yang menyelimuti Danau Toba, wisatawan bisa datang ke bukit ini pukul 05.30. Jangan lewatkan pula berburu sunrise pada pagi hari. Menurut pariwisatasumut.net, jika matahari sudah muncul dari sisi barat danau toba, terlihat samudera awan yang epik. Tetapi, tidak selalu ada.
                Aksesibilitas
                Untuk mencapai bukit ini, Anda harus menempuh perjalanan sekitar 2- 3 jam dari kota Medan. Bukit Gundul memiliki jalur pendek yang hanya membutuhkan waktu sekitar 1 jam dari pos hingga puncak.
                Fasilitas
                1.	Harga masuk ke bukit gundul ini sebesar Rp5.000 per orang dan biaya camping sebesar Rp10.000. Jika ingin berkemah, anda perlu membawa perlengkapan sendiri karena tidak ada penyewaan. 
                2.	Fasilitas yang lain adalah toilet dan kamar mandi.',
                'file_foto' => 'BukitGundul.jpg',
                'id_obj_wisata_kabupaten' => '4',
                'id_kat_wisata' => '1'
            ],   
            [
                'id_obj_wisata' => '24',
                'nama_wisata' => 'Simatahuting Pool',
                'deskripsi' => '
                Pemandian Alam Simatahuting adalah sebuah kolam dimana airnya berasal dari mata air alami yang begitu jernih dan dingin. Pemandian ini terletak di Ambarisan, Sidamanik, Kab. Simalungun, Sumatera Utara. Pemandian Alama Simatahuting bersebelahan dengan Pemandian Bah Damanik. Sehingga tidak sulit untuk mencari tahu keberadaan pemandian ini. 
                Air yang begitu jernih, membuat Anda betah berlama-lama berendam di kolam pemandian tersebut, meski airnya yang begitu dingin. Pemandian Aek Simatahuting sangat menarik untuk di kunjungi, karena para penduduk setempat menata pemandian ini dengan baik, dan tidak mengurangi kealamian pemandian ini. 
                Aksesibilitas
                Fasilitas
                1.	Tiket untuk masuk juga relatif murah karena hanya perlu membayar Rp5.000/orang untuk dewasa, dan Rp2.000/orang untuk anak-anak.
                2.	Fasilitas wisata juga baik, memiliki parkiran yang cukup luas, warung makan, pondok dan toilet umum.',
                'file_foto' => 'Simatahuting.jpg',
                'id_obj_wisata_kabupaten' => '4',
                'id_kat_wisata' => '1'
            ],    
            [
                'id_obj_wisata' => '25',
                'nama_wisata' => 'Air Terjun Binanga Bolon',
                'deskripsi' => '
                Air Terjun Binangan Bolon adalah salah satu air terjun yang ada di Kabuppaten Simalungun, tepatnya berada di Kecamatan Haranggaol nagori purba pasir. Air Terjun ini memiliki arus yang cukup deras, bahkan dari jarak yang cukup jauh dari air terjun sekalipun kita bisa terkena cipratan kecil dari air yang jatuh. Air Terjun ini memiliki tinggi mencapai 80 meter, sedangkan lebarnya sekitar 4 meter. Sekeliling air terjun ini ditumbuhi pohon bambu dan semak belukar hijau yang biasanya ditemukan di pinggir tanah basah. Untuk sampai ke dasar air terjun, pengunjung wajib trekking selama 25 menit.
                Menurut pariwisatasumut.net, debit air yerjun lumayan deras tak henti. Bahkan saat berdiri jauh, percikan air bermunculan dari hantaman air yang jatuh dari tebing. Sekilas, pemandangan itu menyerupai kabut basah yang indah. Lantaran relatif sunyi, Anda dapat sepuasnya menikmati keelokan di depan mata. Entah berendam di pinggir kolam alaminya atau mengabadikan dengan kamera.
                Aksesibilitas
                Lokasi air terjun ini berada di sekitar permukiman warga, untuk ke air terjuun ini dibutuhkan waktu sekitar 3 jam dari siantar. Untuk ketempat ini dapat melewati Medan dengan jarak 179 kilometer sekitar 5-6 jam. Perjalanan ke temat wisata ini melewati beberapa desa seperti Liang Deak Horison. Rute tercepat dapat diambil dari arah Pematangsiantar atau Purba Sipinggan hingga ke Saribu Dolok. Dari Saribu Dolok jaraknya hanya sekitar 25,2 kilometer.
                Fasilitas
                Untuk biaya masuk sama sekali tidak ada. Pengunjung dapat membawa perlengkapan pribadi.',
                'file_foto' => 'AirTerjunBinangaBolon.jpg',
                'id_obj_wisata_kabupaten' => '4',
                'id_kat_wisata' => '1'
            ],        
            [
                'id_obj_wisata' => '26',
                'nama_wisata' => 'Kebun Teh Sidamanik',
                'deskripsi' => '
                Kebun Teh Sidamanik berada di Kabupaten Simalungun, Sumatera Utara. Tempat ini merupakan salah satu destinasi wisata yang banyak dikunjungi oleh banyak orang. Karena saat mengunjunginya, mata kita akan dimanjakan dengan hamparan hijau perkebunan teh yang luas. Selain itu suasana di tempat ini juga sangat membuat kita nyaman, dengan keasriannya dan kerapian yang dijaga. Kebun ini sendiri terbagi dalam tiga kawasan, yaitu Kebun Teh Bah Butong, Kebun Teh Tobasari dan yang terakhir Kebun Teh Sidamanik. Semua kawasan menyajikan keindahan alam yang sama yang pastinya tidak akan mengecewakan setiap orang yang berkunjung. 
                Bagi wisatawan yang datang ke kebun teh ini pada pagi hari, biasanya akan bertemu dengan beberapa petani yang tengah memetik daun teh. Di kebun teh ini juga disediakan beberapa peralatan untuk memanen daun teh, bagi wisatawan yang ingin berfoto ala petani teh yang sedang memanen. Saat mengunjungi destinasi wisata yang satu ini, pastikan kalian tidak pulang dengan tangan kosong ya. Pastikan kalian membawa oleh-oleh berupa daun teh asli yang sudah dikemas dalam bungkusan.
                Aksesibilitas
                Wisata ini berjarak kurang lebih 500 meter dari pusat kota sidamanik. 
                Fasilitas
                1.	Bagi wisatawan yang datang ke kebun teh ini pada pagi hari, biasanya akan bertemu dengan beberapa petani yang tengah memetik daun teh. Wisatawan bisa ikut memetik pucuk daun teh tersebut di tengah suasana sejuk. Cukup dengan membayar sekitar Rp5.000, wisatawan bisa berfoto sepuasnya di kebun teh ini. 
                2.	Untuk masuk ke lokasi kebun, pengendara dikenakan biaya masuk Rp10.000 untuk roda empat dan Rp5.000 roda dua.',
                'file_foto' => 'KebunTehSidamanik.jpg',
                'id_obj_wisata_kabupaten' => '4',
                'id_kat_wisata' => '3'
            ],   
            [
                'id_obj_wisata' => '27',
                'nama_wisata' => 'Hutan Lindung Aek Nauli',
                'deskripsi' => '
                Hutan Lindung Aek Nauli tidak hanya dapat dijadikan sebagai tempat wisata alam tetapi juga sebagai tempat edukasi dengan adanya berbagai flora dan fauna di dalamnya. Tempat ini berlokasi di Jl. Raya Parapat, Sibaganding, Girsang Sipangan Bolon, Kab. Simalungun, Sumatera Utara. Selain menikmati flora dan fauna, anda juga dapat menikmati pemandangan alam yang indah seperti pemandangan Danau Toba yang dapat terlihat dari ketinggian 1.100-1.750 meter diatas permukaan laut. Menurut daftar.co, Beberapa tanaman endemik yang dapat Anda temukan di hutan lindung ini antara lain adalah Dacrydium Junghunii, Stryrax benzoin, Macadamia sp, Pinus Merkusii, dan tanaman lainnya. Selain itu, terdapat juga tanaman hias yang dapat dijadikan alternatif pilihan jenis tanaman hias di tempat anda. 
                Banyaknya jenis ekosistem flora dan fauna yang terdapat di hutan lindung Aek Nauli ini dapat dijadikan alternatif wisata Anda dan keluarga atau kunjungan studi dari sekolah atau kelompok belajar lain. Di sisi lain, selain sebagai tempat wisata, hutan ini juga sebagai tempat penelitian untuk beberapa pihak yang bertujuan untuk pelestarian flora dan fauna di dalamnya.
                Aksesibilitas
                Menurut nebulasolution.net, rute pertama adalah dari Medan (Bandara Kuala Namu) – Pematangsiantar – Parapat dengan jalan darat sepanjang + 154 km dengan lama perjalanan sekitar 4 - 5 jam. • Rute kedua melalui Bandara Silangit (Bandara Sisingamangaraja XII) di Tapanuli Utara – Balige – Parapat dengan jarak 86,9 km. Posisi KHDTK Aek Nauli berada 10 km setelah melewati Kota Parapat ke arah Pematangsiantar
                Fasilitas
                1.	Rumah makan
                2.	Cafetaria
                3.	Coffee shop
                4.	Toilet
                5.	Mesjid',
                'file_foto' => 'HutanLindungAekNauli.jpg',
                'id_obj_wisata_kabupaten' => '4',
                'id_kat_wisata' => '3'
            ],   
            [
                'id_obj_wisata' => '28',
                'nama_wisata' => 'Taman Hewan Siantar',
                'deskripsi' => '
                Tribuntravel.com - Taman Hewan Pematang Siantar biasa disebut Siantar Zoo. Berada di tanah seluas 4,5 hektare, Siantar Zoo terletak di Jalan Gunung Simanuk Manuk Nomor 2, Teladan, Kecamatan Siantar Barat, Kota Pematangsiantar, Sumatera Utara. Kebun binatang ini telh resmi dibuka sejak 27 november 1936 lalu. Siantar zoo pada awalnya memiliki konsep zoologi dan botani, yang dibangun oleh Dr. Coonrad. Beliau merupakan sosok pecinta binatang asal Belanda yang berperan dalam pembangunan Siantar Zoo.
                Hewan-hewan endemik berasal dari berbagai negara di dunia dapat ditemukan di wisata ini. Diantaranya, ada khalijpheast, sejenis burung yang biasa hidup di pegunungan himalaya. Kemudian untuk hewan lokal, terdapat merak hijau, harimau sumatera, kakatua, burung jalak, berbagai jenis reptile, dan berbagai jenis lainnya. Taman hewan pematang siantar merupakan salah satu taman hewan yang telah memenuhi standar pemeliharaan satwa, dimana masuk dalam 10 dari 34 taman hewan di Indonesia.
                Aksesibilitas
                Untuk menuju lokasi ini apabila pengunjung berangkat dari kota Medan, maka akan menempuh waktu sekitar 3-4 jam perjalanan. Siantar Zoo terletak di Jalan Gunung Simanuk Manuk No. 2, Pematangsiantar.
                Fasilitas
                1.	Pengunjung dapat membeli tiket masuk taman hewan Siantar ini dengan Rp30 ribu per orang.
                2.	Pengunjung dapat menemukan unit pusat karantina hewan, rumah sakit hewan, dan museum yang menampilkan koleksi hewan mati yang diawetkan dengan cairan formalin.
                3.	Fasilitas lainnya terdaat mushola, toilet hingga kantin.',
                'file_foto' => 'TamanHewanSiantar.jpg',
                'id_obj_wisata_kabupaten' => '4',
                'id_kat_wisata' => '3'
            ],   
            [
                'id_obj_wisata' => '29',
                'nama_wisata' => 'Martoba Waterpark',
                'deskripsi' => '
                Martoba Waterpark berada di Desa Tanjung Pinggir, Kec. Martoba, Kota Siantar. Tempat rekereasi keluarga di Siantar bertemakan kegiatan air ini memiliki berbagai wahana permainan air yang seru dan harus dicoba seperti super fun bowl, body slide, waterfall, flow poll, wahana ember tumpah, ninja challenge, kolam renang olimpik dan wahana lainnya yang menarik. Berfoto dalam keadaan basah biasanya menjadi favorit anak-anak di area air mancur tersebut. Selain itu ada juga beberapa seluncuran dengan ketinggian yang bervariasi ember tumpah dan lain-lain.
                Kedalaman kolam di Martoba Water Park juga bertingkat, jadi tetap aman untuk anak-anak.  Bahkan anak dengan umur lima tahun pun bisa ikut berenang di kolam yang paling dangkal sekitar 30 cm. Tak hanya bermain air, pengunjung juga akan disuguhkan dengan pemandangan alam yang mempesona dan bernuansa asri. Untuk jam operasional wisata ini dibuka setiap hari mulau pukul 09.00 hingga pukul 18.00 wib. 
                Aksesibilitas
                Akses ke Martoba Water Park juga terbilang cukup gampang. Anda bisa menyusuri jalur lingkar Jalan SM Raja, lalu belok di jalan ke arah Tanjung Pinggir. Ikuti saja nanti diseberang kanan akan terlihat jalan masuk dengan tulisan Perumahan Bersatu Maju pada dinding pos.
                Fasilitas
                1.	Harga tiket masuk cuman Rp10.000, untuk parkit mobil dengan harga Rp3.000, sedangkan sepeda motor Rp2.000.
                2.	Fasilitas sewa ban apung dengan harga Rp5.000 untuk ban kecil, sedangkan untuk ban besar dengan harga Rp8.000.
                3.	Fasilitas lainnya yang tersedia seperti toilet, kamar ganti, mushola, foodcourt, scooter area, garden area, food stall, sewa locker, souvenir shop, area karaoke ,dan masih banyak lagi.',
                'file_foto' => 'MartobaWaterpark.jpg',
                'id_obj_wisata_kabupaten' => '4',
                'id_kat_wisata' => '3'
            ],  
            [
                'id_obj_wisata' => '30',
                'nama_wisata' => 'Patung Dewi Kwan Im',
                'deskripsi' => '
                Patung Dewi Kwan Im merupakan wisata religi di kota Siantar. Patung ini menjadi salah satu ikon wisata religi yang selalu ramai dikunjungi oleh wisatawan terletak di komplek vihara Avalokitervara yang berlokasi di Jl. Pane, Kel. Simalungun, Kota Pematangsiantar. Menurut dareah.sindonews.com, Patung Dewi Kwan In konon diimport langsung dari China, dibangun pada tahun 2002 dan selesai tahun 2005. Berdiri kokoh dengan tinggi 22,8 mter. 
                Vihara yang menjadi tempat ibadah bagi umat Budha ini selalu ramai dikunjungi wisatawan dari berbagai daerah untuk berwisata dan melihat keindahan patung yang sekelilingnya teradapat taman-taman yang indah. Ada pula lonceng raksasa yang menawan hati. Sementara itu, keindahan dari vihara ini pun akan semakin mempesona dengan hadirnya beberapa patung shio kepercayaan warga tionghoa seperti macan, tikus, kerbau, ular, naga, kambing, monyet, ayam, babi, dan juga anjing.
                Aksesibilitas
                Menurut wisato.id, bagi anda yang berangkat dari kota Medan, alangkah baiknya naik kereta api Siantar ekspress menuju ke stasiun Pematang Siantar. Jarak dari stasiun menuju ke objek wisata ini hanya 1,6 km saja atau membutuhkan 5 menit. 
                Fasilitas
                1.	Untuk uang masuk tidak dipungut biaya, tetapi untuk tiket parkir motor dengan harga Rp3.000 dan uang parkir mobil dengan harga Rp5.000',
                'file_foto' => 'PatungDewiKwanIm.jpg',
                'id_obj_wisata_kabupaten' => '4',
                'id_kat_wisata' => '2'
            ],    
            [
                'id_obj_wisata' => '31',
                'nama_wisata' => 'Museum Simalungun',
                'deskripsi' => 'Tempatwisata.pro - Museum Simalungun terletak di Jl. Jenderal Sudirman Pematang Siantar, Proklamasi, Siantar Bar, Kota Pematang Siantar, Sumatera Utara. Museum ini bertujuan untuk melestarikan budaya batak Simalungun. Pembangunan museum dimulai pada April 1939 dan selesai pada Desember 1939. Walaupun wilayah objek wisata ini tidak terlalu luas, pengunjung bisa menyalurkan hobi fotografi dengan memanfaatkan pemandangan dari berbagai benda-benda bersejarah yang ada di museum.
                Koleksi utama dari museum ini antara lain, koleksi etnografika (peralatan rumah tangga), koleksi keramikologis (jenis porselin buatan China, Honand dan Spanyol), koleksi numismatika (mata uang), koleksi naskah kuno (terbuat dari raut kayu alim dan bambu anyam), koleksi arkeologi (aneka arca), koleksi hand craft ( ornament yang bahannya terbuat dari kayu).
                Aksesibilitas
                •	Via udara : Sesampainya di Bandara Kuala Namu, anda langsung saja melanjutkan perjalanan menggunakan kendaraan bermotor dengan rute : Jl. Tol Medan-Kuala Namu - Jl. Lintas Sumatera - Jl. Yos Sudarso - Jl. Jend Sudirman - Museum Simalungun
                •	Via laut : Sesampainya di Pelabuhan Belawan, anda langsung saja melanjutkan perjalanan menggunakan kendaraan bermotor dengan rute : Jl. R. Pelabuhan - Jl. Tol Belmera - Jl. Tol Medan-Kuala Namu - Jl. Lintas Sumatera - Jl. Yos Sudarso - Jl. Jend Sudirman - Museum Simalungun
                •	Via darat : Dari pusat kota Medan, anda tinggal ikuti saja rute berikut ini : Jl. Guru Patimpus - Jl. Gatot Subroto - Jl. Kapten Maulana Lubis - Jl. Balaikota - Jl. Prof. HM. Yamin Sh - Jl. Perintis Kemerdekaan - Jl. Tol Belmera - Jl. Tol Medan-Kuala Namu - Jl. Lintas Sumatera - Jl. Yos Sudarso - Jl. Jend Sudirman - Museum Simalungun
                Fasilitas
                1.	Parkir
                2.	Warung atau tempat makan
                3.	Gazebo
                4.	Penginapan
                5.	Toilet umum',
                'file_foto' => 'MuseumBatak.jpg',
                'id_obj_wisata_kabupaten' => '4',
                'id_kat_wisata' => '2'
            ],   
            [
                'id_obj_wisata' => '32',
                'nama_wisata' => 'Rumah Bolon Raja Purba',
                'deskripsi' => '
                Rumah bolon di Istana Pematang Purba di Desa Pematang Purba, Kecamatan Purba, Kabupaten Simalungun, Sumatera Utara. Tempat ini ditetapkan sebagai bangunan cagar budaya. Istana Pematang Purba memang layak disebut tempatnya para raja. Kesan kompleksitar istana dalam nuansa klasik terdapat di dalamnya, bahkan sebelum memasuki kompleks. Ada terowongan dengan panjang sekitar 10 meter, tinggi 2 meter, lebar 1,8 meter. Dinding terowongan memiliki ketebalan variatif antara 50 cm hingga 80 cm. baian atasnya melingkar berbentuk kubah.
                Rumah bolon yang merupakan istana raja ini adalah tempat kediaman bagi raja Simalungun beserta Puang Bolon (permaisuri raja) dan juga bagi para selir raja yang jumlanya banyak untuk hidup bersama. Kawasan Rumah Bolon ini dibangun dengan menggunakan kayu hutan dan sama sekali tidak menggunakan paku, namun kondisi Rumah Bolon ini sampai sekarang cukup baik dan dapat bertahan hingga saat ini
                Aksesibilitas
                Akses ke wisata ini berjarak sekitar 170 kilometer dari Medan dan 70 kilometer dari Kota Pematangsiantar.
                Fasilitas
                1.	Harga tiket masuk untuk dewasa adalah Rp1.500 dan anak-anak Rp500.',
                'file_foto' => 'RumahBolon.jpg',
                'id_obj_wisata_kabupaten' => '4',
                'id_kat_wisata' => '2'
            ], 
            [
                'id_obj_wisata' => '33',
                'nama_wisata' => 'Pantai Lumban Bul-bul',
                'deskripsi' => '
                Merdeka.com - Pantai ini menyuguhkan keindahan hamparan pasir putih yang akan memanjakan mata para wisatawan yang berkunjung. Tak heran, Pantai Lumban Bulbul ini menjadi salah satu destinasi favorit di Kabupaten Toba. Pantai Lumban Bulbul terkenal karena hamparan pasir putihnya yang memesona. Pantai ini dikelilingi oleh pemandangan perbukitan serta pepohonan yang juga mengelilingi Danau Toba. Di pantai ini, wisatawan juga bisa bermain berbagai wahana air, seperti banana boat dan perahu yang dapat disewa untuk berkeliling di sekitar pantai. Keindahan Pantai Lumban Bulbul akan semakin terlihat saat matahari mulai tenggelam. Di sini, wisatawan akan disuguhkan dengan pemandangan sunset yang sangat cantik. Warna langit yang berubah menjadi kemerahan berpadu dengan jernihnya air laut yang memantulkan cahaya kemerahan akan membuat penghujung hari menjadi lengkap.
                Aksesibilitas
                Pantai Lumban Bulbul terletak di Desa Lumban Bul-Bul, Kecamatan Balige, **Kabupaten Toba Samosir**, Sumatera Utara. Jarak pantai ini dari Balige kurang lebuh sekitar 2 km. Untuk menuju pantai ini, Anda bisa mengunakan kendaraan sewaan atau kendaraan umum. Salah satu moda transportasi yang bisa Anda gunakan untuk menuju pantai ini adalah Ojek. Sedangkan, pantai Lumban Bulbul yang berada di Balige, berjarak 18 kilometer dari Bandara Silangit. Dari Bandara Silangit, Anda dapat menempuh perjalanan menggunakan mobil atau motor yang membutuhkan waktu sekitar 30 menit perjalanan.',
                'file_foto' => 'pantaiLumbanBulbul.jpg',
                'id_obj_wisata_kabupaten' => '2',
                'id_kat_wisata' => '1'
            ],     
            [
                'id_obj_wisata' => '34',
                'nama_wisata' => 'Pantai Pangkodian',
                'deskripsi' => '**ninna.id -** Sebagaimana umumnya pantai di Danau Toba, pantai Pangkodian juga memiliki pantai landai serta berpasir putih bercampur kerikil kecil berbentuk bulat. Airnya jernih dan cukup tenang. Hal ini disebabkan letak pantai yang berada dalam teluk yang membentuk setengah lingkaran. Di tepi pantai sudah ada beberapa kafe juga gazebo. Aneka makanan dan minuman tersedia dengan harga yang tidak begitu mahal. Suasana pantai yang cukup tenang beserta alamnya yang masih asri, mungkin salah satu alasan para traveller untuk memilih berkemah di tepi pantai. Sesekali, di air yang cukup jernih terlihat gerombolan ikan mujahir dan akan berpencar begitu menyadari kehadiran pengunjung. Tak heran jika para traveller biasanya juga membawa pancing saat berkemah.
                Aksesibilitas
                Pantai Pangkodian beralamat di Desa Lintong Nihuta, Kecamatan Tampahan, Kabupaten Toba. Pantai Pangkodian ini tidak begitu jauh dari kota Balige serta hanya butuh 30 menit dari Bandara Silangit yang dapat di akses menggunakan mobil ataupun motor.',
                'file_foto' => 'PantaiPangkodian.jpg',
                'id_obj_wisata_kabupaten' => '2',
                'id_kat_wisata' => '1'
            ],   
            [
                'id_obj_wisata' => '35',
                'nama_wisata' => 'Bukit Tara Bunga',
                'deskripsi' => 'genpi.id - Keunikan bukit Tarabunga adalah, memiliki 2 sisi view yang sama-sama memesona. Kita bisa menikmati keindahan hamparan sawah. Saat menghadap ke Utara dan Barat, pemandangan Danau Toba akan memanjakan mata kita. Bukit Tarabunga merupakan salah satu spot terbaik untuk menikmati pemandangan Danau Toba dari ketinggian. Disini kita akan merasa betah, ditemani udara sejuk dan asrinya lingkungan sekitar.
                Aksesibilitas
                Bukit Tarabunga Balige berjarak sekitar 8 kilometer dari Balige, ibukota Kabupaten Toba Samosir. Atau sekitar 20 menit berkendara. Sedangkan dari Silangit International Airport berjarak sekitar 13 kilometer dengan waktu tempuh sekitar 30 menit.',
                'file_foto' => 'BukitTaraBunga.jpg',
                'id_obj_wisata_kabupaten' => '2',
                'id_kat_wisata' => '1'
            ],  
            [
                'id_obj_wisata' => '36',
                'nama_wisata' => 'Taman Eden 100',
                'deskripsi' => '
                Tempo.co, Jakarta - Keindahan alam di kawasan Danau Toba selalu menjadi magnet bagi wisatawan. Salah satu yang tak boleh dilewatkan adalah panorama indah di Taman Eden 100 di Desa Sionggung Utara, Kecamatan Lumban Julu, Kabupaten Toba, Sumatera Utara. Objek wisata alam itu menawarkan konsep edukasi dengan berbagai kegiatan dapat dilakukan di kawasan itu. Misalnya berkemah, mendaki gunung dan meneliti fauna dan flora. Pendiri Taman Eden 100, Marandus Sirait mengatakan pada saat pembentukannya, taman wisata itu ditanami dengan 100 jenis tanaman makanya diberi nama Taman Eden 100. "Taman Eden 100 juga menyediakan lokasi penanaman pohon bagi para tamu yang memiliki komitmen dalam pelestarian alam, bibit dan papan nama yang menanam juga kami sediakan," kata dia, Kamis, 25 Februari 2021.
                Wisatawan yang berkunjung ke sana dapat menikmati keindahan sejumlah air terjun, baik yang dua tingkat, tujuh tingkat dan ada juga air terjun yang tepat berada di mulut gua. Juga ada Bukit Manja yang akan memanjakan pengunjung dengan latar belakang Danau Toba yang luas serta Pulau Samosir yang terlihat jelas. Bagi wisatawan yang suka petualangan, ada Gunung Pangulubao dengan ketinggian kurang lebih 2.150 mdpl yang bisa didaki. Beragam tantangan yang harus dilewati sangat digemari oleh petualang rimba dan pendaki gunung. Di lokasi itu juga ada berbagai jenis tanaman khas seperti tahul-tahul (Nephenthes), bunga Batak (Macodes Petola), bunga Soripada (Malakis) dan berbagai jenis anggrek langka.
                Aksesibilitas 
                Perjalanan menuju lokasi dapat di tempuh sekitar 24 menit dari Parapat dengan jarak 16,3 Km yang dapat di akses menggunakan kendaraan pribadi seperti mobil dan motor. 
                Fasilitas
                1. Para pengunjung yang ingin mengunjungi Taman Eden 100 hanya perlu membeli tiket yang dibanderol dengan harga Rp.3.000,- hingga Rp.10.000,- saja dan sudah termasuk parkir kendaraan serta akses ke beberapa objek wisata lainnya. 
                2. Selain itu beberapa fasilitas yang di sediakan dan dapat dinikmati para pengunjung selama berkunjung ke Taman Eden 100 yaitu penginapan, camping ground, toilet yang bersih, dan aula yang dapat di gunakan untuk kegiatan seperti rapat.',
                'file_foto' => 'TamanEden.jpeg',
                'id_obj_wisata_kabupaten' => '2',
                'id_kat_wisata' => '3'
            ],   
            [
                'id_obj_wisata' => '37',
                'nama_wisata' => 'Labersa Toba Fantasi',
                'deskripsi' => '
                medanwisata.com - Labersa Toba Fantasi merupakan sebuah waterpark dan theme park yang keren di Kota Balige, Sumatera Utara. Lokasi tepat berdampingan dengan Labersa Toba Hotel & Convention Centre. Taman air Labersa Toba Fantasi ini begitu luas. Adapun beragam wahana yang selalu menjadi favorit pengunjung yaitu Big jump, Adventure pool, kolam dewasa, kolam arus,kolam ombak dan kolam bayi.
                Aksesibilitas
                Jika anda ingin berkunjung ke Labersa Toba Fantasi dapat mengikuti rute di google maps. Untuk Jarak dari pusat kota balige sendiri menempu waktu sekitar 5 menitan saja. Sedangkan jika anda menempuh dari bandara Internasional Silangit maka menghabiskan waktu perjalanan 19,2 km selama 34 menit. 
                Fasilitas 
                1. Tiket masuk Labersa Toba Fantasi untuk Weekdays dibandrol dengan harga Rp 45.000,- dan untuk Weekend dibandrol dengan harga Rp 65.000,-. Jika anda berkunjung ke Labersa pada tanggal merah atau Hari libur nasional maka tiket masuk dibandrol dengan harga Rp 75.000,- saja. 
                2. Selain dapat menikmati wahana yang di sediakan oleh Labersa, para pengunjung juga dapat menikmati beberapa fasilitas lainnya yang tentunya di kenakan biaya sewa seperti: 
                    A. Gazebo (Dikenakan biaya sewa dari Rp 100.000,- hingga Rp 150.000,- per unitnya) 
                    B. Pelampung (Dikenakan biaya sewa dari Rp 15.000,- hingga Rp 25.000,-) 
                    C. Loker
                    D. Toilet',
                'file_foto' => 'Labersa.jpeg',
                'id_obj_wisata_kabupaten' => '2',
                'id_kat_wisata' => '3'
            ],   
            [
                'id_obj_wisata' => '38',
                'nama_wisata' => 'Museum Batak TB Silalahi',
                'deskripsi' => '**disbudpar.sumutprov.go.id -** Museum Pribadi T. B. Silalahi Center ****adalah Museum pribadi atau jejak langkah dari T. B. Silalahi yang bertempat di Jl. Pagar Batu No. 88 , Desa Silalahi, Kecamatan Balige, Kabupaten Toba Samosir, Provinsi Sumatera Utara. Museum Pribadi TB. Silalahi atau yang diberi nama Museum Jejak Langkah dan Sejarah TB. Silalahi yang dibangun sebagai wadah untuk memotivasi generasi muda untuk terus meraih cita-cita dengan melihat pengalaman TB. Silalahi mulai dari kecil sebagai anak pengembala kerbau sampai menjadi seorang Jenderal.
                Museum ini berisi koleksi pribadi T. B. Silalahi yang berupa pakaian dinas, bintang jasa, tanda kehormatan, kendaraan pribadi dan dinas, jenis senjata yang pernah digunakan oleh T. B. Silalahi, dan kenang-kenangan dari penjuru dunia yang diberikan kepada Bapak T. B. Silalahi. Di dalam ruangan ini terdapat panel-panel yang menceritakan sejarah hidup perjalanan T. B. Silalahi serta perjalanan kariernya.
                Aksesibilitas 
                Untuk mengunjungi Museum TB Silalahi Center yang teletak di bilangan Balige, Toba dapat di akses melalui kendaraan umum seperti berikut :
                1. Dari Terminal Balige naik Becak motor menuju museum tersebut. 
                2. Jika kamu dari Bandara Internasional Kualanamu dapat menaiki bis jurusan Tarutung/ Doloksanggul lalu turun di pertigaan Monumen Makam Sisingamangaraja XII Soposurung Balige. Lalu kamu dapat berjalan kaki sekitar 750 meter menuju ke museum TB Silalahi Center. 
                3. Jika kamu dari Bandara Internasional Silangit dapat menaiki bis Damri Jurusan Bandara Silangit - Balige lalu turun di pertigaan Monumen Makam Sisingamangaraja XII Soposurung Balige. Lalu kamu dapat berjalan kaki sekitar 750 meter menuju ke museum TB Silalahi Center
                Fasilitas
                1. Kolam Renang Herti 
                2. Lake Toba Hall
                3. Sky Resto 
                4. Dojo TB Silalahi Center
                5. Huta Batak Dine In
                6. Tunas Bangsa Smart Center
                7. Hangar
                8. Sanggar Seni
                9. Convention Hall
                10. Perpustakaan pribadi milik DR TB Silalahi',
                'file_foto' => 'TBSilalahi.jpg',
                'id_obj_wisata_kabupaten' => '2',
                'id_kat_wisata' => '2'
            ],
            [
                'id_obj_wisata' => '39',
                'nama_wisata' => 'Danau Sicike-cike',
                'deskripsi' => '
                Danau Sicike-cike terletak di kecamatan Sitinjo, Kabupaten Dairi. Anda dapat melakukan berbagai aktifitas disini, mulai dari berkemah bersama teman-teman maupun sekedar mencari spot foto yang menarik. Dengan pemandangan jernihnya air danau dan hijaunya pepohonan yang mengitari kawasan danau ini.
                Menurut ksdae.menlhk.go.id, Taman Wisata Alam Sicike-cike berada pada kisaran ketinggian 1350-1500 mdpl, sehingga berada pada iklim dingin dan sejuk. Panorama di dalam hutan berupa susunan pepohonan yang rapat, didominasi pohon sampinur tali, sampinur bunga, haundolog, meang, rotan dan kemenyan. Pengunjung masih dimanjakan lagi  dengan suara-suara fauna yang saling bersahutan, baik itu siamang maupun kicauan burung-burung, termasuk burung enggang.
                Aksesibilitas
                Khusus dari Kota Sidikalang, ibukota Kabupaten Dairi, jaraknya  sekitar 21 km, dengan waktu tempuh sekitar 30 menit sampai di kantor resort Konservasi wilayah Taman Wisata Alam Sicike-cike. Untuk menuju kantor resort dapat menggunakan angkutan umum, yang hanya ada pada setiap hari Rabu dan Sabtu, sedangkan diluar kedua hari tersebut, direkomendasikan sebaiknya menyewa angkutan umum. Kemudian,  dari kantor resort, dengan berjalan kaki sekitar 2,5 km, dan waktu tempuh 30-40 menit, akhirnya sampai di kawasan Taman Wisata Alam Sicike-cike.',
                'file_foto' => 'DanauSicike-cike.jpg',
                'id_obj_wisata_kabupaten' => '3',
                'id_kat_wisata' => '1'
            ],  
            [
                'id_obj_wisata' => '40',
                'nama_wisata' => 'Pemandian Lau Timah',
                'deskripsi' => '
                Pemandian Lau timah berada di Desa Renun, Kec. Tanah Pinem, Kab. Dairi, Sumatera Utara. Di sini Anda dapat berenang-renang maupun berendam santai bersama teman ataupun keluarga. Berendam di kolam mini dipercaya dapat menyembuhkan berbagai macam penyakit kulit.
                Suasana sejuk dan teduh sangat terasa di lokasi ini karena disekitar kolam terdapat pepohonan yang rindang. Walaupun bersuhu dingin, namun air yang berasal dari celah-celah batuan di tempat pemandian ini banyak mengandung belerang (sulfur), sehingga menghasilkan air yang berwarna eksotis, yaitu biru terang.
                Aksesibilitas
                Jika berangkat dari Medan, maka bisa melalui jalan Kabanjahe – Tanah Pinem – Lau Baleng dengan waktu tempuh sekitar 4 jam perjalanan.
                Fasilitas
                Tiket masuk wisata ini dengan harga Rp10.000/orang, namun pengunjung hanya perlu membayar biasa parkir sebesar Rp5000 rupiah.',
                'file_foto' => 'PemandianLauTimah.jpg',
                'id_obj_wisata_kabupaten' => '3',
                'id_kat_wisata' => '1'
            ],  
            [
                'id_obj_wisata' => '41',
                'nama_wisata' => 'Tao Silalahi',
                'deskripsi' => 'Tao Silalahi terletak di Kec. Silahisabungan, Kab. Dairi, Sumatera Utara. Keindahan Tao Silalahi tak perlu diragukan lagi. Air Danau Toba yang ada di sini tak berwarna hijau namun terlihat begitu jernih. Selain itu, kita bisa melemparkan pandangan untuk melihat Bukit Barisan yang indah di kejauhan. Tepi pantai ini memang kerap dijadikan lahan berkemah karena luas dan juga asri. Udara yang terasa pun sangat segar dan sejuk. Tao Silalahi memiliki pantai terpanjang yang masih natural, hutan dengan kekayaan flora dan fauna serta keunikan keragaman hayati.
                Aksesibilitas
                Jika berangkat dari medan maka kita akan melewati berastagi, dari berastagi kita akan ke kabanjahe lalu melewati merek dan turun ke tongging menyusuri pinggiran danau toba hingga tiba di Silalahi Nabolak setelah melewati paropo.
                Fasilitas
                Area camping',
                'file_foto' => 'TaoSilalahi.jpg',
                'id_obj_wisata_kabupaten' => '3',
                'id_kat_wisata' => '1'
            ],   
            [
                'id_obj_wisata' => '42',
                'nama_wisata' => 'Bukit Siadtaratas',
                'deskripsi' => 'Untuk Anda yang gemar olahraga tracking, Anda wajib mengunjungi bukit Sidtaratas. Bukit yang berlokasi di Desa Paropo, Kec. Silalahi Sabungan, Kab. Dairi. Wisata ini juga merupakan salah satu tempat terbaik untuk menikmati keindahan alam Danau Toba. Selain digunakan untuk menikmati panorama Danau Toba, Bukit Siadtaratas juga bisa dipakai untuk berkemah. 
                Bukit Siadtaratas dipenuhi dengan padang rumput yang luas dan rute yang tidak sulit untuk dijangkau menjadikan Bukit Siadtaratas sangat bagus sebagai tempat menikmati pemandangan Danau Toba dan menunggu matahari terbenam sore hari.
                Aksesibilitas
                Lokasi menuju objek wisata Bukit Siadtaratas sangat strategis, kurang lebih memakan waktu sekitar 4 jam perjalanan dari kota medan. Untuk menuju Bukit Siadtaratas maka rute perjalanan yang harus dilewati adalah Medan – Merek – Togging – Wisata Paropo.
                Fasilitas
                Untuk masuk Bukit Siadtaratas sendiri, wisatawan cukup membayar Rp 15.000/motor untuk akhir pekan dan Rp 10.000 saja untuk hari biasa.',
                'file_foto' => 'BukitSiadtaratas.jpg',
                'id_obj_wisata_kabupaten' => '3',
                'id_kat_wisata' => '1'
            ], 
            [
                'id_obj_wisata' => '43',
                'nama_wisata' => 'Sungai Lae Renun',
                'deskripsi' => 'Sungai Lae Renun terletak di Desa Parbuluan 1, Kec. Parbuluan, Kab. Dairi. Sungai Lae Renun terutama mengalir di Kabupaten Dairi yang mempunyai ketinggian rata-rata 700-1.250 m di atas permukaan laut. Masyarakat yang tinggal di pinggiran Lae Renun memanfaatkan sungai ini untuk pengairan ladang, perikanan, dan keperluan air minum terutama di dusun Maha Bunga, Nanggar Boang, Airlintah, Namonterrep, Kecamatan Tigalingga dan Tanah Pinem.
                Lae Renun yang memiliki tebing yang dalam dan curam dengan sungai yang berhulu di gunung atau bukit maka jeram dan air terjun menjadi banyak pula. Lebar aliran sungai Lae Renun ini pelbagai ukuran menghasilkan Jenis jeramnya juga beragam, mulai dari yang berarus jinak hingga yang liar. Debit air Lae Renun cukup besar dan deras, hal ini dikarenakan anak anak sungai menyatu ke aliran sungai Lae Renun.
                Aksesibilitas
                Untuk sampai ke Sungai Laue Renun sekitar 3,5 jam berkendaraan dari kota Medan. 
                Fasilitas
                1.	Tiket masuk ke Sungai Lau Renun adalah Rp10.000.
                2.	Arung Jeram',
                'file_foto' => 'SungaiLaeRenun.jpg',
                'id_obj_wisata_kabupaten' => '3',
                'id_kat_wisata' => '1'
            ], 
            [
                'id_obj_wisata' => '44',
                'nama_wisata' => 'Puncak Sidiangkat',
                'deskripsi' => 'Puncak Sidiangkat terletak di Jl. Subulussalam, Sidiangkat, Kec. Sidikalang, Kab. Dairi, Sumatera Utara. Menurut andalastourism.com, di sini sengaja disediakan spot foto berupa sarang burung raksasa yang fotogenik cocok untuk kaum milenial yang hobi berburu destinasi wisata yang instagramable. Puncak Sidiangkat menawarkan suasana yang sejuk, karena memang lokasinya dikelilingi oleh hutan yang membuat udaranya jadi dingin. 
                Aksesibilitas
                Untuk menuju ke lokasi ini dapat melalui Simpang Salak atau Timbangan, bida menggunakan angkutan umum. Lokasinya tidak jauh dari ibu kota Kabupaten Dairi, jaraknya sekitar 8 km. sementara dari kota Medan anda membutuhkan waktu sekitar 4-5 jam perjalanan, baik menggunakan kendaraan pribadi maupun kendaraan umum. 
                Fasilitas
                Tiket masuk ke puncak sidiangkat ini sekitar Rp5.000/orang. ',
                'file_foto' => 'PuncakSidiangkat.jpg',
                'id_obj_wisata_kabupaten' => '3',
                'id_kat_wisata' => '3'
            ], 
            [
                'id_obj_wisata' => '45',
                'nama_wisata' => 'Taman Wisata Iman',
                'deskripsi' => 'Taman Wisata Iman tempat wisata religi yang di dalam kawasannya terdapat tempat-tempat ibadah yang diakui di Indonesia. Luas tempat wisata Taman Wisata Iman diperkirakan mencapai 10 hektar atau sekitar 130.000 meter persegi. Banyak terdapat pohon besar dan kontur tanah yang berbukit-bukit, membuat tempat wisata yang satu ini sangat cocok untuk buat kamu yang males gerak. 
                Banyak hal menarik dari tempat wisata religi ini, mulai dari bangunan yang ada hingga kondisi alam TWI sendiri. Dari segi bangunan misalnya, ada sebuah kapal yang merupakan representasi dari kapal Nabi Nuh As, gerbang cantik seperti pura dan tentunya bangunan – bangunan yang menggambarkan simbol – simbol agama yang diakui di Indonesia.Yang menariknya lagi dari tempat wisata ini adalah kondisi alamnya yang berbukit – bukit. Untuk menikmati semua keindahan yang ada ditempat ini kita harus menjelajahinya dengan berjalan kaki. Menaiki dan juga menuruni anak tangga yang sudah disedikan.
                Aksesibilitas
                Taman Wisata Iman terletak di Desa Sitinjo yang berada di perbukitan Sitinjo Kecamatan Sitinjo Kabupaten Dairi Provinsi Sumatera Utara. TWI memiliki luas 130.000 meter persegi dan terletak sekitar 10 kilometer dari Sidikalang dan sekitar 154 kilometer dari kota Medan
                Fasilitas
                1.	Tiket masuk untuk dewasa sekitar Rp10.000, sedangkan untuk anak-anak Rp5.000. Harga tiket parkir roda dua sekitar Rp2.000, roda empat sekitar Rp5.000.
                2.	Di Taman Wisata Iman terdapat penginapan sekitar Rp150.000 hingga Rp300.000.
                3.	Untuk penyewaan Aula sekitar Rp400.000.
                4.	Terdapat juga restoran, mini market serta pedagang souvenir.',
                'file_foto' => 'TamanWisataIman.jpg',
                'id_obj_wisata_kabupaten' => '3',
                'id_kat_wisata' => '3'
            ], 
            [
                'id_obj_wisata' => '46',
                'nama_wisata' => 'Rumah Adat Pakpak',
                'deskripsi' => 'Andalastourism.com - Bagi Anda pecinta wisata budaya, Anda dapat mengunjungi rumah adat pakpak. Rumah Adat Pakpak ini terletak di Pakpak, Kec. Sumbul, Kab. Dairi. Rumah adat khas ini tidak jauh berbeda dengan rumah adat Bolon suku Batak, hanya saja orang-orang yang mendiami rumah ini berasal dari suku pakpak.
                Berkunjung ke rumah ada ini Anda dapat belajar banyak hal, mulai dari kehidupan masa lampau masyarakat adat pakpak, nilai budaya leluhur yang tertanam hingga tradisi dan adat istiadatnya yang unik. Anda juga bisa berfoto dengan latar rumah adat pakpak ini, tentunya akan sangat menarik dan fotogenik.',
                'file_foto' => 'RumahAdatPakpak.jpg',
                'id_obj_wisata_kabupaten' => '3',
                'id_kat_wisata' => '2'
            ], 
            [
                'id_obj_wisata' => '47',
                'nama_wisata' => 'Gunung Sibuatan',
                'deskripsi' => '
                traveloka.com - Gunung Sibuatan berada di Kabupaten Karo, wilayah yang sama dengan Gunung Sinabung dan Gunung Sibanyak. Gunung ini juga masuk ke empat kecamatan, yaitu Kecamatan Merek, Tiga Panah, Munte, dan Juhar. Tak hanya dikenal dengan julukan tertinggi, Gunung Sibuatan juga menawarkan beragam keunikan lainnya. Kondisi hutan di Gunung Sibuatan yang masih lebat dan padat membuat pendakian terasa cukup menantang. Para pendaki disarankan menggunakan sepatu bot karena trek masih dipenuhi dengan lumpur yang tebal (konon, bisa mencapai setinggi lutut jika curah hujan sedang tinggi). Akar-akar pohon besar yang melintang pun akan kerap kamu temui di jalur pendakian. 
                Meski dikenal memiliki jalur yang menantang, Gunung Sibuatan juga memiliki beragam pesona keindahan yaitu Hutan Lumut dan Puncak Pilar. Selain itu ada beberapa Aktivitas yang dapat dilakukan selama mengunjungi Gunung Sibuatan seperti Berkemah di Tugu Satya ataupun Menikmati sunrise dan sunset di atas awan. Ada beberapa hal yang perlu di perhatikan jika kamu ingin mengunjungi Gunung Sibuatan, yaitu:
                1. Registrasi pendaki 
                    Seluruh pengunjung diwajibkan untuk melapor terlebih dahulu di pos registrasi dan di kenakan biaya sebesar Rp 10.000,- per orang.
                2. Jam operasional pendakian 
                    Pengelola hanya memberi izin pendakian pada pukul 06:00 – 13:00. Jika datang lewat dari waktu tersebut, kamu akan diminta untuk menunggu hingga besok pagi. Untuk menunggu, kamu boleh bermalam di pos registrasi atau berkemah di area dekat Pintu Rimba. 
                3. Pencatatan Logistik Pendaki
                    Tim Gempari juga akan memeriksa barang bawaanmu. Di sini, semua barang bawaan, terutama logistik (peralatan dan makanan) akan dicatat lengkap hingga jumlahnya.
                4. Kebersihan 
                    Tim Gempari juga akan memeriksa apakah sampah yang kamu bawa turun sudah sesuai dengan jumlah pencatatan saat registrasi. Jika ketahuan meninggalkan sampah, maka kamu akan didenda Rp500.000 atau kerja bakti membersihkan kawasan Desa Nagalingga.
                Aksesibilitas
                1. Dari kota medan kamu dapat menaiki bus atau angkot yang berlokasi di Simpang Pos Padang Bulan yang menuju ke Sidikalang, Kabupaten Dairi. Perjalanan ini menempuh waktu 3 jam hingga tiba di Desa Nagalingga, Kecamatan Merek, karo. 
                2. Selain itu juga terdapat pilihan lain yaitu bus antarkota rute Medan-Berastagi/Kabanjahe yang dapat di akses di Terminal Terpadu Amplas. Jika kamu menggunakan rute ini kamu dapat turun di Terminal Kabanjahe dan melanjutkan perjalanan menggunakan transportasi setempat.',
                'file_foto' => 'GunungSibuatan.jpg',
                'id_obj_wisata_kabupaten' => '8',
                'id_kat_wisata' => '1'
            ],
            [
                'id_obj_wisata' => '48',
                'nama_wisata' => 'Air Terjun Sipiso -piso',
                'deskripsi' => '
                **gosumatra.com -** Air Terjun Sipiso-piso ****merupakan salah satu tempat wisata di Pulau Sumatera. Berada di Kabupaten Karo, Sumatera Utara, yang tidak begitu jauh dari pemukiman penduduk Desa Tongging. Air terjun ini berada di perbukitan dengan ketinggian sekitar 800 mdpl dan dikelilingi oleh hutan pinus. Pengelolaan wisata alam air terjun ini dipegang oleh Pemda Kabupaten Karo. Dengan memiliki ketinggian sekitar 120 meter, Air Terjun Sipiso-piso merupakan salah satu *air terjun tertinggi di Indonesia*. Dengan adanya air terjun ini, Kabupaten Karo menjadi salah satu tempat wisata yang paling diminati oleh para wisatawan domestik dan mancanegara. Perjalanan memakan waktu sekitar 1 jam untuk mencapai dasar air terjun ini. Sesampainya di dasar air terjun, arahkan pandangan Anda ke bukit-bukit yang ada di sekeliling air terjun. Dengan perpaduan hijaunya pepohonan pinus yang rimbun dan suara gemuruh air terjun, membuat suasana hati dan pikiran Anda terasa damai dan tenteram.
                Aksesibilitas 
                Dari kota Medan, Sumatera Utara. Anda dapat menggunakan bus dengan jurusan Kota Kabanjahe dengan waktu kurang lebih 2 jam. Kemudian, setelah sampai di Kabanjahe, perjalanan dilanjutkan dengan bus menuju Danau Toba. Perjalanan memakan waktu sekitar 30 menit dengan jarak tempuh sekitar 24 Km.
                Fasilitas
                Beberapa fasilitas di Air Terjun Sipiso-piso cukup memadai, seperti tersedianya lahan parkir dan warung makan. Untuk penginapan Anda bisa menemukannya di Desa Tongging dan Desa Kabanjahe. Untuk membeli oleh-oleh bagi kerabat atau teman, Anda bisa membelinya di toko souvenir yang ada di tempat wisata ini.',
                'file_foto' => 'AirTerjunSipiso-piso.jpg',
                'id_obj_wisata_kabupaten' => '8',
                'id_kat_wisata' => '1'
            ], 
            [
                'id_obj_wisata' => '49',
                'nama_wisata' => 'Sapo Juma Tongging',
                'deskripsi' => 'merdeka.com - Sapo Juma ini sebenarnya adalah sebuah villa yang menghadap langsung ke Danau Toba yang di sekelilingnya terdapat taman bunga yang sangat cantik. Bagi Anda yang suka mengabadikan momen dengan berfoto, taman bunga ini sangat cocok untuk dikunjungi. Di sini wisatawan bisa berfoto dan berselfie ria bersama teman atau keluarga dengan pemandangan indah dari taman bunga yang berwarna-warni. Wisatawan bisa menikmati cantiknya beragam jenis bunga dengan warna-warna yang cerah. Di sini, wisatawan juga bisa mendirikan tenda yang dikelola oleh pengelola Sapo Juma ini. Disediakan juga jalan setapak bagi pengunjung yang ingin menikmati bunga-bunga dalam jarak dekat tanpa merusak tanaman.
                Aksesibilitias 
                Untuk menuju lokasi, wisatawan dapat melalui tiga jalur alternatif. Pertama, melalui gerbang retribusi lalu pilih jalur kanan di persimpangan. Kedua lewat jalur menuju Bukit Gajah Bobok, sedangkan jalur lainnya melalui jalan lintas Merek-Sidikalang.
                Fasilitas
                1. Gazebo 
                2. Restoran dan kafe Sapo Juma
                3. Camping ground yang menghadap langsung ke Danau Toba
                4. Homestay
                5. Toilet
                6. Tempat Ibadah',
                'file_foto' => 'SapoJumaTongging.jpg',
                'id_obj_wisata_kabupaten' => '8',
                'id_kat_wisata' => '3'
            ],  
            [
                'id_obj_wisata' => '50',
                'nama_wisata' => 'Taman Alam Lumbini',
                'deskripsi' => '**merdeka.com -** Salah satu destinasi wisata di Sumatera Utara yang wajib dikunjungi adalah Taman Alam Lumbini. Taman Alam Lumbini adalah sebuah kawasan yang di dalamnya berdiri sebuah pagoda besar nan megah yang dikelilingi oleh taman. Taman Alam Lumbini ini berada di Desa Tongkoh, Kecamatan Dolat Rayat, Kabupaten Karo. Taman Lumbini memiliki luas sekitar 3 hektar dan dikelola oleh manajemen profesional. Taman ini letaknya ada di belakang bangunan utama dan dipisahkan oleh sebuah jembatan gantung yang di bawahnya ada lembah bunga. Di taman ini Anda bisa melihat berbagai macam bunga semerbak dan pepohonan hijau yang mempercantik taman. Di Taman Alam Lumbini ini ada sebuah pagoda yang besar dan megah yang menjadi daya tarik utama wisatawan.
                Pagoda ini adalah sebuah replika Pagoda Shwedagon yang berlokasi di Yangon, Myanmar. Menariknya lagi, pagoda ini termasuk dalam golongan pagoda tertinggi di Indonesia dan sudah masuk ke dalam rekor MURI dan merupakan replika tertinggi nomor 2 se-Asia Tenggara. Di pagoda ini tersimpan kurang lebih 2.930 Rupang Buddha serta 30 Rupang Arahat dan 108 relik suci. Menariknya, hampir keseluruhan barang-barang ini dibawa langsung dari Myanmar. Kemudian di bagian dalam pagoda ada sebuah pohon yang dinamakan pohon permohonan. Pohon ini cukup besar. Pohon ini berisi dengan berbagai macam doa dan harapan yang ditulis oleh pengujung dengan menggunakan kertas kemudian digantung. Hanya saja, untuk menulis di pohon permohonan ini Anda harus menunggu saat perayaan gong xi fat cai tiba.
                Fasilitas
                1. Area fitness
                2. Permainan anak - anak seperti Ayunan dan perosotan
                3. Taman Rekreasi
                4. Toko souvenir
                Aksesibilitas
                Anda bisa menaiki kendaraan pribadi seperti mobil, motor ataupun kendaraan umum seperti bus. Dari arah kota Medan, setelah sampai di simpang Tongkoh atau Tugu Buah Jeruk lalu belok ke arah kiri. Lalu tidak jauh dari tempat itu, belok ke arah kanan. Ikuti jalan tersebut maka anda akan sampai di Taman Alam Lumbini. Anda juga dapat menggunakan google maps sebagai panduan untuk menuju ke Taman Alam Lumbini. Untuk jarak yang di tempuh dari kota Medan sekitar 50 km dengan memakan waktu sekitar 1 jam. ',
                'file_foto' => 'TamanAlamLumbini.jpg',
                'id_obj_wisata_kabupaten' => '8',
                'id_kat_wisata' => '3'
            ], 
            [
                'id_obj_wisata' => '51',
                'nama_wisata' => 'Museum Pusaka Karo',
                'deskripsi' => '
                **merdeka.com -** Museum yang terletak di Kota Berastagi ini menjadi bukti akan kekayaan budaya serta menjadi kiblat peradaban Suku Karo. Koleksi yang ada di Museum Pusaka Karo ini merupakan barang-barang milik puluhan warga yang dipinjamkan kepada museum untuk dipajang. Gedung museum ini dulunya adalah Gereja Katolik Santa Maria. Meski tidak besar, Museum Pusaka Karo memiliki koleksi sebanyak 800 buah benda antik yang berasal dari tahun 1700-an.
                Ada berbagai alat pertanian, pertukangan dan alat berburu yang dipajang, yaitu amak mbelang dan amak cur (sejenis tikar yang dianyam) dan tempat menyimpan dan menumbuk sirih dengan aneka ragam dan ukiran. Ada juga padung-padung atau anting-anting yang biasa digunakan perempuan Karo yang sederhana. Tak ketinggalan, topeng-topeng raksasa untuk menari gundala-gundala, dan masih banyak lagi.
                Di museum ini juga bisa ditemui koleksi Pustaka Lak-lak. Ini adalah buku aksara kuno milik Suku Karo yangs terbuat dari kulit kayu beraksara Karo asli dan berisi mantra-mantra yang ditulis dengan tinta dari getah kayu. Pustaka Lak-lak ini terdiri dari banyak buku berukuran kecil, sedang hingga ukuran besar. Buku-buku ini dulu sempat dibawa Belanda dari Tanah Karo.
                Aksesibilitas
                Untuk mengakses Museum Pusaka Karo dapat dijangkau dengan kendaraan pribadi maupun kendaraan umum dikarenakan lokasinya yang di pinggir jalan raya dan mudah untuk diakses. Anda dapat menggunakan google maps sebagai panduan anda untuk menuju Museum tersebut. 
                Fasilitas 
                Para pengunjung tidak perlu mengeluarkan biaya tiket masuk, tapi para pengunjung jika ingin memberikan donasi sukarelawan dapat di berikan ke kotak yang sudah disediakan. Jam operasioanl museum ini berlangsung selama 8 jam, dari pukul 08.30 pagi hingga 16.30 malam seriap hari senin hingga sabtu.',
                'file_foto' => 'MuseumPusakaKaro.jpg',
                'id_obj_wisata_kabupaten' => '8',
                'id_kat_wisata' => '2'
            ], 
            [
                'id_obj_wisata' => '52',
                'nama_wisata' => 'Air Soda Parbubu',
                'deskripsi' => 'Pemandian Air SodaTarutung merupakan obyek wisata terunik dan paling langka di Sumatera Utara sekaligus Indonesia. Sebab, fenomena alam tersebut hanya bisa dijumpai di dua negara diseluruh dunia. Selain air soda tarutung, sedangkan satunya lagi terdapat di venezuela.
                Daya tarik pemandian air soda tarutung ini adalah sensasi pemandian yang unik. Ukuran kolam air soda yang tidak terlalu luas,diameternya tidak lebih dari 7 meter. Dimana, mata airnya bersumber langsung dari dalam tanah.Sensasi menyegagarkan langsung menghinggapi tubuh ketika masuk ke area kolam tersebut. Lantaran terletak si sisi areal persawahan dan dibentengi oleh perbukitan, panoramanya pun  tak kalah juara. Sambil berendamdan merasakan sensasi buih air soda,teman akan terpana oleh view menawan yang disajikan oleh pemandian air soda tersebut. 
                Pemandian Air Soda ini terletak di Tarutung, Tapanuli Utara, Sumatera Utara. Mata air soda Tarutung terletak di kaki bukit daerah Tarutung, di Desa Parbubu I, tidak jauh dari pusat kota Tarutung.
                Aksebilitas
                Dari Kota Medan, Pemandian Air Soda Tarutung ini dapat ditempuh dengan 7 jam perjalanan lewat jalur darat. Jika dari Bandar Udara Internasional Silangit, Tapanuli Utara, Anda hanya butuh waktu 1 jam untuk menempuh perjalanan sejauh 36 km.  Akses ke pemandian air soda tarutung sangat memadai.
                Fasilitas 
                1. Para pengunjung yang ingin mengunjungi pemandian air soda ini hanya perlu membeli tiket seharga Rp 10.000.
                2. Terdapat kamar mandi yang dapat digunakan untuk para pengunjung berganti pakaian, dan sebuah warung makan untuk para pengunjung yang ingin membeli makanan atau minuman.',
                'file_foto' => 'PemandianAirSoda.jpg',
                'id_obj_wisata_kabupaten' => '7',
                'id_kat_wisata' => '1'
            ], 
            [
                'id_obj_wisata' => '53',
                'nama_wisata' => 'Air Panas Sipaholon',
                'deskripsi' => '
                Menurut Pesona Indonesia Pemandian Alam Air Panas Sipoholon adalah sebuah destinasi wisata pemandian yang seru, menyenangkan, dan menyehatkan. Pemandian air panas ini terletak di Situmeang Habinsaran, Kecamatan Sipoholon, Tapanuli Utara, Sumatera Utara dan memiliki banyak persamaan dengan Pamukkale Turki. Jadi Anda tidak perlu jauh-jauh ke Turki karena di Indonesia pun ada tempat serupa.
                Air Panas Sipoholon Tapanuli Utara, berasal dari pusat mata air perut bumi. Airnya mengandung belerang yang cukup tinggi. Belerang juga dipercaya, dapat membuat kulit sehat, lembut, dan mengobati bagi Anda yang memiliki penyakit pada kulit. Air panas yang mengandung belerang ini telah mengalir hingga ratusan tahun akibat letusan Gunung Martimbang dan sampai sekarang masih dapat Anda nikmati.
                Di setiap sudutnya, ada pegunungan pasir yang memancarkan warna putih bak kapas. Selain itu, aliran air panas dengan suhu 40 hingga 70 derajat celcius menjadikan tempat ini serasa surga lain di tanah Indonesia. Akibat banyaknya kandungan belerang dan kapur yang terdapat di tempat tersebut, membuat setiap bebatuan yang ada berubah jadi warna-warni. Selain untuk berobat, pemandian ini juga sering menjadi spot foto bagi anak muda. 
                Aksebilitas
                Dari Medan, perjalanan menuju pemandian Air Panas Sipoholon bisa ditempuh sekitar 6-7 jam dengan kondisi jalan yang mulus, letaknya tepat di sebelah kiri bila dari arah Medan. Rute yang diambil, Medan-Tebing Tinggi-PematangSiantar-Parapat-Porsea-Balige-Siborongborong-Sipoholo.Paling dekat kalau lewat Bandara Silangit, hanya 1 jam dari Siborongborong.
                Fasilitas
                1. Untuk berendam di pemandian ini, Anda hanya membayar sejumlah Rp 5.000,- per orang. Rumah-rumah di sepanjang jalan Sipoholon memiliki kolam pemandian air panas sendiri oleh karena itu Anda tidak perlu takut kehabisan tempat.
                2. Disekitar objek wisata terdapat banyak kedai yang menjual beragam kuliner yang daat dijadikan tempat menyantap makanan seusai mandi dengan air hangat.
                3. Terdapat juga tempat penginapan seperti hotel disekitaran tempat wisata ini.',
                'file_foto' => 'AirPanasSipaholon.jpg',
                'id_obj_wisata_kabupaten' => '7',
                'id_kat_wisata' => '1'
            ], 
            [
                'id_obj_wisata' => '54',
                'nama_wisata' => 'Pulau Sibandang ',
                'deskripsi' => 'Menurut kompasiana Pulau Sibandang atau di sebut juga Pardepur ini merupakan goepark Kaldera Danau Toba yang memilki kekayaan dan keindahan alam serta warisan budaya yang tak kalah menariknya dari tempat lainnya.
                Berkunjung ke Sibandang menjadi suatu impian banyak wisatawan baik dari dalam negeri maupun dari mancanegara, karena Sibandang sendiri menawarkan pesona dan keindahan alamnya yang memukau.
                Lokasi : Sibandang, Kecematan Muara, Kabupaten Tapanuli Utara, Sumatera Utara.
                Aksebilitas
                Untuk mengunjungi PulauSibandang harus menyebrang  menggunakan Kapal angkutan penyeberangan kayu yang  bersandar di pelabuhan, menunggu penumpang dan barang. Kapal tradisional ini bisa mengangkut sepeda motor dan penumpang sekaligus, ongkos cuma Rp5.000 per orang sekali menyeberang.
                Fasilitas
                1. Pulau ini dilengkapi dengan berbagai homestay yang berkonsep gaya arsitektur khas.
                2. Terdapat tempat Menu kuliner yang khas dengan cita rasa nikmat & tradisional.',
                'file_foto' => 'pulausibandang.jpg',
                'id_obj_wisata_kabupaten' => '7',
                'id_kat_wisata' => '1'
            ], 
            [
                'id_obj_wisata' => '55',
                'nama_wisata' => 'Salib Kasih',
                'deskripsi' => '
                Salib Kasih berdiri kokoh menghadap ke Kota Tarutung dan dilengkapi dengan kapel yang disebut Rumah Doa. Terletak di Bukit Dolok, Siatas Barita, Kabupaten Tapanuli Utara, Provinsi Sumatera Utara, Bukit Salib Kasih berjarak sekitar 2 kilometer dari kota Tarutung. Adapun salibnya memiliki ketinggian 30 meter dari permukaan tanah. Salib ditopang tiga tiang besar dengan ukuran yang besar dan mudah dilihat dari kejauhan.
                Tempat itu menjadi obyek wisata rohani Kristiani di kawasan Tapanuli Utara, diminati dan ramai dikunjungi wisatawan mancanegara maupun wisata lokal terutama pada hari Raya Kristani, seperti Natal atau Paskah.
                Salib Kasih yang terletak di Siatas Barita adalah tempat yang dibangun untuk mengenang jasa missionaris agama Kristen yang berasal dari Jerman, DR.Ingwer Ludwig Nommensen yang wafat 23 Mei 1918 dan dimakamkan di desa Sigumpar sekitar 60 kilometer sebelah utara Tarutung.Tempat itu pula pada 1863, merupakan tempat DR.IL Nommensen untuk memandang ke arah Rura Silindung di bawahnya.
                Aksebilitas 
                • Via udara : Sesampainya di Bandara Kuala Namu, anda langsung saja melanjutkan perjalanan dengan transportasi umum ke Terminal Amplas untuk menaiki bus yang menuju Tarutung. Setelah sampai di Terminal Tarutung, anda tinggal berkendara dengan rute : Jl. Mayjend D.I. Panjaitan - Jl. Gereja - Taman Wisata Rohani Salib Kasih
                • Via laut : Sesampainya di Pelabuhan Belawan, anda langsung saja melanjutkan perjalanan dengan transportasi umum ke Terminal Amplas untuk menaiki bus yang menuju Tarutung. Setelah sampai di Terminal Tarutung, anda tinggal berkendara dengan rute : Jl. Mayjend D.I. Panjaitan - Jl. Gereja - Taman Wisata Rohani Salib Kasih
                • Via darat : Dari pusat kota, anda tinggal ikuti saja rute berikut ini : Jl. Raja Johannes Hutabarat - Jl. Mayjend J. Samosir - Jl. Gereja - Taman Wisata Rohani Salib Kasih
                Fasilitas 
                Fasilitas yang ada di obyek wisata Taman Wisata Rohani Salib Kasih memang tidak terlalu banyak atau lengkap, namun ada beberapa yang bisa anda temui, seperti di antaranya adalah; 
                    - Lahan parkir
                    Bagi anda yang membawa kendaraan pribadi baik mobil atau motor, anda tidak perlu khawatir dengan masalah parkir karena di sana telah disediakan area parkir yang lumayan luas dan juga memadai.
                    - Warung atau tempat makan
                    Setelah beribadah dan berkeliling area obyek wisata ini pastinya membuat perut anda lapar. Tak perlu bingung apabila anda tidak ada waktu atau lupa untuk menyiapkan bekal. Di sekitar sana,  anda dapat menemukan warung-warung milik penduduk lokal yang menjual makanan dan minuman dengan harga terjangkau.
                    - Gazebo
                    Dengan dibangunnya gazebo di sana, anda bisa dengan santai duduk-duduk sembari menikmati pemandangan pepohonan pinus di sekitar yang rindang, atau dengan berbincang bersama keluarga.
                    - Penginapan
                    Di dekat area obyek wisata ini, untuk anda yang butuh tempat penginapan bisa mencari yang sesuai dengan budget dan kebutuhan anda.
                    - Toilet umum
                    Salah satu fasilitas penting ini juga telah disediakan di sana jadi anda tidak usah repot-repot mencari toilet di luar area obyek wisata.
                    - Pasar
                    Sebelum menuju ke jalan untuk sampai di Salib Kasih, anda bisa menemukan pasar yang menjual baju atau juga makanan.',
                'file_foto' => 'SalibKasih.jpeg',
                'id_obj_wisata_kabupaten' => '7',
                'id_kat_wisata' => '3'
            ], 
            [
                'id_obj_wisata' => '56',
                'nama_wisata' => 'Huta Ginjang',
                'deskripsi' => '
                Angin sepoi-sepoi, hawa sejuk menyambut para pengunjung yang datang ke tempat wisata ini. Salah satu spot terbaik untuk menikmati keelokan Danau Toba yaitu di Huta Ginjang. Berasal dari Bahasa Batak `huta` berarti kampung dan `ginjang` berarti atas, Huta Ginjang menawarkan pemandangan Danau Toba dari ketinggian 1.555 meter di atas permukaan laut (mdpl).
                Huta Ginjang di Kecamatan Muara, Kabupaten Tapanuli Utara, Sumatera Utara, merupakan salah satu tempat wisata untuk menikmati pemandangan Danau Toba. Tempat ini menawarkan pemandangan yang tidak kalah elok dari spot lainnya seperti Merek atau Tomok Samosir. Sejak pertama kali datang pengunjung langsung disodorkan pemandangan yang langsung memperlihatkan panorama Danau Toba nan luas.
                Di Huta Ginjang pengunjung juga bisa mengambil foto dengan background danau toba. Tak hanya menikmati keindahan dari satu lokasi, di sini pengunjung juga bisa menikmati pemandangan dari permainan gantole atau layang gantung.
                Aksebilitas 
                Menurut Pesona Indonesia Huta Ginjang terletak di Tapanuli Utara. Ada dua rute yang bisa Sobat Pesona pilih, dari Medan atau Siborong-borong. Kita bisa naik kendaraan roda dua atau roda empat.
                Fasilitas 
                Sebagai tempat wisata, Huta Ginjang sudah menyediakan fasilitas yang cukup lengkap, mulai dari penjual cenderamata dan rumah makan berbentuk pondok sederhana.',
                'file_foto' => 'HutaGinjang.jpg',
                'id_obj_wisata_kabupaten' => '7',
                'id_kat_wisata' => '3'
            ], 
            [
                'id_obj_wisata' => '57',
                'nama_wisata' => 'Situs Hindu Hopong',
                'deskripsi' => '
                Patung yang disebut peninggalan purbakala ini bentuknya menyerupai tubuh manusia dalam sikap duduk bersila layaknya bersemedi. Letaknya di daerah terpencil di Dusun Hopong, Desa Dolok Sanggul, Kecamatan Simangumban, Kabupaten Tapanuli Utara  (Taput).
                Terbuat dari campuran batu, bentuk patung ini terbilang unik untuk berada di tengah masyarakat sekitar, yang dominan Batak. Memang ada banyak patung ditemui di kawasan Tapanuli, tapi tidak seperti yang ada di Dusun Hopong ini.
                Ukuran patung-patung beraneka ragam. Ada satu yang besar dan beberapa ukuran kecil, tapi tidak memiliki bentuk dan ukuran yang sama. Patung-patung batu itu berjajar rapi di belakang patung terbesar.  Kondisi patung sudah berlumut tapi kering. Terlihat putih berkapur dan kehitaman, seperti sedang dalam proses pelapukan.
                Aksebilitas
                Untuk sampai ke daerah ini, membutuhkan perjalanan sekitar dua jam dari Kota Tarutung. Dari Kecamatan Tarutung menuju Kecamatan Simangumban, yang berbatasan dengan Sipirok Tapanuli Selatan.
                Setibanya di kota kecamatan, perjalanan diteruskan dari simpang jalan raya sebelah kiri bila kita dari Kota Tarutung. Dari simpang ini, selanjutnya terus menelusuri jalan dan melewati sejumlah perkampungan. Waktu tempuh sekitar 30 sampai 40 menit, sampailah ke tujuan.
                Fasilitas 
                1. Umumnya, harga tiket untuk masuk tempat wisata berbeda antara hari libur, minggu atau hari biasa. Berikut kami sertakan daftar harga tiket masuk ke area Kab Tapanuli Utara. Harga bisa berubah sewaktu-waktu. Saat weekday, harga tiket masuk Situs Hindu Hopong adalah Rp10,000.00. Sementara saat weekend, harga tiket masuk Situs Hindu Hopong adalah Rp10,000.00. Ada baiknya konfirmasi harga lewat call center di bawah. Harga weekday umumnya berarti hari Senin-Jumat, sementara weekend Sabtu dan Minggu.',
                'file_foto' => 'hinduHopong.jpg',
                'id_obj_wisata_kabupaten' => '7',
                'id_kat_wisata' => '2'
            ], 
            [
                'id_obj_wisata' => '58',
                'nama_wisata' => 'The Caldera',
                'deskripsi' => '
                desawisatasigapiton.com - The Kaldera Toba Nomadic Escape diresmikan oleh Menteri Pariwisata Arief Yahya April 2019 lalu. Letaknya di Desa Sibisia, Kecamatan Ajibata, Kabupaten Toba (dulu Toba Samosir).Lokasi The Kaldera juga sangat strategis. Berada di bibir tebing dan langsung mengarah pada ngarai yang diujungnya terdapat Desa Sigapiton. Sesuai namanya, Desa Sigapiton diapit oeh dua bukit tinggi di kanan kirinya. Desa ini juga merupakan desa wisata yang digagas oleh Kementerian Pariwisata.Destinasi ini berdiri di atas lahan Zona Otorita Pariwisata Danau Toba seluas lebih dari dua hektare. Di dekat pintu masuk, tepatnya di bibir jurang, berdiri dua nomadic cabin yang disulap menjadi penginapan. Meskipun berukuran kecil, kabin tersebut tetap menyajikan sisi romantisnya. Dinding kacanya langsung menghadap ke arah danau.
                Selain fasilitas nomadic cabin, di tempat ini juga tersemat fasilitas yang tak kalah molek. Seperti 12 omadic bell tent (tenda besar berbentuk lonceng) dengan interior yang ciamik. Jadi konsep outdoor tetap terasa meski dengan fasilitas ala hotel berbintang. Di sana juga terdapat satu buah nomadic bubble tent transparan. Bentuknya menyerupai bola besar. Dari tenda berbentuk bola itu, wisatawan bisa merasakan sensasi bermalam yang romantis. Menyaksikan gugusan bintang saat cuaca cerah. Selain itu ada nomadic ecopod yang terpacak di sisi kanan atas kawasan. 
                Aksesibilitas 
                1. Bagi yang berangkat dari Kota Medan dan sekitarnya, pengunjung dapat melintasi Jalan Lintas Tengah Sumatera hingga ke Kota Wisata Parapat. Dari Parapat, tinggal menempuh perjalanan selama sekitar 20 menit menuju Desa Pardamean Sibisa, Kecamatan Ajibata, Kabupaten Toba Samosir.
                2. Bagi wisatawan yang tiba mealui Bandar Udara Silangit di Siborong-borong, Kabupaten Tapanuli Utara. Dari Bandara Silangit, wisatawan harus menempuh perjalanan sekitar 2 jam. Bagi yang tidak mempersiapkan transportasi sebelumnya, pengunjung dapat menggunakan Damri bandara atau transportasi daring yang saat ini telah tersedia di Bandara Silangit.
                3. Jika melalui Bandar Udara Sibisa di Ajibata, Kabupaten Toba Samosir. Dari Bandara Sibisa, pengunjung hanya menempuh jarak 10 menit sebelum tiba di The Caldera Toba Nomadic Escape. Hanya saja, Bandara Sibisa masih dalam tahap pengembangan dan belum melayani penerbangan dari Medan, Jakarta, ataupun luar negeri.
                Fasilitas 
                1. Nomadic cabin
                2. Omadic bell tent
                3. Nomadic bubble tent transparan
                4. Nomadic ecopod
                5. Amphitheater
                6. Kaldera plaza
                7. Kaldera stage
                8. Kaldera hill
                9. Nomadic caravan park
                10. Camping ground',
                'file_foto' => 'TheCaldera.jpg',
                'id_obj_wisata_kabupaten' => '2',
                'id_kat_wisata' => '3'
            ],
            [
                'id_obj_wisata' => '59',
                'nama_wisata' => 'Geosite Sipinsur',
                'deskripsi' => '
                pariwisatasumut.net – Sipinsur memberikan pemandangan eksotik pulau sibandang, kecantikan landskap Danau Toba serta hutan pinus. Daerah sekeliling Geosite Sipinsur ini dikelilingi pohon Tusam(Pinus) Sumatera yang tumbuh lebat di hamper seluruh area. Karena itu tempat ini cukup berangin dan adem. Geosite Sipinsur sangat strategis karena menghadirkan sederet pemandangan yang ciamik. Di kejauhan, terhampar Pulau Sibandang yang tercatat sebagai pulau terbesar ke-2 di danau Toba setelah Samosir. Dari spot ini juga orang-orang dapat melihat obyek wisata Tapanuli Utara yakni Muara yang pernah dijadikan sebagai lokasi perhelatan FDT.
                Aksesibilitas
                Geosite Sipinsur terletak di Desa Pearung, Parulahon yang berada di wilayah administrative kecamatan Paranginan, Kabupaten Humbang Hasundutan. Dari Bandara silangit anda harus menempuh perjalanan sekitar 30 menit dengan mobil.',
                'file_foto' => 'sipinsur.jpg',
                'id_obj_wisata_kabupaten' => '5',
                'id_kat_wisata' => '1'
            ], 
            [
                'id_obj_wisata' => '60',
                'nama_wisata' => 'Dolok Pottas',
                'deskripsi' => '
                pariwisatasumut.net Jika anda sedang menyambangi Humbang Hasundutan dalam waktu dekat. Coba luangkan waktu untuk berlibur ke Dolok Pottas. Keindahan Desa Tara Bintang dan pemandanga  “negeri diatas awan” memang menjadi sajian utama yang dihadirkan oleh bukit ini. Tidak hanya memandang saja bukit ini juga merupakan salah satu titik kemah dan mendaki juga dikarenakan posisi Dolok Pottas yang strategis dan lebih tinggi dari bukit di sekitarnya . Disini juga terdapat ranger dan potter yang bisa digunakan jasanya untuk menemani anda camping di puncak. 
                Aksesibilitas
                Dolok Pottas berlokasi di Desa Sihombu, Kecamatan Tara Bintang, Kabupaten Humbang Hasundutan. Untuk sampai ke puncak pengunjung harus melintasi jalan desa serta mendaki selama 30 menit dari Desa. ',
                'file_foto' => 'DolokPontas.jpg',
                'id_obj_wisata_kabupaten' => '5',
                'id_kat_wisata' => '1'
            ],    
            [
                'id_obj_wisata' => '61',
                'nama_wisata' => 'Air Terjun Janji',
                'deskripsi' => '
                tourtoba.com Air Terjun Janji, etnisitas, adat budaya, dan karakteristik khas dari komunitas yang berbeda di seluruh nusantara. Keindahan alam Indonesia dianggap tidak ada yang mampu bersaing di negara manapun di dunia Jadi dari itu tidak mengherankan bahwa banyak wisatawan asing yang bersedia datang jauh-jauh ke Indonesia untuk menikmati keindahan alam yang ada di Indonesia. Salah satunya di desa Marbun.Air Terjun Janji  Objek wisata ini sangat terkenal dengan cerita masyarakat sekitar tentang leluhur Raja Sisingamaraja XII. Di mana Raja Sisingamaraja XII menjadi damai untuk Raja Marbun, Raja Sinambela, dan Raja Manullang. Di mana ketiga raja ini tidak pernah berdamai. Jadi ada perjanjian damai dengan kesepakatan besar untuk membawa ketiga raja bersama-sama. Dan dikatakan bahwa setelah perjanjian disetujui oleh tiga raja, Air Terjun muncul di lokasi itu. Dan dikatakan bahwa jika perjanjian itu dilanggar maka air terjun akan berhenti. Konon air terjun ini dulunya adalah tempat para raja bersumpah.
                Aksesibilitas 
                Terletak di Desa Marbun Toruan, Kecamatan Bakti Raja, Kabupaten Humbang Hasundutan. Untuk sampai di lokasi Air Terjun ini, dapat ditempuh dengan berkendara selama 15 hingga 20 menit atau sekitar 15 kilometer dari Kecamatan Dolok Sanggul yang merupakan pusat Kabupaten Humbahas. Menuju ke Air Terjun, hanya membutuhkan sedikit berjalan kaki hingga 50 meter, di jalur yang dibangun dengan rapi.',
                'file_foto' => 'AirTerjunJanji.jpg',
                'id_obj_wisata_kabupaten' => '5',
                'id_kat_wisata' => '1'
            ],   
            [
                'id_obj_wisata' => '62',
                'nama_wisata' => 'Tuan Nagani Paradise',
                'deskripsi' => '
                www.ninna.id - Berjarak sekitar sembilan kilometer dari Kota Doloksanggul, tempat ini akan menjadi pilihan baru berwisata di Danau Toba. Berada di sekitaran pepohonan rindang, menjadikan tempat wisata ini jauh dari kebisingan. Udara segar dan sejuk dapat memanjakan penunjung. Masuk ke lokasi ala taman firdaus ini, pengunjung cukup membayar tiket sejumlah Rp 15.000. Pintu masuk dan keluar dari taman yang sudah dibedakan, membuat pengunjung merasa lebih nyaman. Di pintu masuk, ada mural yang dibuat menyambut pengunjung. Sangat kreatif dengan konsep tiga dimensi. Mural menggambarkan kegiatan dan aktivitas wisata yang ada di lokasi. Ini adalah spot pertama yang menjadi sasaran pecinta selfie. Di taman ini terdapat wahana Flying Fox sejauh 250 meter, sepeda gantung sebagai sarana selfie yang keren dan area selfie lainnya. Ada juga kolam bermain lengkap dengan sepeda air, kolam renang untuk buah hati anda, kolam pancing, camping ground, joging track dan juga villa yang sekarang sudah tersedia delapan unit.
                Aksesibilitas
                Taman wisata ini berada di Desa  Sosor Tambok Kecamatan Doloksanggul, Kabupaten Humbang Hasundutan. Kira-kira 15 menit dari kota Doloksanggul apabila menggunakan kendaraan pribadi dan 60 menit dari bandara Silangit.',
                'file_foto' => 'TuanNagani.jpg',
                'id_obj_wisata_kabupaten' => '5',
                'id_kat_wisata' => '3'
            ],   
            [
                'id_obj_wisata' => '63',
                'nama_wisata' => 'Aek Sipangolu Bakkara',
                'deskripsi' => '
                MerahPutih Wisata - "Berwisata sambil berdoa", merupakan kata yang tepat untuk tempat wisata di tanah Batak yang satu ini. Aek sipangolu atau Air Kehidupan diyakini dapat menyembuhkan berbagai macam penyakit. Menurut Kepercayaan penduduk setempat, dengan berdoa sebelum meminum, mencuci muka, mandi atau melakukan ritual kecil di Aek Sipangolu, penyakit dalam tubuh akan terangkat dan hilang. Masalah akan berkurang dan kehidupan akan semakin membaik. Aek sipangolu merupakan bagian dari perjalanan sejarah kerajaan Sisingamangaraja XII. Kabarnya, Aek sipangolu berasal dari bekas kaki Gajah Putih milik Raja Sisingamangaraja yang kehausan karena perjalanan panjang mereka dari Manduamas-Barus. Danau Toba yang jauh dikaki gunung yang terjal tidak dapat dijangkau, sehingga Raja Sisingamangaraja berdoa dan menacapkan tombaknya ke bekas pijakan kaki gajah putihnya. seketika, air keluar dan mengalir hingga saat ini. Awalnya dinamakan Binanga Bibir dalam bahasa Indonesia Telaga Bibir, Aek Sipaulak Hosa atau Air Pelepas Dahaga, dan saat ini Aek sipangolu atau Air Kehidupan ketika seorang lumpuh mandi dan dapat berjalan kembali.
                Aksesibilitas 
                Aek sipangolu terletak di Desa Simangulampe, Kecamatan Baktiraja, Kabupaten Humbang Hasundutan,  30-45 menit dari kota doloksanggul apabila anda menggunakan kendaraan pribadi. ',
                'file_foto' => 'AekSipangolu.jpg',
                'id_obj_wisata_kabupaten' => '5',
                'id_kat_wisata' => '2'
            ],  
            [
                'id_obj_wisata' => '64',
                'nama_wisata' => 'Wisata Tomok',
                'deskripsi' => '
                Advontura.com – Kampung tomok adalah sebuah perkampungan budaya yang awalnya merupakan kawasan yang tempat tinggal para Raja. Di Kampung Tomok terdapat rumah panggung tradisional yang ditopang oleh tiang kayu besar yang dibangun oleh Raja Sidabutar. Ada dua macam rumah ada sesuai fungsinya. Rumah ada yang besar bernama Rumah Bolon, merupakan rumah ada khusus para raja beserta keluarganya. Sedangkan rumah berukuran lebih kecil bernama Siamporik, merupakan kediaman para bangsawan atau orang-orang kaya. Di depan rumah ada Bolon inilah terdapat patung Sigale-gale. Sigale-gale merupakan nama sebuah boneka kayu yang bisa digerakkan untuk menari. 
                Seiring berjalannya waktu, kompleks perumahan tradisional itu berubah menjadi museum kebudayaan. Selain rumah bersejarah, anda juga bisa mengunjungi pemakaman Raja Batak. Uniknya, peti mati yang digunakan berasal dari batu dengan ukiran kepala manusia di ujungnya dan tidak ditanamkan di dalam tanah melainkan ada di permukaan. Di Kampung Tomok pengunjung juga bisa menyaksikan pertunjukan Sigale-gale, sebuah boneka kayu yang penuh misteri dan seni tari Tor-tor. 
                Aksesibilitas
                Dari Medan, wisata ini membutuhkan sekitar 4-5 jam perjalanan untuk sampai di Pelabuhan Wisata parapat, dan memerlukan waktu satu jam lagi untuk menyeberang dari Ajibata ke Tomok.
                Fasilitas
                1.	Terdapat toko penjual pernak pernik dan makanan khas kampung Tomok di sepanjang jalan menuju wisata ini.
                2.	Tiket masuk untuk menonton tarian Sigale-gale dengan harga Rp10.000/orang.',
                'file_foto' => 'WisataTomok.jpg',
                'id_obj_wisata_kabupaten' => '1',
                'id_kat_wisata' => '2'
            ],   
            [
                'id_obj_wisata' => '65',
                'nama_wisata' => 'Sumur Eluh Berru Tinambunen',
                'deskripsi' => '
                tempatwisataseru.com – Sumur ini sebenarnya sebuah kolam atau sungai yang dikelilingi oleh batu karang yang menjulang tinggi yang membentuk seperti pelindung yang membuatnya terlihat seperti sebuah sumur. Suasana di tempat ini damai dan sunyi, jadi sangat cocok buat kamu yang ini bermain air sepuasnya dan ingin mengjhilangkan penat dan beban pikiran.
                Aksesibilitas
                Desa Rumerah, Kecamatan Sitellu Tali Urang Julu, Kabupaten Pakpak Bharat. ',
                'file_foto' => 'SumurEluh.jpg',
                'id_obj_wisata_kabupaten' => '6',
                'id_kat_wisata' => '1'
            ],   
            [
                'id_obj_wisata' => '66',
                'nama_wisata' => 'Air Terjun Lae Mbilulu',
                'deskripsi' => '
                Merdeka.com - Air Terjun Lae Mbilulu memiliki ketinggian sekitar 40 meter. Air terjun ini dijuluki `air terjun kembar` lantaran aliran airnya yang terbagi menjadi dua bagian, seakan-akan ada dua air terjun. Tepat di bawah air terjun, terdapat kolam alami yang cukup lebar dengan kedalaman sekitar 6 meter. Wisatawan bisa bermain air di kolam tersebut, namun harus berhati-hati karena airnya yang cukup dalam. Air di air terjun ini juga jernih, jadi wisatawan tak perlu khawatir jika ingin bermain air di area kolam alami itu. Area sekitar air terjun pun masih terjaga kebersihannya. Selain pemandangan air terjun yang unik, wisatawan juga akan disuguhkan dengan panorama alam di sekitar air terjun yang cantik. Suasana alami sangat terasa kental apalagi di sekitar air terjun banyak ditumbuhi pepohonan besar dan rindang yang tampak sangat asri. Air terjun ini letaknya diapit sebuah lembah kecil yang bebatuan. Kondisi alam sekitarnya pun masih sangat terawat. Gemercik aliran air terjun akan semakin membuat pikiran menjadi lebih tenang dan fresh.
                Aksesibilitas 
                Air terjun ini berada di Prongil Julu, Kecamatan Tinada, Kabupaten Pakpak Bharat. Lokasinya cukup tersembunyi dan alami.Wisatawan yang hendak mengunjungi air terjun ini memang harus bersabar, lantaran medan menuju air terjun yang belum sepenuhnya teraspal mulus. Membutuhkan perjalanan kira kira 30 menit dari Ibukota Kabupaten Pakpak Bharat yaitu Salak.',
                'file_foto' => 'AirTerjunLaeMbilulu.jpg',
                'id_obj_wisata_kabupaten' => '6',
                'id_kat_wisata' => '1'
            ],    
            [
                'id_obj_wisata' => '67',
                'nama_wisata' => 'Rafting Lae Kombih',
                'deskripsi' => 'SERAMBINEWS.COM -  Paparan sungai yang sulit dan menantang menjadi daya Tarik tersendiri sungai ini untuk menjadi wisata arung jeram tidak hanya arusnya saja yang mendukung kita juga akan disuguhkan pemandangan hutan cagar alam di sepanjang sungai. Disini ada 4 unit perahu karet yang disewakan dimana tiap perahu berkapasitas 8 orang yang dipungut Rp150.000/orang setiap bermain. Selain arung jeram disini juga menyediakan paket rafting bagi pengunjung, seperti kayaking, liveaboard diving dan river tubing. Untuk paket ini disewakan dengan harga Rp10.000/jam untuk peralatan seta guide rescuenya. 
                Aksesibilitas
                Kira kira akan membutuhkan waktu 2 jam dengan mobil untuk menuju ke sungai Lae Kombih. Sesampai nya disana anda juga masih harus berjalan turun kurang lebih 10 menit untuk sampai di sungai tersebut.',
                'file_foto' => 'RaftingLaeKombih.jpg',
                'id_obj_wisata_kabupaten' => '6',
                'id_kat_wisata' => '3'
            ],   
            [
                'id_obj_wisata' => '68',
                'nama_wisata' => 'Mejan Penanggalen',
                'deskripsi' => 'tobaria.com -  Mejan merupakan peninggalan purbakala yang ditemukan di Pakpak Bharat, berupa patung-patung yang diukir dari batu. Patung-patung ini berbentuk orang yang mengendarai binatang seperti, gajah, kuda, atau harimau.Mejan adalah suatu simbol kebanggaan dan kemasyuran masyarakat Pakpak, karena diyakini patung-patung tersebut mengandung unsur mistik tersendiri. Selain mengandung nilai budaya yang tinggi, mejan ini juga merupakan lambang kebesaran marga Pakpak atau masyarakat Pakpak.Secara khusus masyarakat Pakpak memaknai mejan sebagai simbol kepahlawanan. Pemahat yang membuat mejan ini adalah para pertaki dan mereka inilah pemilik mejan sekaligus pande tukang.
                Aksesibilitas
                Mejan Penanggalen Kab Pakpak Bharat terletak di provinsi Sumatera Utara, Indonesia. Tepatnya di Desa Penanggalen Mbinanga Boang kecamatan Salak Kabupaten Pakpak Bharat. Anda membutuhkan waktu kurang lebih 15 menit untuk sampai ke wilayah tersebut dengan mengendarai mobil.',
                'file_foto' => 'MejanPenanggalen.jpg',
                'id_obj_wisata_kabupaten' => '6',
                'id_kat_wisata' => '2'
            ],   
        ]);
    }
}
