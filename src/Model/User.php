<?php

namespace Rpererah\Mercadinho\Model;

/**
 * @Entity
 */
class User
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private int $id_user;
    /**
     * @Column(type="boolean")
     */
    private bool $type_user;
    /**
     * @Column(type="string")
     */
    private string $name_user;
    /**
     * @Column(type="string")
     */
    private string $email_user;
    /**
     * @Column(type="string")
     */
    private string $password_user;
    /**
     * @Column(type="string")
     */
    private string $photo_user;

    /**
     * @return bool
     */
    public function isTypeUser(): bool
    {
        return $this->type_user;
    }

    /**
     * @param bool $type_user
     */
    public function setTypeUser(bool $type_user): void
    {
        $this->type_user = $type_user;
    }

    /**
     * @return string
     */
    public function getNameUser(): string
    {
        return $this->name_user;
    }

    /**
     * @param string $name_user
     */
    public function setNameUser(string $name_user): void
    {
        $this->name_user = $name_user;
    }

    /**
     * @return string
     */
    public function getEmailUser(): string
    {
        return $this->email_user;
    }

    /**
     * @param string $email_user
     */
    public function setEmailUser(string $email_user): void
    {
        $this->email_user = $email_user;
    }

    /**
     * @return string
     */
    public function getPasswordUser(): string
    {
        return $this->password_user;
    }

    /**
     * @param string $password_user
     */
    public function setPasswordUser(string $password_user): void
    {
        $this->password_user = $password_user;
    }


    /**
     * @return int
     */
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
     * @return string
     */
    public function getPhotoUser(): string
    {
        return $this->photo_user;
    }

    /**
     * @param string $photo_user
     */
    public function setPhotoUser(string $photo_user): void
    {
        $this->photo_user = $photo_user;
    }
}