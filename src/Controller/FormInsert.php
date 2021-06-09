<?php


namespace Rpererah\Mercadinho\Controller;


use Alura\Cursos\Helper\RenderizaHtmlTraid;
use Doctrine\ORM\EntityManagerInterface;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Rpererah\Mercadinho\Helper\RenderHtmlTraid;

class FormInsert implements RequestHandlerInterface
{
    use RenderHtmlTraid;

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
        $html = $this->renderHtml('user/form.php', ['titulo' => 'Cadastrar Usuario']);
        return new Response(200, [], $html);
    }
}
