<?php

namespace Rpererah\Mercadinho\Controller;


use Doctrine\ORM\EntityManagerInterface;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Rpererah\Mercadinho\Model\User;

class DeleteUser implements RequestHandlerInterface
{
    /**
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $get=$request->getQueryParams();
        $id=filter_var($get['id'],FILTER_VALIDATE_INT);
        $resposta=new Response(302,['location'=>'/listar']);
        if(is_null($id) || $id===false){
            header('location:/listar');
            return $resposta;
        }
        $usuario=$this->entityManager->getReference(User::class,$id);
        $this->entityManager->remove($usuario);
        $this->entityManager->flush();
        return $resposta;
    }
}