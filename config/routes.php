<?php

use Rpererah\Mercadinho\Controller\FormUserInterface;
use Rpererah\Mercadinho\Controller\InsertUpdateUser;
use Rpererah\Mercadinho\Controller\ReadAllUsers;

return[
    '/cadastro'=> FormUserInterface::class,
    '/realiza-cadastro'=> InsertUpdateUser::class,
    '/listar'=> ReadAllUsers::class
];