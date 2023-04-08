<?php

namespace GustavoMorais\Cms\Actions\Posts;

use GustavoMorais\Cms\Actions\AbAction;
use GustavoMorais\Cms\Models\Post;

class CreatePostAction extends AbAction
{
    public function execute()
    {
        print_r(json_encode([$this->data]));echo "\n\n";exit;
    }
}
