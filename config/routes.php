<?php

use Rpererah\Mercadinho\Controller\DeleteUser;
use Rpererah\Mercadinho\Controller\ExibeTeste;
use Rpererah\Mercadinho\Controller\FormInsert;
use Rpererah\Mercadinho\Controller\FormUserInterface;
use Rpererah\Mercadinho\Controller\InsertUpdateUser;
use Rpererah\Mercadinho\Controller\ReadAllUsers;

return[
    '/atualiza'=> FormUserInterface::class,
    '/cadastro'=> FormInsert::class,
    '/realiza-cadastro'=> InsertUpdateUser::class,
    '/listar'=> ReadAllUsers::class,
    '/deletar'=> DeleteUser::class,
    '/testinho'=>ExibeTeste::class
];