<?php

namespace App\Models;
use App\Core\Model;

class Account extends Model
{
    protected $id;
    protected string $login;
    protected string $password;
    protected string $name;
    protected string $email;

    public function __construct($login = '',$password = '',$name = '',$email = '')
    {
        $this->login = $login;
        $this->password = $password;
        $this->name = $name;
        $this->email = $email;
    }


    public function getId()
    {
        return $this->id;
    }


    public function getLogin()
    {
        return $this->login;
    }


    public function getPassword()
    {
        return $this->password;
    }


    public function getName()
    {
        return $this->name;
    }


    public function getEmail()
    {
        return $this->email;
    }



    public function setId($id)
    {
        $this->id = $id;
    }


    public function setLogin($login)
    {
        $this->login = $login;
    }


    public function setPassword($password)
    {
        $this->password = $password;
    }


    public function setName($name)
    {
        $this->name = $name;
    }


    public function setEmail($email)
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


