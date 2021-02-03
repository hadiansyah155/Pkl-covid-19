<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinsis')->insert([
            ['kode_provinsi' => 11, 'nama_provinsi' => 'ACEH'],
            ['kode_provinsi' => 12, 'nama_provinsi' => 'SUMATERA UTARA'],
            ['kode_provinsi' => 13, 'nama_provinsi' => 'SUMATERA BARAT'],
            ['kode_provinsi' => 14, 'nama_provinsi' => 'RIAU'],
            ['kode_provinsi' => 15, 'nama_provinsi' => 'JAMBI'],
            ['kode_provinsi' => 16, 'nama_provinsi' => 'SUMATERA SELATAN'],
            ['kode_provinsi' => 17, 'nama_provinsi' => 'BENGKULU'],
            ['kode_provinsi' => 18, 'nama_provinsi' => 'LAMPUNG'],
            ['kode_provinsi' => 19, 'nama_provinsi' => 'KEPULAUAN BANGKA BELITUNG'],
            ['kode_provinsi' => 20, 'nama_provinsi' => 'KEPULAUAN RIAU'],
            ['kode_provinsi' => 21, 'nama_provinsi' => 'DKI JAKARTA'],
            ['kode_provinsi' => 22, 'nama_provinsi' => 'JAWA BARAT'],
            ['kode_provinsi' => 23, 'nama_provinsi' => 'JAWA TENGAH'],
            ['kode_provinsi' => 24, 'nama_provinsi' => 'DI YOGYAKARTA'],
            ['kode_provinsi' => 25, 'nama_provinsi' => 'JAWA TIMUR'],
            ['kode_provinsi' => 26, 'nama_provinsi' => 'BANTEN'],
            ['kode_provinsi' => 27, 'nama_provinsi' => 'BALI'],
            ['kode_provinsi' => 28, 'nama_provinsi' => 'NUSA TENGGARA BARAT'],
            ['kode_provinsi' => 29, 'nama_provinsi' => 'NUSA TENGGARA TIMUR'],
            ['kode_provinsi' => 30, 'nama_provinsi' => 'KALIMANTAN BARAT'],
            ['kode_provinsi' => 31, 'nama_provinsi' => 'KALIMANTAN TENGAH'],
            ['kode_provinsi' => 32, 'nama_provinsi' => 'KALIMANTAN SELATAN'],
            ['kode_provinsi' => 33, 'nama_provinsi' => 'KALIMANTAN TIMUR'],
            ['kode_provinsi' => 34, 'nama_provinsi' => 'KALIMANTAN UTARA'],
            ['kode_provinsi' => 35, 'nama_provinsi' => 'SULAWESI UTARA'],
            ['kode_provinsi' => 36, 'nama_provinsi' => 'SULAWESI TENGAH'],
            ['kode_provinsi' => 37, 'nama_provinsi' => 'SULAWESI SELATAN'],
            ['kode_provinsi' => 38, 'nama_provinsi' => 'SULAWESI TENGGARA'],
            ['kode_provinsi' => 39, 'nama_provinsi' => 'GORONTALO'],
            ['kode_provinsi' => 40, 'nama_provinsi' => 'SULAWESI BARAT'],
            ['kode_provinsi' => 41, 'nama_provinsi' => 'MALUKU'],
            ['kode_provinsi' => 42, 'nama_provinsi' => 'MALUKU UTARA'],
            ['kode_provinsi' => 43, 'nama_provinsi' => 'PAPUA BARAT'],
            ['kode_provinsi' => 44, 'nama_provinsi' => 'PAPUA']
        ]);
    }
}