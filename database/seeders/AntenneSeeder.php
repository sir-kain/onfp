<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AntenneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('antennes')->insert([
            'name' => 'Antenne Dakar',
            'address' => 'Dakar',
            'latitude' => '1233444',
            'longitude' => '145544',
        ]);
    }
}
