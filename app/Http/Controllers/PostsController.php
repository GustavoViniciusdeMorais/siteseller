<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libs\TMessageManager;
use GustavoMorais\Cms\LogFacade;

class PostsController extends CustomController
{
    use TMessageManager;

    public function show($url)
    {
        $post = null;

        try {
            $post = $this->postsFacade->getPostByColumn(
                ['url' => $url]
            );
            $post = $post->original['data'];

            return view('posts.show', ['post' => $post]);
        } catch (\Exception $e) {
            LogFacade::registerLog($e);
            return view('errors.index');
        }
    }
}
