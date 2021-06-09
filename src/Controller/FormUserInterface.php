<?php

namespace Rpererah\Mercadinho\Controller;


use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectRepository;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Rpererah\Mercadinho\Helper\RenderHtmlTraid;
use Rpererah\Mercadinho\Model\User;

/**
 * @property ObjectRepository repositoryUser
 */
class FormUserInterface implements RequestHandlerInterface
{
use RenderHtmlTraid;

public function __construct(EntityManagerInterface $entityManager)
{
    $this->repositoryUser=$entityManager->getRepository(User::class);
}

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $get=$request->getQueryParams();
        $id=filter_var($get['id'],FILTER_VALIDATE_INT);
        $resposta=new Response(302,['location'=>'/listar']);
        if(is_null($id) || $id===false){
            return $resposta;
        }
        $user=$this->repositoryUser->find($id);
        $tituloPagina="Edita Cadastro";
        $html=$this->renderHtml('user/form.php',['titulo'=>$tituloPagina,'user'=>$user]);
        return new Response(200,[],$html);
    }
}