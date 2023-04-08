<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use GustavoMorais\Cms\Models\Menu;
use GustavoMorais\Cms\Models\MenuItem;
use GustavoMorais\Cms\Models\MenuSubItem;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::insert(
            [
                'name' => 'SideBar'
            ]
        );

        MenuItem::insert(
            [
                'post_id' => 1,
                'menu_id' => 1
            ]
        );
    }
}
