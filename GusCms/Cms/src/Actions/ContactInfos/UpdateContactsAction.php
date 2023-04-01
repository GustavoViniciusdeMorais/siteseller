<?php

namespace GustavoMorais\Cms\Actions\ContactInfos;

use GustavoMorais\Cms\Actions\AbAction;
use GustavoMorais\Cms\Models\ContactInfo;
use GustavoMorais\Cms\Exceptions\MyException;

class UpdateContactsAction extends AbAction
{
    public function execute()
    {
        $this->validateFields();
        
        $defaultTypes = ContactInfo::getTypes();
        foreach ($defaultTypes as $type) {
            if (isset($this->data->$type)) {
                $value = $this->data->$type;

                ContactInfo::where(['type' => $type])->update(['value' => $value]);
            }
        }

        return $this->success(true);
    }

    public function validateFields()
    {
        $defaultTypes = ContactInfo::getTypes();
        foreach ($defaultTypes as $type) {
            if (!isset($this->data->$type)) {
                throw new MyException("Valor inválido");
            }
        }
    }
}
