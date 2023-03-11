<?php

namespace GustavoMorais\Cms;

use GustavoMorais\Cms\Actions\Template\GetDataByIdAction;
use GustavoMorais\Cms\Actions\Template\GetTemplatesAction;
use GustavoMorais\Cms\Actions\Template\UpdateDataAction;

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
        return $action
            ->withData($data)
            ->setRules($this->templateFormRules)
            ->validate()
            ->execute();
    }

    public function getTemplateById($id)
    {
        $action = new GetDataByIdAction($id);
        return $action->execute();
    }
}
