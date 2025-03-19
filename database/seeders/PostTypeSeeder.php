<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PostType;

class PostTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['type_name' => 'ข่าวประชาสัมพันธ์'],
            ['type_name' => 'กิจกรรม'],
            ['type_name' => 'ป้ายประกาศ'],
            ['type_name' => 'รางวัลแห่งความภาคภูมิใจ'],
            ['type_name' => 'ประกาศจัดซื้อจัดจ้าง'],
            ['type_name' => 'ผลประกาศจัดซื้อจัดจ้าง'],
            ['type_name' => 'ประกาศราคากลาง'],
            ['type_name' => 'รายงานผลจัดซื้อจัดจ้าง'],
            ['type_name' => 'แนะนำสถานที่ท่องเที่ยว'],
        ];

        foreach ($data as $item) {
            PostType::firstOrCreate(
                ['type_name' => $item['type_name']],
                ['type_name' => $item['type_name']]
            );
        }
    }
}
