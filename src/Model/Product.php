<?php


namespace Rpererah\Mercadinho\Model;

/**
 * @Entity
 */
class Product
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private int $id_product;
    /**
     * @Column(type="string")
     */
    private string $name_product;
    /**
     * @Column(type="float")
     */
    private float $price_product;
    /**
     * @Column(type="float")
     */
    private float $collectivePrice_product;
    /**
     * @Column(type="string")
     */
    private string $photo_product;
    /**
     * @Column(type="integer")
     */
    private int $collectiveNumber_product;

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
     * @return string
     */
    public function getNameProduct(): string
    {
        return $this->name_product;
    }

    /**
     * @param string $name_product
     */
    public function setNameProduct(string $name_product): void
    {
        $this->name_product = $name_product;
    }

    /**
     * @return float
     */
    public function getPriceProduct(): float
    {
        return $this->price_product;
    }

    /**
     * @param float $price_product
     */
    public function setPriceProduct(float $price_product): void
    {
        $this->price_product = $price_product;
    }

    /**
     * @return float
     */
    public function getCollectivePriceProduct(): float
    {
        return $this->collectivePrice_product;
    }

    /**
     * @param float $collectivePrice_product
     */
    public function setCollectivePriceProduct(float $collectivePrice_product): void
    {
        $this->collectivePrice_product = $collectivePrice_product;
    }

    /**
     * @return string
     */
    public function getPhotoProduct(): string
    {
        return $this->photo_product;
    }

    /**
     * @param string $photo_product
     */
    public function setPhotoProduct(string $photo_product): void
    {
        $this->photo_product = $photo_product;
    }

    /**
     * @return int
     */
    public function getCollectiveNumberProduct(): int
    {
        return $this->collectiveNumber_product;
    }

    /**
     * @param int $collectiveNumber_product
     */
    public function setCollectiveNumberProduct(int $collectiveNumber_product): void
    {
        $this->collectiveNumber_product = $collectiveNumber_product;
    }
}