<?php

namespace app\entity;

class User
{
    public $id;
    public $login;
    public $password;
    public $email;

    public function __construct($data)
    {
        $this->id = (int)$data['id'];
        $this->login = $data['login'];
        $this->password = $data['password'];
        $this->email = $data['email'];
    }
}
