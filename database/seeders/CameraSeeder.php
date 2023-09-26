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
                'ruz' => 'www',
                'uz' => 'www',
                'ru' => 'www'
            ],
            'region_id' => 1,
            'link' => 'https://www.google.com'
        ]);
    }
}
