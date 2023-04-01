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
                'name' => 'About us',
                'url' => 'about-us',
                'menu_id' => 1
            ]
        );

        MenuSubItem::insert(
            [
                [
                    'name' => 'Vision',
                    'url' => 'vision',
                    'menu_item_id' => 1
                ],
                [
                    'name' => 'Mission',
                    'url' => 'mission',
                    'menu_item_id' => 1
                ],
                [
                    'name' => 'Values',
                    'url' => 'values',
                    'menu_item_id' => 1
                ]
            ]
        );
    }
}
