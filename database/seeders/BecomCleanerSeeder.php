<?php

namespace Database\Seeders;

use App\Models\BecomCleaners;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class BecomCleanerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $BecomData = config('setting.Becom_Cleaner');
        foreach ($BecomData as $data) {
            $becom_cleaner = BecomCleaners::where('name','=',$data['name'])->first();
            if (empty($becom_cleaner)){
                BecomCleaners::create($data);
            }
        }
    }
}
