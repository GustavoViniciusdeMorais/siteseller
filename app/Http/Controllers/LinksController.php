<?php

namespace App\Http\Controllers;

use App\Libs\TMessageManager;
use Illuminate\Http\Request;
use GustavoMorais\Cms\GusCms;
use Exception;
use Illuminate\Support\Facades\Session;

class LinksController extends Controller
{
    use TMessageManager;

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
            $this->resetSessionMessage();

            $this->cmsFacade->updateLinks($request);

            Session::flash('message', __('messages.success'));

            return $this->edit();
        } catch (Exception $e) {
            $this->resetSessionMessage();
            Session::flash('error', $e->getMessage());
            return $this->edit();
        }
    }
}
