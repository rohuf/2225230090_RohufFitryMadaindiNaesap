<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RohufixSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rohufixes')->insert([
            
            'nama' => 'Rohuf Fitry',
            'nohp' => '085892199016',
            'alamat' => 'Bogor',
            'grup' => 'Gfriend',
            'album' => 'Sunny Summer',
            'versi' => 'Sunny',
        ]);
    }
}
