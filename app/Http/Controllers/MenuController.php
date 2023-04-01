<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libs\TMessageManager;
use GustavoMorais\Cms\GusCms;
use GustavoMorais\Cms\LogFacade;

class MenuController extends Controller
{
    use TMessageManager;

    protected $cmsFacade;

    public function __construct()
    {
        $this->cmsFacade = new GusCms();
    }

    public function index()
    {
        $menus = [];

        try {
            $menus = $this->cmsFacade->getMenus();
            $menus = $menus->original['data'];

            return view('menu.index', ['menus' => $menus]);
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
}
