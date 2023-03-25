<?php

namespace GustavoMorais\Cms\Actions\Links;

use GustavoMorais\Cms\Actions\AbAction;
use GustavoMorais\Cms\Libs\MyException;
use GustavoMorais\Cms\Models\SocialLink;

class UpdateLinksAction extends AbAction
{
    public function execute()
    {
        $this->validateFields();
        
        $defaultTypes = SocialLink::getDefaultTypes();
        foreach ($defaultTypes as $type) {
            if (isset($this->data->$type)) {
                $value = $this->data->$type;

                SocialLink::where(['type' => $type])->update(['value' => $value]);
            }
        }

        return $this->success(true);
    }

    public function validateFields()
    {
        $defaultTypes = SocialLink::getDefaultTypes();
        foreach ($defaultTypes as $type) {
            if (!isset($this->data->$type)) {
                throw new MyException("Valor inválido");
            }
        }
    }
}
