<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'novel',
        ]);
        DB::table('categories')->insert([
            'name' => 'komik',
        ]);
        DB::table('categories')->insert([
            'name' => 'Rekayasa Perangkat Lunak',
        ]);
        DB::table('categories')->insert([
            'name' => 'Perkantoran',
        ]);
        DB::table('categories')->insert([
            'name' => 'Perhotelan',
        ]);
    }
}
