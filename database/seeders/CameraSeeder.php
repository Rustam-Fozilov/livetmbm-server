<?php

namespace Database\Seeders;

use App\Models\Camera;
use Illuminate\Database\Seeder;

class CameraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Camera::create([
            'name' => [
                'ruz' => 'Марказ Camera 001',
                'uz' => 'Марказ Camera 001',
                'ru' => 'Марказ Camera 001'
            ],
            'region_id' => 1,
            'link' => 'https://toshkent4.tmbm.uz/',
            'is_active' => false
        ]);

        Camera::create([
            'name' => [
                'ruz' => 'Марказ Camera 002',
                'uz' => 'Марказ Camera 002',
                'ru' => 'Марказ Camera 002'
            ],
            'region_id' => 1,
            'link' => 'https://toshkent2.tmbm.uz/'
        ]);

        Camera::create([
            'name' => [
                'ruz' => 'Марказ Camera 003',
                'uz' => 'Марказ Camera 003',
                'ru' => 'Марказ Camera 003'
            ],
            'region_id' => 1,
            'link' => 'https://toshkent3.tmbm.uz/'
        ]);

        Camera::create([
            'name' => [
                'ruz' => 'Андижон вилояти Camera 001',
                'uz' => 'Андижон вилояти Camera 001',
                'ru' => 'Андижон вилояти Camera 001'
            ],
            'region_id' => 2,
            'link' => 'https://andijon1.dtsj.uz'
        ]);

        Camera::create([
            'name' => [
                'ruz' => 'Андижон вилояти Camera 002',
                'uz' => 'Андижон вилояти Camera 002',
                'ru' => 'Андижон вилояти Camera 002'
            ],
            'region_id' => 2,
            'link' => 'https://andijon2.dtsj.uz'
        ]);

        Camera::create([
            'name' => [
                'ruz' => 'Бухоро вилояти Camera 002',
                'uz' => 'Бухоро вилояти Camera 002',
                'ru' => 'Бухоро вилояти Camera 002'
            ],
            'region_id' => 3,
            'link' => 'https://buxoro1.tmbm.uz'
        ]);
    }
}
