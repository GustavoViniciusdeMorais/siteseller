<?php

namespace GustavoMorais\Cms\Actions\Links;

use GustavoMorais\Cms\Actions\AbAction;
use GustavoMorais\Cms\Models\SocialLink;

class UpdateLinksAction extends AbAction
{
    public function execute()
    {
        $defaultTypes = SocialLink::getDefaultTypes();
        foreach ($defaultTypes as $type) {
            if (isset($this->data->$type)) {
                $value = $this->data->$type;
                SocialLink::where(['type' => $type])->update(['value' => $value]);
            }
        }

        return $this->success(true);
    }
}
