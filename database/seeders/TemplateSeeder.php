<?php

namespace Database\Seeders;

use GustavoMorais\Cms\Models\Template;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Template::insert([
            'name' => 'Firs Template',
            'title' => 'First Template',
            'path' => '/fake'
        ]);
    }
}
