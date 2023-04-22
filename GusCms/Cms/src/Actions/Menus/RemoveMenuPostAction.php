<?php

namespace GustavoMorais\Cms\Actions\Menus;

use GustavoMorais\Cms\Actions\AbAction;
use GustavoMorais\Cms\Models\MenuItem;

class RemoveMenuPostAction extends AbAction
{
    public function execute()
    {
        $result = false;
        $validData = $this->validate();

        if ($validData) {
            $menuItem = MenuItem::where([
                    'menu_id' => $validData['menuId'],
                    'post_id' => $validData['postId']
                ])
                ->delete();
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
                'postId' => $this->data['postId'],
                'menuId' => $this->data['menuId']
            ];
        }

        return $result;
    }
}
