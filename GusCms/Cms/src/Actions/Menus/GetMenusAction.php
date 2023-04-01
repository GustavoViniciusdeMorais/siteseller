<?php

namespace GustavoMorais\Cms\Actions\Menus;

use GustavoMorais\Cms\Actions\AbAction;
use GustavoMorais\Cms\Models\Menu;

class GetMenusAction extends AbAction
{
    public function execute()
    {
        $menus = Menu::all();
        return $this->success($menus);
    }
}
