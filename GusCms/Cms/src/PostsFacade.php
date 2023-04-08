<?php

namespace GustavoMorais\Cms;

use GustavoMorais\Cms\Actions\Posts\GetPostsAction;
use GustavoMorais\Cms\Actions\Posts\CreatePostAction;
use GustavoMorais\Cms\Actions\Posts\GetPostByColumn;

class PostsFacade
{
    public function getPosts()
    {
        $action = new GetPostsAction();
        return $action->execute();
    }

    public function getPostByColumn($data)
    {
        $action = new GetPostByColumn();
        return $action->withData($data)->execute();
    }
}
