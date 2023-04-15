<?php

namespace GustavoMorais\Cms;

use GustavoMorais\Cms\Actions\Posts\GetPostsAction;
use GustavoMorais\Cms\Actions\Posts\CreatePostAction;
use GustavoMorais\Cms\Actions\Posts\GetPostByColumn;

class PostsFacade
{
    public function getPosts($data = null)
    {
        $action = new GetPostsAction();
        return $action->withData($data)->execute();
    }

    public function getPostByColumn($data)
    {
        $action = new GetPostByColumn();
        return $action->withData($data)->execute();
    }

    public function createPost($data)
    {
        $action = new CreatePostAction();
        return $action->withData($data)->execute();
    }
}
