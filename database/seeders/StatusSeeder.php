<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statusData = config('setting.status');
        foreach ($statusData as $name) {
            $status = Status::where('name', '=', $name)->first();
            if (empty($status)) {
                $status = new Status();
                $status->name = $name;
                $status->save();
            }
        }
    }
}
