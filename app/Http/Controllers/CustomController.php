<?php

namespace App\Http\Controllers;

use GustavoMorais\Cms\GusCms;
use GustavoMorais\Cms\PostsFacade;

class CustomController extends Controller
{
    protected $cmsFacade;
    protected $postsFacade;

    public function __construct()
    {
        $this->cmsFacade = new GusCms();
        $this->postsFacade = new PostsFacade();
    }
}
