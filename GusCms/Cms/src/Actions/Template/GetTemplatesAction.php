<?php

namespace GustavoMorais\Cms\Actions\Template;

use GustavoMorais\Cms\Actions\AbAction;
use GustavoMorais\Cms\Models\Template;

class GetTemplatesAction extends AbAction
{
    public function execute()
    {
        $result = Template::all();
        return $this->success($result);
    }
}
