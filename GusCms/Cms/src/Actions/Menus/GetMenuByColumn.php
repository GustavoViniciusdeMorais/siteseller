<?php

namespace GustavoMorais\Cms\Actions\Menus;

use GustavoMorais\Cms\Actions\AbAction;
use GustavoMorais\Cms\Models\Menu;

class GetMenuByColumn extends AbAction
{
    public function execute()
    {
        $result = null;
        if (
            is_array($this->data)
            && !empty($this->data)
        ) {
            $query = Menu::with('items.subItems');

            foreach ($this->data as $column => $value) {
                $query->where($column, $value);
            }

            $menu = $query->first();

            $result = $this->success($menu);
        }
        
        return $result;
    }
}
