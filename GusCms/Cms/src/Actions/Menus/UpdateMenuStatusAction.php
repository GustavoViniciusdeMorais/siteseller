<?php

namespace GustavoMorais\Cms\Actions\Menus;

use GustavoMorais\Cms\Actions\AbAction;
use GustavoMorais\Cms\Models\Menu;

class UpdateMenuStatusAction extends AbAction
{
    public function execute()
    {
        $result = false;
        $newData = $this->validate();
        if ($newData) {
            $menu = Menu::find($this->data['menuId']);
            $menu->update($newData);
            $result = $menu;
        }

        return $this->success($result);
    }
    
    public function validate()
    {
        $valid = false;
        if (
            isset($this->data['newStatus'])
            && isset($this->data['menuId'])
        ) {
            $valid =  [
                'status' => $this->data['newStatus'],
            ];
        }

        return $valid;
    }
}
