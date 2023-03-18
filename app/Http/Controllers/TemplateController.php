<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use GustavoMorais\Cms\GusCms;
use Illuminate\Support\Facades\Session;
use App\Libs\TMessageManager;

class TemplateController extends Controller
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
            $templates = $this->cmsFacade->getTemplates();
            $templates = $templates->original['data'];
            return view('template.index', ['templates' => $templates]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function edit($id)
    {
        try {
            $template = $this->cmsFacade->getTemplateById($id);
            $template = $template->original['data'];
            return view('template.update', ['template' => $template]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function update(Request $request)
    {
        try {
            $this->resetSessionMessage();

            $data = [];
            $data['id'] = $request->id;
            $data['name'] = $request->name;
            $data['title'] = $request->title;
            $data['path'] = $request->path;
            
            $result = $this->cmsFacade
                ->updateTemplateData($data);

            Session::flash('message', __('messages.success'));

            return $this->edit($request->id);
        } catch (Exception $e) {
            $this->resetSessionMessage();
            Session::flash('error', $e->getMessage());
            return $this->edit($request->id);
        }
    }
}
