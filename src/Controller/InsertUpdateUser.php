<?php

namespace Rpererah\Mercadinho\Controller;


use Doctrine\ORM\EntityManagerInterface;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
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
        $email=filter_var($post['email'],FILTER_SANITIZE_STRING);
        $password=password_hash($post['psw'], PASSWORD_ARGON2I);;

        $user=new User();
        $objetoImagem=new Upload();
        $diretorio=__DIR__.'/../../public/images/users/';
        $nomeModificado=md5($name);

        $user->setNameUser($name);
        $user->setEmailUser($email);
        $user->setTypeUser(0);
        $user->setPasswordUser($password);
        $user->setPhotoUser($objetoImagem->uploadImagem("userfile","$diretorio",$nomeModificado,"image/jpg,image/jpeg,image/png"));



        $get=$request->getQueryParams();
        $id=filter_var($get['id'],FILTER_VALIDATE_INT);
        if(!is_null($id) && $id!==false){
            $user->setIdUser($id);
            $this->entityManager->merge($user);

        }else{
            $this->entityManager->persist(($user));
        }

        $this->entityManager->flush();
        return new Response(302,['location'=>'/listar']);
    }

}

