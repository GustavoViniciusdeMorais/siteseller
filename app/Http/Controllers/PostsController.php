<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libs\TMessageManager;
use GustavoMorais\Cms\LogFacade;

class PostsController extends CustomController
{
    use TMessageManager;

    public function index()
    {
        try {
            $posts = $this->postsFacade->getPosts();
            $posts = $posts->original['data'];

            return view('posts.index', ['posts' => $posts]);
        } catch (\Exception $e) {
            LogFacade::registerLog($e);
            return view('errors.index');
        }
    }

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

    public function create()
    {
        try {
            return view('posts.create');
        } catch (\Exception $e) {
            LogFacade::registerLog($e);
            return view('errors.index');
        }
    }

    public function store(Request $request)
    {
        try {
            $post = $this->postsFacade->createPost($request->all());

            return $this->index();
        } catch (\Exception $e) {
            LogFacade::registerLog($e);
            return view('errors.index');
        }
    }

    public function customerShow($postName)
    {
        try {
            $post = $this->postsFacade->getPostByColumn(
                ['url' => $postName]
            );
            $post = $post->original['data'];

            return view('posts.simple-show', ['post' => $post]);
        } catch (\Exception $e) {
            LogFacade::registerLog($e);
            return view('errors.index');
        }
    }
}
