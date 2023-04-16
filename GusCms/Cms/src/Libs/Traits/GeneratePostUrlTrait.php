<?php

namespace GustavoMorais\Cms\Libs\Traits;

trait GeneratePostUrlTrait
{
    public function generatePostUrl($name)
    {
        $name = strtolower($name);
        return str_replace([" ", ","], ["-"], $name);
    }
}
