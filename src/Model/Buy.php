<?php

namespace Rpererah\Mercadinho\Model;

class Buy
{
private int $id_buy;
private int $id_user;
private int $id_product;
private int $id_quantity;


    public function getIdBuy(): int
    {
        return $this->id_buy;
    }


    public function setIdBuy(int $id_buy): void
    {
        $this->id_buy = $id_buy;
    }

    
    public function getIdUser(): int
    {
        return $this->id_user;
    }

    /**
     * @param int $id_user
     */
    public function setIdUser(int $id_user): void
    {
        $this->id_user = $id_user;
    }

    /**
     * @return int
     */
    public function getIdProduct(): int
    {
        return $this->id_product;
    }

    /**
     * @param int $id_product
     */
    public function setIdProduct(int $id_product): void
    {
        $this->id_product = $id_product;
    }

    /**
     * @return int
     */
    public function getIdQuantity(): int
    {
        return $this->id_quantity;
    }

    /**
     * @param int $id_quantity
     */
    public function setIdQuantity(int $id_quantity): void
    {
        $this->id_quantity = $id_quantity;
    }
}