<?php

namespace GustavoMorais\Cms\Actions\Posts;

use GustavoMorais\Cms\Actions\AbAction;
use GustavoMorais\Cms\Models\Post;
use GustavoMorais\Cms\Libs\Traits\GeneratePostUrlTrait;

class CreatePostAction extends AbAction
{
    use GeneratePostUrlTrait;

    public function execute()
    {
        $url = $this->data['title'];
        $url = $this->generatePostUrl($url);
        $this->data['url'] = $url;

        $post = Post::create($this->data);
        
        return $this->success($post);
    }
}
