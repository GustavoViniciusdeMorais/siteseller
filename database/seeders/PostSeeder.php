<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use GustavoMorais\Cms\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::insert([
            [
                'title' => 'test',
                'content' => 'test',
                'url' => 'test-test'
            ]
        ]);
    }
}
