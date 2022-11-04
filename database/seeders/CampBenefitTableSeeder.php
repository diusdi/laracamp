<?php

namespace Database\Seeders;

use App\Models\CampBenefit;
use Illuminate\Database\Seeder;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits = 
        [
            [
                'camp_id' => 1,
                'name' => 'Pro Techstack Kit',
            ],
            [
                'camp_id' => 1,
                'name' => 'iMac 2021 & Display',
            ],
            [
                'camp_id' => 1,
                'name' => '1-1 Mentoring Program',
            ],
            [
                'camp_id' => 1,
                'name' => 'Final Project Sertificate',
            ],
            [
                'camp_id' => 1,
                'name' => 'Offline Course Videos',
            ],
            [
                'camp_id' => 1,
                'name' => 'Future Job Oportunity',
            ],
            [
                'camp_id' => 1,
                'name' => 'Premium Design Kit',
            ],
            [
                'camp_id' => 2,
                'name' => '1-1 Mentoring Programs',
            ],
            [
                'camp_id' => 2,
                'name' => 'Final Project Sertificate',
            ],
            [
                'camp_id' => 2,
                'name' => 'Offline Course Video',
            ],
        ];

        foreach ($campBenefits as $key => $campBenefit) {
            CampBenefit::create($campBenefit);
        }
    }
}
