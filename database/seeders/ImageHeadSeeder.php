<?php

namespace Database\Seeders;

use App\Models\ImageHeads;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageHeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $headData = config('setting.Image_Head');
        foreach ($headData as $data) {
            ImageHeads::create($data);
        }
    }
}
