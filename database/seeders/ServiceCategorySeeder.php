<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceCategory;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceCategory::insert([
            [
                'name' => 'ซักแห้ง',
                'image_url' => 'https://i.pinimg.com/originals/b1/bd/e7/b1bde73ee72d01118d743df48f826f71.png',
                'type' => 1
            ],
            [
                'name' => 'ซักรีด',
                'image_url' => 'https://i.pinimg.com/originals/b1/bd/e7/b1bde73ee72d01118d743df48f826f71.png',
                'type' => 1
            ],
            [
                'name' => 'เครื่องหนัง & ขนสัตว์',
                'image_url' => 'https://i.pinimg.com/originals/b1/bd/e7/b1bde73ee72d01118d743df48f826f71.png',
                'type' => 1
            ],
            [
                'name' => 'กระเป๋า & รองเท้า',
                'image_url' => 'https://i.pinimg.com/originals/b1/bd/e7/b1bde73ee72d01118d743df48f826f71.png',
                'type' => 1
            ],
            [
                'name' => 'เครื่องนอน อื่นๆ',
                'image_url' => 'https://i.pinimg.com/originals/b1/bd/e7/b1bde73ee72d01118d743df48f826f71.png',
                'type' => 2
            ],
            [
                'name' => 'ซ่อมแซม',
                'image_url' => 'https://i.pinimg.com/originals/b1/bd/e7/b1bde73ee72d01118d743df48f826f71.png',
                'type' => 2
            ]
        ]);
    }
}
