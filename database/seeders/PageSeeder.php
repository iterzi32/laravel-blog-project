<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pages')->insert([
           'title' => 'Amacımız',
            'slug' => 'amacimiz',
            'content' => 'Laravel öğrenmeye başladıktan sonra yaptığım ilk projemi sizlere sunmak.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pages')->insert([
            'title' => 'Hakkımızda',
            'slug' => 'hakkimizda',
            'content' => 'Bilgisayar mühendisi öğrencisi olarak yazılım alanında kendimi geliştirirken yaptığım blog sitesi',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
