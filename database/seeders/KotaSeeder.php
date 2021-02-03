<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kotas')->insert([

            // Aceh
            ['id' => 20, "id_provinsi" => 1, "kode_kota" => 101, "nama_kota" => "Kabupaten Aceh Barat"],
            ['id' => 21, "id_provinsi" => 1, "kode_kota" => 102, "nama_kota" => "Kabupaten Aceh Besar"],
            ['id' => 22, "id_provinsi" => 1, "kode_kota" => 103, "nama_kota" => "Kabupaten Aceh Jaya"],

            // Sumatera Utara
            ['id' => 23, "id_provinsi" => 2, "kode_kota" => 104, "nama_kota" => "Kabupaten Asahan"],
            ['id' => 24, "id_provinsi" => 2, "kode_kota" => 105, "nama_kota" => "Kabupaten Langkat"],
            ['id' => 25, "id_provinsi" => 2, "kode_kota" => 106, "nama_kota" => "Kabupaten Nias"],

            // Sumatera Selatan
            ['id' => 26, "id_provinsi" => 3, "kode_kota" => 107, "nama_kota" => "Kota Palembang"],
            ['id' => 27, "id_provinsi" => 3, "kode_kota" => 108, "nama_kota" => "Kabupaten Banyuasin"],
            ['id' => 28, "id_provinsi" => 3, "kode_kota" => 109, "nama_kota" => "Kabupaten Musi Rawas"],

            // Riau
            ['id' => 29, "id_provinsi" => 4, "kode_kota" => 110, "nama_kota" => "Kabupaten Bengkalis"],
            ['id' => 30, "id_provinsi" => 4, "kode_kota" => 111, "nama_kota" => "Kabupaten Siak"],
            ['id' => 31, "id_provinsi" => 4, "kode_kota" => 112, "nama_kota" => "Kabupaten Kampar"],

            // Jambi
            ['id' => 32, "id_provinsi" => 5, "kode_kota" => 113, "nama_kota" => "Kabupaten Merangin"],
            ['id' => 33, "id_provinsi" => 5, "kode_kota" => 114, "nama_kota" => "Kabupaten Tebo"],
            ['id' => 34, "id_provinsi" => 5, "kode_kota" => 115, "nama_kota" => "Kota Sungaipenuh"],

            // Bengkulu
            ['id' => 35, "id_provinsi" => 6, "kode_kota" => 116, "nama_kota" => "Kabupaten Kaur"],
            ['id' => 36, "id_provinsi" => 6, "kode_kota" => 117, "nama_kota" => "Kabupaten Lebong"],
            ['id' => 37, "id_provinsi" => 6, "kode_kota" => 118, "nama_kota" => "Kabupaten Kapahiang"],

            // Bangka Belitung
            ['id' => 38, "id_provinsi" => 7, "kode_kota" => 119, "nama_kota" => "Kabupaten Bangka Tengah"],
            ['id' => 39, "id_provinsi" => 7, "kode_kota" => 120, "nama_kota" => "Kabupaten Bangka Barat"],
            ['id' => 40, "id_provinsi" => 7, "kode_kota" => 121, "nama_kota" => "Kabupaten Bangka Selatan"],

            // Sumatera Barat
            ['id' => 41, "id_provinsi" => 8, "kode_kota" => 122, "nama_kota" => "Kota Padang"],
            ['id' => 42, "id_provinsi" => 8, "kode_kota" => 123, "nama_kota" => "Kabupaten Pasaman"],
            ['id' => 43, "id_provinsi" => 8, "kode_kota" => 124, "nama_kota" => "Kota Agam"],

            // Lampung
            ['id' => 44, "id_provinsi" => 9, "kode_kota" => 125, "nama_kota" => "Kota Bandar Lampung"],
            ['id' => 45, "id_provinsi" => 9, "kode_kota" => 126, "nama_kota" => "Kota Metro"],
            ['id' => 46, "id_provinsi" => 9, "kode_kota" => 127, "nama_kota" => "Kabupaten Tanggamus"],

            // Banten
            ['id' => 47, "id_provinsi" => 10, "kode_kota" => 128, "nama_kota" => "Kota Cilegon"],
            ['id' => 48, "id_provinsi" => 10, "kode_kota" => 129, "nama_kota" => "Kota Serang"],
            ['id' => 49, "id_provinsi" => 10, "kode_kota" => 130, "nama_kota" => "Kota Tangerang"],

            // DKI Jakarta
            ['id' => 50, "id_provinsi" => 11, "kode_kota" => 131, "nama_kota" => "Kepulauan Seribu"],
            ['id' => 51, "id_provinsi" => 11, "kode_kota" => 132, "nama_kota" => "Jakarta Pusat"],
            ['id' => 52, "id_provinsi" => 11, "kode_kota" => 133, "nama_kota" => "Jakarta Barat"],

            // Jawa Barat
            ['id' => 53, "id_provinsi" => 12, "kode_kota" => 134, "nama_kota" => "Kota Bandung"],
            ['id' => 54, "id_provinsi" => 12, "kode_kota" => 135, "nama_kota" => "Kota Bekasi"],
            ['id' => 55, "id_provinsi" => 12, "kode_kota" => 136, "nama_kota" => "Kota Bogor"],

            // Jawa Timur
            ['id' => 56, "id_provinsi" => 13, "kode_kota" => 137, "nama_kota" => "Kota Blitar"],
            ['id' => 57, "id_provinsi" => 13, "kode_kota" => 138, "nama_kota" => "Kota Kediri"],
            ['id' => 58, "id_provinsi" => 13, "kode_kota" => 139, "nama_kota" => "Kota Malang"],

            // Jawa Tengah
            ['id' => 59, "id_provinsi" => 14, "kode_kota" => 140, "nama_kota" => "Kota Magelang"],
            ['id' => 60, "id_provinsi" => 14, "kode_kota" => 141, "nama_kota" => "Kota Pekalongan"],
            ['id' => 61, "id_provinsi" => 14, "kode_kota" => 142, "nama_kota" => "Kota Semarang"],

            // DI Yogyakarta
            ['id' => 62, "id_provinsi" => 15, "kode_kota" => 143, "nama_kota" => "Kabupaten Bantul"],
            ['id' => 63, "id_provinsi" => 15, "kode_kota" => 144, "nama_kota" => "Kota Yogyakarta"],
            ['id' => 64, "id_provinsi" => 15, "kode_kota" => 145, "nama_kota" => "Kabupaten Sleman"],

            // Bali
            ['id' => 65, "id_provinsi" => 16, "kode_kota" => 146, "nama_kota" => "Kabupaten Buleleng"],
            ['id' => 66, "id_provinsi" => 16, "kode_kota" => 147, "nama_kota" => "Kota Denpasar"],
            ['id' => 67, "id_provinsi" => 16, "kode_kota" => 148, "nama_kota" => "Kabupaten Tabanan"],

            // NTB
            ['id' => 68, "id_provinsi" => 17, "kode_kota" => 149, "nama_kota" => "Kabupaten Lombok Barat"],
            ['id' => 69, "id_provinsi" => 17, "kode_kota" => 150, "nama_kota" => "Kabupaten Dompu"],
            ['id' => 70, "id_provinsi" => 17, "kode_kota" => 151, "nama_kota" => "Kabupaten Bima"],

            // NTT
            ['id' => 71, "id_provinsi" => 18, "kode_kota" => 152, "nama_kota" => "Kabupaten Flores Timur"],
            ['id' => 72, "id_provinsi" => 18, "kode_kota" => 153, "nama_kota" => "Kabupaten Kupang"],
            ['id' => 73, "id_provinsi" => 18, "kode_kota" => 154, "nama_kota" => "Kabupaten Alor"],

            // Kalimantan Barat
            ['id' => 74, "id_provinsi" => 19, "kode_kota" => 155, "nama_kota" => "Kabupaten Landak"],
            ['id' => 75, "id_provinsi" => 19, "kode_kota" => 156, "nama_kota" => "Kabupaten Melawi"],
            ['id' => 76, "id_provinsi" => 19, "kode_kota" => 157, "nama_kota" => "Kabupaten Sambas"],

            // Kalimantan Tengah
            ['id' => 77, "id_provinsi" => 20, "kode_kota" => 158, "nama_kota" => "Kabupaten Katingan"],
            ['id' => 78, "id_provinsi" => 20, "kode_kota" => 159, "nama_kota" => "Kabupaten Kapuas"],
            ['id' => 79, "id_provinsi" => 20, "kode_kota" => 160, "nama_kota" => "Kabupaten Sukamara"],

            // Kalimantan Utara
            ['id' => 80, "id_provinsi" => 21, "kode_kota" => 161, "nama_kota" => "Kabupaten Manilau"],
            ['id' => 81, "id_provinsi" => 21, "kode_kota" => 162, "nama_kota" => "Kota Tarakan"],
            ['id' => 82, "id_provinsi" => 21, "kode_kota" => 163, "nama_kota" => "Kabupaten Sukamara"],

            // Kalimantan Timur
            ['id' => 83, "id_provinsi" => 22, "kode_kota" => 164, "nama_kota" => "Kabupaten Kutai Kartanegara"],
            ['id' => 84, "id_provinsi" => 22, "kode_kota" => 165, "nama_kota" => "Kota Samarinda"],
            ['id' => 85, "id_provinsi" => 22, "kode_kota" => 166, "nama_kota" => "Kota Balikpapan"],

            // Sulawesi Selatan
            ['id' => 86, "id_provinsi" => 23, "kode_kota" => 167, "nama_kota" => "Kota Pare-Pare"],
            ['id' => 87, "id_provinsi" => 23, "kode_kota" => 168, "nama_kota" => "Kota Makassar"],
            ['id' => 88, "id_provinsi" => 23, "kode_kota" => 179, "nama_kota" => "Kota Palopo"],

            // Sulawesi Tenggara
            ['id' => 89, "id_provinsi" => 24, "kode_kota" => 180, "nama_kota" => "Kabupaten Wakatobi"],
            ['id' => 90, "id_provinsi" => 24, "kode_kota" => 181, "nama_kota" => "Kota Kendari"],
            ['id' => 91, "id_provinsi" => 24, "kode_kota" => 182, "nama_kota" => "Kabupaten Kolaka"],


            ]);
    }
}