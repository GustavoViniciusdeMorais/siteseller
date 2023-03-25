<?php

namespace GustavoMorais\Cms\Actions\Template;

use GustavoMorais\Cms\Actions\AbAction;
use GustavoMorais\Cms\Models\Template;
use GustavoMorais\Cms\Libs\MyException;

class UpdateDataAction extends AbAction
{
    protected $template;

    public function execute()
    {
        $this->validate();

        $template = Template::find($this->data['id']);
        unset($this->data['id']);

        if ($template) {
            $template->update($this->data);
        } else {
            $template = Template::create($this->data);
        }
        
        return $this->success($template);
    }

    public function validate()
    {
        if (!isset($this->data)) {
            throw new MyException("Dados inválidos");
        } else {
            foreach ($this->data as $key => $value) {
                if (empty($value)) {
                    throw new MyException("Dados inválidos");
                }
            }
        }
    }

}
