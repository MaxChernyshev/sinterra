<?php

namespace Database\Seeders;

use App\Models\JobType;
use Illuminate\Database\Seeder;
use Faker;

class JobTypeSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();
        JobType::create([
            'title' => 'Установка солнечных электростанций',
            'thumbnail' => 'img/mainpage/services-1.png',
            'content' => $faker->paragraph,
            'slug' => $faker->word,
            'seo_title' => 'Установка солнечных электростанций',
            'seo_description' => 'Установка солнечных электростанций',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        JobType::create([
            'title' => 'Монтаж системы отопления',
            'thumbnail' => 'img/mainpage/services-2.png',
            'content' => $faker->paragraph,
            'slug' => $faker->word,
            'seo_title' => 'Монтаж системы отопления',
            'seo_description' => 'Монтаж системы отопления',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        JobType::create([
            'title' => 'Установка тепловых насосов',
            'thumbnail' => 'img/mainpage/services-3.png',
            'content' => $faker->paragraph,
            'slug' => $faker->word,
            'seo_title' => 'Установка тепловых насосов',
            'seo_description' => 'Установка тепловых насосов',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        JobType::create([
            'title' => 'Установка гелиосистем',
            'thumbnail' => 'img/mainpage/services-4.png',
            'content' => $faker->paragraph,
            'slug' => $faker->word,
            'seo_title' => 'Установка гелиосистем',
            'seo_description' => 'Установка гелиосистем',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        JobType::create([
            'title' => 'Монтаж системы вентиляции',
            'thumbnail' => 'img/mainpage/services-5.png',
            'content' => $faker->paragraph,
            'slug' => $faker->word,
            'seo_title' => 'Монтаж системы вентиляции',
            'seo_description' => 'Монтаж системы вентиляции',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        JobType::create([
            'title' => 'Монтаж теплого пола',
            'thumbnail' => 'img/mainpage/services-6.png',
            'content' => $faker->paragraph,
            'slug' => $faker->word,
            'seo_title' => 'Монтаж теплого пола',
            'seo_description' => 'Монтаж теплого пола',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        JobType::create([
            'title' => 'Установка газового котла',
            'thumbnail' => 'img/mainpage/services-7.png',
            'content' => $faker->paragraph,
            'slug' => $faker->word,
            'seo_title' => 'Установка газового котла',
            'seo_description' => 'Установка газового котла',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        JobType::create([
            'title' => 'Электромонтажные работы',
            'thumbnail' => 'img/mainpage/services-8.png',
            'content' => $faker->paragraph,
            'slug' => $faker->word,
            'seo_title' => 'Электромонтажные работы',
            'seo_description' => 'Электромонтажные работы',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
