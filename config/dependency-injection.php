<?php

use DI\ContainerBuilder;
use Doctrine\ORM\EntityManagerInterface;
use Rpererah\Mercadinho\Infra\EntityManagerFactory;

$containerBuilder= new ContainerBuilder();

$containerBuilder->addDefinitions([
    EntityManagerInterface::class=>function(){
        return (new EntityManagerFactory())->getEntityManager();
    }
]);
return $containerBuilder->build();