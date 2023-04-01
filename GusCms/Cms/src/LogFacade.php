<?php

namespace GustavoMorais\Cms;

use GustavoMorais\Cms\Actions\Logs\RegisterLogAction;

class LogFacade
{
    public static function registerLog($data)
    {
        $action = new RegisterLogAction();
        return $action->withData($data)->execute();
    }
}
