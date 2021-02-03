<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class KecamatanSeeder extends Seeder
{ 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kecamatans')->insert([

            //Aceh
            ['id' => 20, "id_kota" => 20, "kode_kecamatan" => 10, "nama_kecamatan" => "Bubon"],
            ['id' => 21, "id_kota" => 20, "kode_kecamatan" => 11, "nama_kecamatan" => "Meureubo"],

            ['id' => 22, "id_kota" => 21, "kode_kecamatan" => 13, "nama_kecamatan" => "Darussalam"],
            ['id' => 23, "id_kota" => 21, "kode_kecamatan" => 14, "nama_kecamatan" => "Baitussalam"],

            ['id' => 24, "id_kota" => 22, "kode_kecamatan" => 15, "nama_kecamatan" => "Teunom"],
            ['id' => 25, "id_kota" => 22, "kode_kecamatan" => 16, "nama_kecamatan" => "Indra Jaya"],

            // Sumatera Utara
            ['id' => 26, "id_kota" => 23, "kode_kecamatan" => 17, "nama_kecamatan" => "Bandar Pasir Mandoge"],
            ['id' => 27, "id_kota" => 23, "kode_kecamatan" => 18, "nama_kecamatan" => "Sei Kapayang"],

            ['id' => 28, "id_kota" => 24, "kode_kecamatan" => 19, "nama_kecamatan" => "Babalan"],
            ['id' => 29, "id_kota" => 24, "kode_kecamatan" => 20, "nama_kecamatan" => "Hinai"],

            ['id' => 30, "id_kota" => 25, "kode_kecamatan" => 21, "nama_kecamatan" => "Bawolato"],
            ['id' => 31, "id_kota" => 25, "kode_kecamatan" => 22, "nama_kecamatan" => "Idanogawo"],

            // Sumatera Selatan
            ['id' => 32, "id_kota" => 26, "kode_kecamatan" => 23, "nama_kecamatan" => "Plaju"],
            ['id' => 33, "id_kota" => 26, "kode_kecamatan" => 24, "nama_kecamatan" => "Gandus"],

            ['id' => 34, "id_kota" => 27, "kode_kecamatan" => 25, "nama_kecamatan" => "Pulau Rimau"],
            ['id' => 35, "id_kota" => 27, "kode_kecamatan" => 26, "nama_kecamatan" => "Muara Sugihan"],
            
            ['id' => 36, "id_kota" => 28, "kode_kecamatan" => 27, "nama_kecamatan" => "Megang Sakti"],
            ['id' => 37, "id_kota" => 28, "kode_kecamatan" => 28, "nama_kecamatan" => "Muara Lakitan"],

            // Riau
            ['id' => 38, "id_kota" => 29, "kode_kecamatan" => 29, "nama_kecamatan" => "Rupat"],
            ['id' => 39, "id_kota" => 29, "kode_kecamatan" => 30, "nama_kecamatan" => "Mandau"],

            ['id' => 40, "id_kota" => 30, "kode_kecamatan" => 31, "nama_kecamatan" => "Kandis"],
            ['id' => 41, "id_kota" => 30, "kode_kecamatan" => 32, "nama_kecamatan" => "Sungai Apit"],

            ['id' => 42, "id_kota" => 31, "kode_kecamatan" => 33, "nama_kecamatan" => "Kampar Kiri Hulu"],
            ['id' => 43, "id_kota" => 31, "kode_kecamatan" => 34, "nama_kecamatan" => "Tapung"],

            // Jambi
            ['id' => 44, "id_kota" => 32, "kode_kecamatan" => 35, "nama_kecamatan" => "Jangkat"],
            ['id' => 45, "id_kota" => 32, "kode_kecamatan" => 36, "nama_kecamatan" => "Pamenang"],

            ['id' => 46, "id_kota" => 33, "kode_kecamatan" => 37, "nama_kecamatan" => "Sumay"],
            ['id' => 47, "id_kota" => 33, "kode_kecamatan" => 38, "nama_kecamatan" => "Tebo Ulu"],

            ['id' => 48, "id_kota" => 34, "kode_kecamatan" => 39, "nama_kecamatan" => "Hamparan Rawang"],
            ['id' => 49, "id_kota" => 34, "kode_kecamatan" => 40, "nama_kecamatan" => "Tanah Kampung"],

            // Bangkulu
            ['id' => 50, "id_kota" => 35, "kode_kecamatan" => 41, "nama_kecamatan" => "Maje"],
            ['id' => 51, "id_kota" => 35, "kode_kecamatan" => 42, "nama_kecamatan" => "Luas"],

            ['id' => 52, "id_kota" => 36, "kode_kecamatan" => 43, "nama_kecamatan" => "Amen"],
            ['id' => 53, "id_kota" => 36, "kode_kecamatan" => 44, "nama_kecamatan" => "Lebong Utara"],

            ['id' => 54, "id_kota" => 37, "kode_kecamatan" => 45, "nama_kecamatan" => "Bermani Ilir"],
            ['id' => 55, "id_kota" => 37, "kode_kecamatan" => 46, "nama_kecamatan" => "Kabawetan"],

            // Bangka Belitung
            ['id' => 56, "id_kota" => 38, "kode_kecamatan" => 47, "nama_kecamatan" => "Koba"],
            ['id' => 57, "id_kota" => 38, "kode_kecamatan" => 48, "nama_kecamatan" => "Sungai Selan"],

            ['id' => 58, "id_kota" => 39, "kode_kecamatan" => 49, "nama_kecamatan" => "Jebus"],
            ['id' => 59, "id_kota" => 39, "kode_kecamatan" => 50, "nama_kecamatan" => "Kelapa"],

            ['id' => 60, "id_kota" => 40, "kode_kecamatan" => 51, "nama_kecamatan" => "Air Gegas"],
            ['id' => 61, "id_kota" => 40, "kode_kecamatan" => 52, "nama_kecamatan" => "Toboali"],

            // Sumatera Barat
            ['id' => 62, "id_kota" => 41, "kode_kecamatan" => 53, "nama_kecamatan" => "Lubuk Bagalung"],
            ['id' => 63, "id_kota" => 41, "kode_kecamatan" => 54, "nama_kecamatan" => " Koto Tangah"],

            ['id' => 64, "id_kota" => 42, "kode_kecamatan" => 55, "nama_kecamatan" => "Lubuk Sikaping"],
            ['id' => 65, "id_kota" => 42, "kode_kecamatan" => 56, "nama_kecamatan" => "Bonjol"],

            ['id' => 66, "id_kota" => 43, "kode_kecamatan" => 57, "nama_kecamatan" => "Banuhampu"],
            ['id' => 67, "id_kota" => 43, "kode_kecamatan" => 58, "nama_kecamatan" => "Matur"],

            // Lampung
            ['id' => 68, "id_kota" => 44, "kode_kecamatan" => 59, "nama_kecamatan" => "Kemiling"],
            ['id' => 69, "id_kota" => 44, "kode_kecamatan" => 60, "nama_kecamatan" => "Rajabasa"],

            ['id' => 70, "id_kota" => 45, "kode_kecamatan" => 61, "nama_kecamatan" => "Metro Pusat"],
            ['id' => 71, "id_kota" => 45, "kode_kecamatan" => 62, "nama_kecamatan" => "Metro Timur"],

            ['id' => 72, "id_kota" => 46, "kode_kecamatan" => 63, "nama_kecamatan" => "Cukuh Balak"],
            ['id' => 73, "id_kota" => 46, "kode_kecamatan" => 64, "nama_kecamatan" => "Semaka"],

            // Banten
            ['id' => 74, "id_kota" => 47, "kode_kecamatan" => 65, "nama_kecamatan" => "Citangkil"],
            ['id' => 75, "id_kota" => 47, "kode_kecamatan" => 66, "nama_kecamatan" => "Ciwandan"],

            ['id' => 76, "id_kota" => 48, "kode_kecamatan" => 67, "nama_kecamatan" => "Taktakan"],
            ['id' => 77, "id_kota" => 48, "kode_kecamatan" => 68, "nama_kecamatan" => "Kesemen"],

            ['id' => 78, "id_kota" => 49, "kode_kecamatan" => 69, "nama_kecamatan" => "Cikupa"],
            ['id' => 79, "id_kota" => 49, "kode_kecamatan" => 70, "nama_kecamatan" => "Cisoka"],

            // DKI Jakarta
            ['id' => 80, "id_kota" => 50, "kode_kecamatan" => 71, "nama_kecamatan" => "Kepulauan Seribu Utara"],
            ['id' => 81, "id_kota" => 50, "kode_kecamatan" => 72, "nama_kecamatan" => "Kepulauan Seribu Selatan"],

            ['id' => 82, "id_kota" => 51, "kode_kecamatan" => 73, "nama_kecamatan" => "Kemayoran"],
            ['id' => 83, "id_kota" => 51, "kode_kecamatan" => 74, "nama_kecamatan" => "Gambir"],

            ['id' => 84, "id_kota" => 52, "kode_kecamatan" => 75, "nama_kecamatan" => "Taman Sari"],
            ['id' => 85, "id_kota" => 52, "kode_kecamatan" => 76, "nama_kecamatan" => "Tambora"],

            // Jawa Barat
            ['id' => 86, "id_kota" => 53, "kode_kecamatan" => 77, "nama_kecamatan" => "Bandung Kulon"],
            ['id' => 87, "id_kota" => 53, "kode_kecamatan" => 78, "nama_kecamatan" => "Astana Anyar"],

            ['id' => 88, "id_kota" => 54, "kode_kecamatan" => 79, "nama_kecamatan" => "Jatiasih"],
            ['id' => 89, "id_kota" => 54, "kode_kecamatan" => 80, "nama_kecamatan" => "Pondok Gede"],

            ['id' => 90, "id_kota" => 55, "kode_kecamatan" => 81, "nama_kecamatan" => "Bogor Barat"],
            ['id' => 91, "id_kota" => 55, "kode_kecamatan" => 82, "nama_kecamatan" => "Bogor Selatan"],

            // Jawa Timur
            ['id' => 92, "id_kota" => 56, "kode_kecamatan" => 83, "nama_kecamatan" => "Sunanwetan"],
            ['id' => 93, "id_kota" => 56, "kode_kecamatan" => 84, "nama_kecamatan" => "Sukorejo"],

            ['id' => 94, "id_kota" => 57, "kode_kecamatan" => 85, "nama_kecamatan" => "Mojoroto"],
            ['id' => 95, "id_kota" => 57, "kode_kecamatan" => 86, "nama_kecamatan" => "Pasantren"],

            ['id' => 96, "id_kota" => 58, "kode_kecamatan" => 87, "nama_kecamatan" => "Lowokwaru"],
            ['id' => 97, "id_kota" => 58, "kode_kecamatan" => 88, "nama_kecamatan" => "Klojen"],

            // Jawa Tengah
            ['id' => 98, "id_kota" => 59, "kode_kecamatan" => 89, "nama_kecamatan" => "Magelang Selatan"],
            ['id' => 99, "id_kota" => 59, "kode_kecamatan" => 90, "nama_kecamatan" => "Magelang Tengah"],

            ['id' => 100, "id_kota" => 60, "kode_kecamatan" => 91, "nama_kecamatan" => "Pekalongan Timur"],
            ['id' => 101, "id_kota" => 60, "kode_kecamatan" => 92, "nama_kecamatan" => "Pekalongan Utara"],

            ['id' => 102, "id_kota" => 61, "kode_kecamatan" => 93, "nama_kecamatan" => "Genuk"],
            ['id' => 103, "id_kota" => 61, "kode_kecamatan" => 94, "nama_kecamatan" => "Gunungpati"],

            // DI Yogyakarya
            ['id' => 104, "id_kota" => 62, "kode_kecamatan" => 95, "nama_kecamatan" => "Banguntapan"],
            ['id' => 105, "id_kota" => 62, "kode_kecamatan" => 96, "nama_kecamatan" => "Dlingo"],

            ['id' => 106, "id_kota" => 63, "kode_kecamatan" => 97, "nama_kecamatan" => "Umbulharjo"],
            ['id' => 107, "id_kota" => 63, "kode_kecamatan" => 98, "nama_kecamatan" => "Tegalrejo"],

            ['id' => 108, "id_kota" => 64, "kode_kecamatan" => 99, "nama_kecamatan" => "Tempel"],
            ['id' => 109, "id_kota" => 64, "kode_kecamatan" => 100, "nama_kecamatan" => "Godean"],

            // Bali
            ['id' => 110, "id_kota" => 65, "kode_kecamatan" => 101, "nama_kecamatan" => "Busung Biu"],
            ['id' => 111, "id_kota" => 65, "kode_kecamatan" => 102, "nama_kecamatan" => "Gerokgak"],

            ['id' => 112, "id_kota" => 66, "kode_kecamatan" => 103, "nama_kecamatan" => "Denpasar Barat"],
            ['id' => 113, "id_kota" => 66, "kode_kecamatan" => 104, "nama_kecamatan" => "Denpasar Selatan"],

            ['id' => 114, "id_kota" => 67, "kode_kecamatan" => 105, "nama_kecamatan" => "Panebel"],
            ['id' => 115, "id_kota" => 67, "kode_kecamatan" => 106, "nama_kecamatan" => "Kerambitan"],

            // NTB
            ['id' => 116, "id_kota" => 68, "kode_kecamatan" => 107, "nama_kecamatan" => "Narmada"],
            ['id' => 117, "id_kota" => 68, "kode_kecamatan" => 108, "nama_kecamatan" => "Gerung"],

            ['id' => 118, "id_kota" => 69, "kode_kecamatan" => 109, "nama_kecamatan" => "Woja"],
            ['id' => 119, "id_kota" => 69, "kode_kecamatan" => 110, "nama_kecamatan" => "Pekat"],

            ['id' => 120, "id_kota" => 70, "kode_kecamatan" => 111, "nama_kecamatan" => "Lambu"],
            ['id' => 121, "id_kota" => 70, "kode_kecamatan" => 112, "nama_kecamatan" => "Bolo"],

            // NTT
            ['id' => 122, "id_kota" => 71, "kode_kecamatan" => 113, "nama_kecamatan" => "Adonara Barat"],
            ['id' => 123, "id_kota" => 71, "kode_kecamatan" => 114, "nama_kecamatan" => "Ile Boleng"],
        
            ['id' => 124, "id_kota" => 72, "kode_kecamatan" => 115, "nama_kecamatan" => "Fatuleu"],
            ['id' => 125, "id_kota" => 72, "kode_kecamatan" => 116, "nama_kecamatan" => "Takari"],

            ['id' => 126, "id_kota" => 73, "kode_kecamatan" => 117, "nama_kecamatan" => "Teluk Mutiara"],
            ['id' => 127, "id_kota" => 73, "kode_kecamatan" => 118, "nama_kecamatan" => "Pantar"],

            // Kalimantan Barat
            ['id' => 128, "id_kota" => 74, "kode_kecamatan" => 119, "nama_kecamatan" => "Mandor"],
            ['id' => 129, "id_kota" => 74, "kode_kecamatan" => 120, "nama_kecamatan" => "Ngambang"],

            ['id' => 130, "id_kota" => 75, "kode_kecamatan" => 121, "nama_kecamatan" => "Menukung"],
            ['id' => 131, "id_kota" => 75, "kode_kecamatan" => 122, "nama_kecamatan" => "Sayan"],

            ['id' => 132, "id_kota" => 76, "kode_kecamatan" => 123, "nama_kecamatan" => "Galing"],
            ['id' => 133, "id_kota" => 76, "kode_kecamatan" => 124, "nama_kecamatan" => "Jawai"],

            // Kalimantan Tenagah
            ['id' => 134, "id_kota" => 77, "kode_kecamatan" => 125, "nama_kecamatan" => "Katingan Hulu"],
            ['id' => 135, "id_kota" => 77, "kode_kecamatan" => 128, "nama_kecamatan" => "Marikit"],

            ['id' => 136, "id_kota" => 78, "kode_kecamatan" => 129, "nama_kecamatan" => "Kapuas Murung"],
            ['id' => 137, "id_kota" => 78, "kode_kecamatan" => 130, "nama_kecamatan" => "Basarang"],

            ['id' => 138, "id_kota" => 79, "kode_kecamatan" => 131, "nama_kecamatan" => "Balai Riam"],
            ['id' => 139, "id_kota" => 79, "kode_kecamatan" => 132, "nama_kecamatan" => "Permata Kecubung"],

            // Kalimantan Utara
            ['id' => 140, "id_kota" => 80, "kode_kecamatan" => 133, "nama_kecamatan" => "Manilau Utara"],
            ['id' => 141, "id_kota" => 80, "kode_kecamatan" => 134, "nama_kecamatan" => "Pujungan"],

            ['id' => 144, "id_kota" => 81, "kode_kecamatan" => 135, "nama_kecamatan" => "Tarakan Tengah"],
            ['id' => 145, "id_kota" => 81, "kode_kecamatan" => 136, "nama_kecamatan" => "Tarakan Timur"],

            ['id' => 146, "id_kota" => 82, "kode_kecamatan" => 137, "nama_kecamatan" => "Barito Selatan"],
            ['id' => 147, "id_kota" => 82, "kode_kecamatan" => 138, "nama_kecamatan" => "Barito Timur"],

            // Kalimantan Timur
            ['id' => 148, "id_kota" => 83, "kode_kecamatan" => 139, "nama_kecamatan" => "Anggana"],
            ['id' => 149, "id_kota" => 83, "kode_kecamatan" => 140, "nama_kecamatan" => "Kanohan"],

            ['id' => 150, "id_kota" => 84, "kode_kecamatan" => 141, "nama_kecamatan" => "Samarinda Ulu"],
            ['id' => 151, "id_kota" => 84, "kode_kecamatan" => 142, "nama_kecamatan" => "Samarinda Utara"],

            ['id' => 152, "id_kota" => 85, "kode_kecamatan" => 143, "nama_kecamatan" => "Balikpapan Barat"],
            ['id' => 153, "id_kota" => 85, "kode_kecamatan" => 144, "nama_kecamatan" => "Balikpapan Selatan"],

            // Sulawesi Selatan
            ['id' => 154, "id_kota" => 86, "kode_kecamatan" => 145, "nama_kecamatan" => "Bucukiki Barat"],
            ['id' => 155, "id_kota" => 86, "kode_kecamatan" => 146, "nama_kecamatan" => "Soreang"],

            ['id' => 156, "id_kota" => 87, "kode_kecamatan" => 147, "nama_kecamatan" => "Mamajang"],
            ['id' => 157, "id_kota" => 87, "kode_kecamatan" => 148, "nama_kecamatan" => "Bontoala"],

            ['id' => 158, "id_kota" => 88, "kode_kecamatan" => 149, "nama_kecamatan" => "Tellu Wanua"],
            ['id' => 159, "id_kota" => 88, "kode_kecamatan" => 150, "nama_kecamatan" => "Bara"],

            // Sulawesi Tenggara
            ['id' => 160, "id_kota" => 89, "kode_kecamatan" => 151, "nama_kecamatan" => "Wangi-Wangi"],
            ['id' => 161, "id_kota" => 89, "kode_kecamatan" => 152, "nama_kecamatan" => "Wangi-Wangi Selatan"],

            ['id' => 162, "id_kota" => 90, "kode_kecamatan" => 153, "nama_kecamatan" => "Abeli"],
            ['id' => 163, "id_kota" => 90, "kode_kecamatan" => 154, "nama_kecamatan" => "Mandonga"],

            ['id' => 164, "id_kota" => 91, "kode_kecamatan" => 155, "nama_kecamatan" => "Lasusua"],
            ['id' => 165, "id_kota" => 91, "kode_kecamatan" => 156, "nama_kecamatan" => "Ngapa"],


        ]);
    }
}