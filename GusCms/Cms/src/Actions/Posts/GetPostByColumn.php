<?php

namespace GustavoMorais\Cms\Actions\Posts;

use GustavoMorais\Cms\Actions\AbAction;
use GustavoMorais\Cms\Models\Post;

class GetPostByColumn extends AbAction
{
    public function execute()
    {
        $result = null;
        if (
            is_array($this->data)
            && !empty($this->data)
        ) {
            $query = Post::select('id', 'title', 'content');

            foreach ($this->data as $column => $value) {
                $query->where($column, $value);
            }

            $post = $query->first();

            $result = $this->success($post);
        }
        
        return $result;
    }
}
