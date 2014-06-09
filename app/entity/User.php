<?php

namespace app\entity;

class User
{
    /**
     *
     * @var int $id
     */
    protected $id;

    /**
     *
     * @var string $login
     */
    protected $login;

    /**
     * Hashed password
     * @var string $password
     */
    protected $password;

    /**
     *
     * @var string $email
     */
    protected $email;

    public function __construct($id, $login, $password, $email)
    {
        $this->id = (int)$id;
        $this->login = (string)$login;
        $this->password = (string)$password;
        $this->email = (string)$email;
    }

    /**
     * Returns user ID
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns user login
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }
}
