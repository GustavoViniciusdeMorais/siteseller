<?php

namespace GustavoMorais\Cms\Actions\Menus;

use GustavoMorais\Cms\Actions\AbAction;
use GustavoMorais\Cms\Models\MenuItem;

class AddPostToMenuAction extends AbAction
{
    public function execute()
    {
        $result = false;
        $validData = $this->validate();

        if ($validData) {
            $menuItem = MenuItem::create($validData);
            $result = $menuItem;
        }

        return $result;
    }

    public function validate()
    {
        $result = false;

        if (
            isset($this->data['postId'])
            && isset($this->data['menuId'])
        ) {
            $result = [
                'post_id' => $this->data['postId'],
                'menu_id' => $this->data['menuId']
            ];
        }

        return $result;
    }
}
