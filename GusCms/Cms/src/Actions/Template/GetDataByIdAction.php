<?php

namespace GustavoMorais\Cms\Actions\Template;

use GustavoMorais\Cms\Actions\AbAction;
use GustavoMorais\Cms\Models\Template;

class GetDataByIdAction extends AbAction
{

    private $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function execute()
    {
        $template = false;
        if (isset($this->id)) {
            $template = Template::find($this->id);
        }

        return $this->success($template);
    }
}
