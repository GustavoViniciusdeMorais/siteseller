<?php

namespace GustavoMorais\Cms\Actions\Logs;

use GustavoMorais\Cms\Actions\AbAction;
use GustavoMorais\Cms\Models\Log;

class RegisterLogAction extends AbAction
{
    public function execute()
    {
        if ($this->data instanceof \Exception) {
            $info = [
                'file' => $this->data->getFile(),
                'line' => $this->data->getLine(),
                'message' => $this->data->getMessage(),
                'trace' => ''
            ];
            $log = Log::create($info);
            return $this->success($log);
        }
    }
}
