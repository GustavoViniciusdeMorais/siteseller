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
            $template = $this->cmsFacade->getTemplateById('1');
            $template = $template->original['data'];

            $links = $this->cmsFacade->getLinks();
            $links = $links->original['data'];

            return view('site.index', 
            [
                'template' => $template,
                'links' => $links
            ]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
