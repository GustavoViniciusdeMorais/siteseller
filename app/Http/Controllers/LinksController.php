<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GustavoMorais\Cms\GusCms;
use Exception;

class LinksController extends Controller
{
    protected $cmsFacade;

    public function __construct()
    {
        $this->cmsFacade = new GusCms();
    }

    public function edit()
    {
        try {
            $links = $this->cmsFacade->getLinks();
            $links = $links->original['data'];
            return view('links.update', ['links' => $links]);
        } catch (Exception $e) {
            //throw $th;
        }
    }

    public function update(Request $request)
    {
        try {
            $this->cmsFacade->updateLinks($request);
            return $this->edit();
        } catch (Exception $e) {
            $this->edit();
        }
    }
}
