<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Region::create([
            'name' => [
                'ruz' => 'Марказ',
                'uz' => 'Markaz',
                'ru' => 'Центр'
            ]
        ]);

        Region::create([
            'name' => [
                'ruz' => 'Андижон вилояти',
                'uz' => 'Andijon viloyati',
                'ru' => 'Андижанская область'
            ]
        ]);

        Region::create([
            'name' => [
                'ruz' => 'Бухоро вилояти',
                'uz' => 'Buxoro viloyati',
                'ru' => 'Бухарская область'
            ]
        ]);

        Region::create([
            'name' => [
                'ruz' => 'Фарғона вилояти',
                'uz' => 'Farg\'ona viloyati',
                'ru' => 'Ферганская область'
            ]
        ]);

        Region::create([
            'name' => [
                'ruz' => 'Қашқадарё вилояти',
                'uz' => 'Qashqadaryo viloyati',
                'ru' => 'Кашкадарьинская область'
            ]
        ]);

        Region::create([
            'name' => [
                'ruz' => 'Навоий вилояти',
                'uz' => 'Navoiy viloyati',
                'ru' => 'Навоийская область'
            ]
        ]);

        Region::create([
            'name' => [
                'ruz' => 'Наманган вилояти',
                'uz' => 'Namangan viloyati',
                'ru' => 'Наманганская область'
            ]
        ]);

        Region::create([
            'name' => [
                'ruz' => 'Самарқанд вилояти',
                'uz' => 'Samarqand viloyati',
                'ru' => 'Самаркандская область'
            ]
        ]);

        Region::create([
            'name' => [
                'ruz' => 'Сурхондарё вилояти',
                'uz' => 'Surxondaryo viloyati',
                'ru' => 'Сурхандарьинская область'
            ]
        ]);

        Region::create([
            'name' => [
                'ruz' => 'Сирдарё вилояти',
                'uz' => 'Sirdaryo viloyati',
                'ru' => 'Сирдарьинская область'
            ]
        ]);

        Region::create([
            'name' => [
                'ruz' => 'Хоразм вилояти',
                'uz' => 'Xorazm viloyati',
                'ru' => 'Хорeзмская область'
            ]
        ]);

        Region::create([
            'name' => [
                'ruz' => 'Жиззах вилояти',
                'uz' => 'Jizzax viloyati',
                'ru' => 'Джиззахская область'
            ]
        ]);

        Region::create([
            'name' => [
                'ruz' => 'Қорақалпоғистон Республикаси',
                'uz' => 'Qoraqalpog\'iston Respublikasi',
                'ru' => 'Республика Каракалпакистан'
            ]
        ]);
    }
}
