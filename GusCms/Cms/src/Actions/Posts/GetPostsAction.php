<?php

namespace GustavoMorais\Cms\Actions\Posts;

use GustavoMorais\Cms\Actions\AbAction;
use GustavoMorais\Cms\Models\Post;

class GetPostsAction extends AbAction
{
    public function execute()
    {
        $posts = Post::all();
        return $this->success($posts);
    }
}
