<?php

namespace App\Models;
use App\Core\Model;

class Account extends Model
{
    protected $id;
    protected $login;
    protected $password;
    protected $name;
    protected $email;

    /*public function __construct(int $id, string $login, string $password, ?string $name, string $email)
    {
        $this->id = $id;
        $this->login = $login;
        $this->password = $password;
        $this->name = $name;
        $this->email = $email;
    }
    */
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param string|null $login
     */
    public function setLogin(?string $login)
    {
        $this->login = $login;
    }

    /**
     * @param string|null $password
     */
    public function setPassword(?string $password)
    {
        $this->password = $password;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name)
    {
        $this->name = $name;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email)
    {
        $this->email = $email;
    }

    static public function setTableName(): string
    {
        return "accounts";
    }

    static public function setColumnNames(): array
    {
        return ["id", "login", "password", "name", "email"];
    }

}


