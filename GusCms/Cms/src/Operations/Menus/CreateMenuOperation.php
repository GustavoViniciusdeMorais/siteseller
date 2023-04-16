<?php

namespace GustavoMorais\Cms\Operations\Menus;

use GustavoMorais\Cms\Actions\Menus\CreateMenuAction;
use GustavoMorais\Cms\Actions\Menus\CreateMenuItemAction;
use GustavoMorais\Cms\Operations\AbOperation;

class CreateMenuOperation extends AbOperation
{
    public function execute()
    {
        $createMenu = new CreateMenuAction();
        $menuData = $this->getMenuData();
        $menu = $createMenu->withData($menuData)->execute();

        $createMenuItem = new CreateMenuItemAction();
        $menuItemData = $this->formatMenuItemsData($menu);
        $createMenuItem->withData($menuItemData)->execute();

        return $this->success($menu);
    }

    public function getMenuData()
    {
        $menuName  = $this->data['name'];
        return ['name' => $menuName];
    }

    public function formatMenuItemsData($menu)
    {
        $postsIds = $this->data['postsIds'];
        $menuId = $menu->id;

        return [
            'postsIds' => $postsIds,
            'menuId' => $menuId
        ];
    }
}
