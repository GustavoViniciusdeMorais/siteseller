<?php

namespace GustavoMorais\Cms\Facades;

use Illuminate\Support\Facades\Facade;

class PostsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'postsfacade';
    }
}
