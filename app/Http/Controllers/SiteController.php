<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GustavoMorais\Cms\GusCms;
use GustavoMorais\Cms\LogFacade;

class SiteController extends Controller
{
    protected $cmsFacade;

    public function __construct()
    {
        $this->cmsFacade = new GusCms();
    }

    public function index()
    {
        try {
            $template = $this->getTemplateInfo();
            $links = $this->getLinks();
            $contactInfos = $this->getContactInfo();
            $menu = $this->getMenu();
            // print_r(json_encode([$menu]));echo "\n\n";exit;

            return view('site.index', 
            [
                'template' => $template,
                'links' => $links,
                'contactInfos' => $contactInfos,
                'menu' => $menu
            ]);
        } catch (\Exception $e) {
            LogFacade::registerLog($e);
        }
    }

    public function getTemplateInfo()
    {
        $template = $this->cmsFacade->getTemplateById('1');
        return $template->original['data'];
    }

    public function getLinks()
    {
        $links = $this->cmsFacade->getLinks();
        return $links->original['data'];
    }

    public function getContactInfo()
    {
        $contactInfos = $this->cmsFacade->getContactInfos();
        return $contactInfos->original['data'];
    }

    public function getMenu()
    {
        $menu = $this->cmsFacade->getMenuByColumn(
            ['status' => 'principal']
        );        
        return $menu->original['data'];
    }
}
