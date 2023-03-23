<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profile')->insert([
            'image' => asset ('04_praktikum_web_lanjut_dua/public/assets/dist/img/falen.jpg'),
            'nama' => 'Falendika Tegar Pratama',
            'nim' => '2141720107',
            'kelas' => 'TI-2H',
            'absen' => '08'
        ]);
    }
}
