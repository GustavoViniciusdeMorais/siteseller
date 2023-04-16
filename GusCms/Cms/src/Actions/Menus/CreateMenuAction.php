<?php

namespace GustavoMorais\Cms\Actions\Menus;

use GustavoMorais\Cms\Actions\AbAction;
use GustavoMorais\Cms\Models\Menu;

class CreateMenuAction extends AbAction
{
    public function execute()
    {
        if (!isset($this->data['status'])) {
            $this->data['status'] = 'secundario';
        }
        
        return Menu::create($this->data);
    }
}
