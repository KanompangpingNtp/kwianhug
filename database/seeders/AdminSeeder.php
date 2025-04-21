<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@example.com'], // เงื่อนไขตรวจซ้ำ
            [
                'name' => 'ผู้ดูแลระบบ',
                'email_verified_at' => now(),
                'password' => Hash::make('123456789'),
                'remember_token' => null,
                'status' => 1,
            ]
        );

        User::firstOrCreate(
            ['email' => 'eservice@example.com'], // เพิ่มอีกคน
            [
                'name' => 'แอดมิน Eservice',
                'email_verified_at' => now(),
                'password' => Hash::make('123456789'),
                'remember_token' => null,
                'status' => 2,
            ]
        );

        User::firstOrCreate(
            ['email' => 'user@example.com'], // เพิ่มอีกคน
            [
                'name' => 'ผู้ใช้งานทั่วไป',
                'email_verified_at' => now(),
                'password' => Hash::make('123456789'),
                'remember_token' => null,
                'status' => 3,
            ]
        );

        User::firstOrCreate(
            ['email' => 'admin@kwianhug.go.th'],
            [
                'name' => 'ผู้ดูแลระบบเว็บไซต์',
                'email_verified_at' => now(),
                'password' => Hash::make('123456789'),
                'remember_token' => null,
                'status' => 1,
            ]
        );
    }
}
