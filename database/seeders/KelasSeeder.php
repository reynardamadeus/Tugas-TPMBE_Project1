<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Kelas')->insert([
            'LNT_class' => 'BackEnd Development'
        ]);
        DB::table('Kelas')->insert([
            'LNT_class' => 'FrontEnd Development'
        ]);
        DB::table('Kelas')->insert([
            'LNT_class' => 'Java Development'
        ]);
        DB::table('Kelas')->insert([
            'LNT_class' => 'Mobile App Development'
        ]);
        DB::table('Kelas')->insert([
            'LNT_class' => 'UI/UX Design'
        ]);
    }
}
