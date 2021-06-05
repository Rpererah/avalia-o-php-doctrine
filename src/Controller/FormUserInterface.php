<?php

namespace Rpererah\Mercadinho\Controller;


use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Rpererah\Mercadinho\Helper\RenderHtmlTraid;

class FormUserInterface implements RequestHandlerInterface
{
use RenderHtmlTraid;

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $html=$this->renderHtml('user/form.php',['titulo'=>'Cadastro']);

        return new Response(200,[],$html);
    }
}