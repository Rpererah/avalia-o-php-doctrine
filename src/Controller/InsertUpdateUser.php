<?php

namespace Rpererah\Mercadinho\Controller;


use Doctrine\ORM\EntityManagerInterface;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Rpererah\Mercadinho\Infra\EntityManagerFactory;
use Rpererah\Mercadinho\Model\User;

class InsertUpdateUser implements RequestHandlerInterface
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
        $post=$request->getParsedBody();

        $name=filter_var($post['user'],FILTER_SANITIZE_STRING);
        $photo=filter_var($post['photo'],FILTER_SANITIZE_STRING);
        $email=filter_var($post['email'],FILTER_SANITIZE_STRING);
        $type=filter_var($post['type'], FILTER_VALIDATE_INT);
        $password=password_hash($post['psw'], PASSWORD_ARGON2I);;

        $user=new User();
        $user->setNameUser($name);
        $user->setPasswordUser($password);
        $user->setTypeUser($type);
        $user->setPhotoUser($photo);
        $user->setEmailUser($email);

        $get=$request->getParsedBody();
        $this->entityManager->merge(($user));
        $this->entityManager->persist(($user));
        $this->entityManager->flush();

        return new Response(200,['location'=>'/listar']);
    }

}

