<?php

namespace App\Libs;

use Illuminate\Support\Facades\Session;

trait TMessageManager
{
    public function resetSessionMessage()
    {
        Session::forget('message');
        Session::forget('error');
    }
}
