<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionTypesSeeder extends Seeder
{
    public function run()
    {
        $sectionTypes = [
            [
                'name' => 'Covers',
                'image' => 'images/section_types/section_covers.jpeg',
                'status' => true,
            ],
            [
                'name' => 'Features',
                'image' => 'images/section_types/section_features.jpeg',
                'status' => true,
            ],
            [
                'name' => 'Free Consultation',
                'image' => 'images/section_types/section_free_consult.jpeg',
                'status' => true,
            ],
            [
                'name' => 'News',
                'image' => 'images/section_types/section_news.jpeg',
                'status' => true,
            ],
        ];

        DB::table('section_types')->insert($sectionTypes);
    }
}

