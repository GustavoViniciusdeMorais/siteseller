<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use GustavoMorais\Cms\GusCms;
use Illuminate\Support\Facades\Session;
use App\Libs\TMessageManager;

class ContactInfosController extends Controller
{
    use TMessageManager;
    
    protected $cmsFacade;

    public function __construct()
    {
        $this->cmsFacade = new GusCms();
    }

    public function index()
    {
        try {
            $contactInfos = $this->cmsFacade->getContactInfos();
            $contactInfos = $contactInfos->original['data'];

            if (app()->runningInConsole()) {
                return $contactInfos;
            }

            return view('contact-infos.index', ['contactInfos' => $contactInfos]);
        } catch (Exception $e) {
            
        }
    }

    public function update(Request $request)
    {
        try {
            $this->resetSessionMessage();
            
            $this->cmsFacade->updateContactInfos($request);

            Session::flash('message', __('messages.success'));

            return $this->index();
        } catch (Exception $e) {
            $this->resetSessionMessage();
            Session::flash('error', $e->getMessage());
            return $this->index();
        }
    }
}
