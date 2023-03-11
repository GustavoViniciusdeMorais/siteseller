<?php

namespace GustavoMorais\Cms\Actions\Template;

use GustavoMorais\Cms\Actions\AbAction;
use GustavoMorais\Cms\Models\Template;

class UpdateDataAction extends AbAction
{
    protected $template;

    public function execute()
    {
        $template = Template::find($this->data['id']);
        unset($this->data['id']);

        if ($template) {
            $result = $template->update($this->data);
        } else {
            $result = Template::create($this->data);
        }
        
        return $this->success($result);
    }

}
