<?php

namespace GustavoMorais\Cms\Actions\Menus;

use GustavoMorais\Cms\Actions\AbAction;
use GustavoMorais\Cms\Models\MenuItem;

class CreateMenuItemAction extends AbAction
{
    public function execute()
    {
        $menuId = $this->data['menuId'];
        foreach($this->data['postsIds'] as $id => $name) {
            $data = ['menu_id' => $menuId, 'post_id' => $id];
            MenuItem::create($data);
        }
    }
}
