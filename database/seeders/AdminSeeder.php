<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('admins')->insert([
            'name' => 'Ali Kılıç',
            'email' => 'kilic@hotmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make(1234),
            'remember_token' => Str::random(64),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
