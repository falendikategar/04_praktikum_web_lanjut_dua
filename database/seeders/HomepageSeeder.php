<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomepageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('homepage')->insert([
            'title' => 'Falendika Tegar Pratama | 2H-D4 Teknik Informatika',
            'content' => 'Selamat Datang Falendika Tegar Pratama'
        ]);

        DB::table('homepage')->insert([
            'title' => 'Rocky Kurniawan | 2J-D4 Teknik Informatika',
            'content' => 'Selamat Datang Rocky Kurniawan'
        ]);
    }
}
