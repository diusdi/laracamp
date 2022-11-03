<?php

namespace Database\Seeders;

use App\Models\Camp;
use DateTime;
use DateTimeZone;
use Illuminate\Database\Seeder;
class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Gila belajar',
                'slug' => 'gila-belajar',
                'price' => 280,
                // 'created_at' => date('Y-m-d'),
                // 'updated_at' => date('Y-m-d'),
            ],
            [
                'title' => 'Baru Mulai',
                'slug' => 'baru-mulai',
                'price' => 140,
                // 'created_at' => date('Y-m-d h:i:s'),
                // 'updated_at' => date('Y-m-d h:i:s', date_default_timezone_set('Asia/Jakarta')),
            ],
        ];

        foreach ($camps as $key => $camp) {
            Camp::create($camp);
        }
        // Camp::insert($camps);
    }
}
