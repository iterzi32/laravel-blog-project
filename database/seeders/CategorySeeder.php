<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = ['Teknoloji', 'Tarih', 'Gezi', 'Kozmetik', 'Yemek', 'Felsefe', 'Popüler Bilim'];
        foreach ($categories as $category)
            DB::table('categories')->insert([
                'title' => $category,
                'slug' => Str::slug($category),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    }
}
