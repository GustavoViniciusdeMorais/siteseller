<?php

namespace GustavoMorais\Cms\Actions\Posts;

use GustavoMorais\Cms\Actions\AbAction;
use GustavoMorais\Cms\Models\Post;

class GetPostsAction extends AbAction
{
    public function execute()
    {
        $query = Post::select('id', 'title', 'content', 'url', 'created_at');

        if (
            is_array($this->data)
            && !empty($this->data)
        ) {
            foreach ($this->data as $column => $value) {
                $query->where($column, $value);
            }
        }
        
        $query->orderBy('created_at');

        $post = $query->get();

        return $this->success($post);
    }
}
