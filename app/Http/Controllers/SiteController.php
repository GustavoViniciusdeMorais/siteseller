<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GustavoMorais\Cms\GusCms;

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

            return view('site.index', 
            [
                'template' => $template,
                'links' => $links,
                'contactInfos' => $contactInfos,
            ]);
        } catch (\Throwable $th) {
            //throw $th;
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
}
