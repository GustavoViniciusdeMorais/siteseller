<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use GustavoMorais\Cms\Models\SocialLink;

class LinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SocialLink::insert([
            [
                'type' => 'instagram',
                'value' => 'https://www.instagram.com/'
            ],
            [
                'type' => 'facebook',
                'value' => 'https://www.facebook.com/'
            ],
            [
                'type' => 'twitter',
                'value' => 'https://twitter.com/'
            ]
        ]);
    }
}
