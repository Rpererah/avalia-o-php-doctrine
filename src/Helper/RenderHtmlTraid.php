<?php

namespace Rpererah\Mercadinho\Helper;

trait RenderHtmlTraid{
    public function renderHtml(string $model,array $data):string
    {
        extract($data);
        ob_start();
        require __DIR__.'./../../view/'.$model;
        return $html=ob_get_clean();
    }
}