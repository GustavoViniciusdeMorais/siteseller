<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use GustavoMorais\Cms\GusCms;

class TemplateController extends Controller
{
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
            $data = [];
            $data['id'] = $request->id;
            $data['name'] = $request->name;
            $data['title'] = $request->title;
            $data['path'] = $request->path;
            
            $result = $this->cmsFacade
                ->updateTemplateData($data);

            return $this->edit($request->id);
        } catch (Exception $e) {
            return $this->edit($request->id);
        }
    }
}
