<?php

namespace GustavoMorais\Cms;

use GustavoMorais\Cms\Actions\Links\GetLinksAction;
use GustavoMorais\Cms\Actions\Links\UpdateLinksAction;
use GustavoMorais\Cms\Actions\Template\GetDataByIdAction;
use GustavoMorais\Cms\Actions\Template\GetTemplatesAction;
use GustavoMorais\Cms\Actions\Template\UpdateDataAction;
use GustavoMorais\Cms\Actions\ContactInfos\GetDataAction;
use GustavoMorais\Cms\Actions\ContactInfos\UpdateContactsAction;
use GustavoMorais\Cms\Actions\Menus\AddPostToMenuAction;
use GustavoMorais\Cms\Actions\Menus\RemoveMenuPostAction;
use GustavoMorais\Cms\Actions\Menus\GetMenusAction;
use GustavoMorais\Cms\Actions\Menus\GetMenuByColumn;
use GustavoMorais\Cms\Operations\Menus\CreateMenuOperation;
use GustavoMorais\Cms\Actions\Menus\UpdateMenuStatusAction;

class GusCms
{
    protected $templateFormRules = ['name', 'title'];

    public function getTemplates()
    {
        $action = new GetTemplatesAction();
        return $action->execute();
    }

    public function updateTemplateData($data)
    {
        $action = new UpdateDataAction();
        return $action->withData($data)
            ->setRules($this->templateFormRules)
            ->execute();
    }

    public function getTemplateById($id)
    {
        $action = new GetDataByIdAction($id);
        return $action->execute();
    }

    public function getLinks()
    {
        $action = new GetLinksAction();
        return $action->execute();
    }

    public function updateLinks($data)
    {
        $action = new UpdateLinksAction();
        return $action->withData($data)->execute();
    }

    public function getContactInfos()
    {
        $action = new GetDataAction();
        return $action->execute();
    }

    public function updateContactInfos($data)
    {
        $action = new UpdateContactsAction();
        return $action->withData($data)->execute();
    }

    public function getMenus()
    {
        $action = new GetMenusAction();
        return $action->execute();
    }

    public function getMenuByColumn($data)
    {
        $action = new GetMenuByColumn();
        return $action->withData($data)->execute();
    }

    public function createMenu($data)
    {
        $operation = new CreateMenuOperation();
        return $operation->withData($data)->execute();
    }

    public function updateMenuStatus($data)
    {
        $action = new UpdateMenuStatusAction();
        return $action->withData($data)->execute();
    }
    
    public function removeMenuPost($data)
    {
        $action = new RemoveMenuPostAction();
        return $action->withData($data)->execute();
    }

    public function addPostToMenu($data)
    {
        $action = new AddPostToMenuAction();
        return $action->withData($data)->execute();
    }
}
