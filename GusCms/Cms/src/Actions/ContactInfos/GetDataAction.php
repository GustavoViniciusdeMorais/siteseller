<?php

namespace GustavoMorais\Cms\Actions\ContactInfos;

use GustavoMorais\Cms\Actions\AbAction;
use GustavoMorais\Cms\Models\ContactInfo;

class GetDataAction extends AbAction
{
    public function execute()
    {
        $contactInfos = ContactInfo::all();
        return $this->success($contactInfos);
    }
}
