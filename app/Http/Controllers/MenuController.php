<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libs\TMessageManager;
use GustavoMorais\Cms\LogFacade;

class MenuController extends CustomController
{
    use TMessageManager;
    protected $statusOptions = ['principal', 'secundario'];

    public function index()
    {
        $menus = [];

        try {
            $menus = $this->cmsFacade->getMenus();
            $menus = $menus->original['data'];

            return view('menu.index', [
                'menus' => $menus,
                'statusOptions'=> $this->statusOptions
            ]);
        } catch (\Exception $e) {
            LogFacade::registerLog($e);
            return view('menu.index', ['menus' => $menus]);
        }
    }

    public function show($id)
    {
        $menu = null;

        try {
            $menu = $this->cmsFacade->getMenuByColumn(
                ['id' => $id]
            );
            $menu = $menu->original['data'];

            return view('menu.show', ['menu' => $menu]);
        } catch (\Exception $e) {
            LogFacade::registerLog($e);
            return view('errors.index');
        }
    }

    public function create()
    {
        try {
            $posts = $this->postsFacade->getPosts();
            $posts = $posts->original['data'];
            return view('menu.create', ['posts' => $posts]);
        } catch (\Throwable $e) {
            LogFacade::registerLog($e);
            return view('errors.index');
        }
    }

    public function store(Request $request)
    {
        try {
            $menu = $this->cmsFacade->createMenu($request->all());
            $menu = $menu->original['data'];

            return view('menu.show', ['menu' => $menu]);
        } catch (\Exception $e) {
            LogFacade::registerLog($e);
            return view('errors.index');
        }
    }

    public function updateStatus(Request $request)
    {
        try {
            $menu = $this->cmsFacade->updateMenuStatus($request->all());
            $menu = $menu->original['data'];

            return json_encode($menu);
        } catch (\Exception $e) {
            LogFacade::registerLog($e);
            return view('errors.index');
        }
    }
}
