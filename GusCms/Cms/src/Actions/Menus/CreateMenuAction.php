<?php

namespace GustavoMorais\Cms\Actions\Menus;

use GustavoMorais\Cms\Actions\AbAction;
use GustavoMorais\Cms\Models\Menu;

class CreateMenuAction extends AbAction
{
    public function execute()
    {
        return Menu::create($this->data);
    }
}
