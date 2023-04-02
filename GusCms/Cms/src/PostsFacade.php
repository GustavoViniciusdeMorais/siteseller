<?php

namespace GustavoMorais\Cms;

use GustavoMorais\Cms\Actions\Posts\GetPostsAction;

class PostsFacade
{
    public function getPosts()
    {
        $action = new GetPostsAction();
        return $action->execute();
    }
}
