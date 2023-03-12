<?php

namespace GustavoMorais\Cms\Actions\Links;

use GustavoMorais\Cms\Actions\AbAction;
use GustavoMorais\Cms\Models\SocialLink;

class GetLinksAction extends AbAction
{
    public function execute()
    {
        $links = SocialLink::all();
        return $this->success($links);
    }
}
