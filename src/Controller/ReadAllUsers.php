<?php

namespace Rpererah\Mercadinho\Controller;


use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectRepository;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Rpererah\Mercadinho\Helper\RenderHtmlTraid;
use Rpererah\Mercadinho\Infra\EntityManagerFactory;
use Rpererah\Mercadinho\Model\User;


class ReadAllUsers implements RequestHandlerInterface
{
    use RenderHtmlTraid;
    /**
     * @var EntityManagerInterface
     */

    /**
     * @property ObjectRepository repository
     */
    private ObjectRepository $repository;

    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {

        $this->entityManager = $entityManager;
        $this->repository=$entityManager->getRepository(User::class);
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $users=$this->repository->findAll();
        $html=$this->renderHtml('user/lista.php',['titulo'=>'Listar','users'=>$users]);
        return new Response(200,[],$html);
    }
}