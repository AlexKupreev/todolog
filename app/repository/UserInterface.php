<?php

namespace app\repository;

interface UserInterface
{
    /**
     * Creates a User Entity
     * @param int $id
     * @param string $login
     * @param string $password
     * @param string $email
     */
    public function create($id, $login, $password, $email);

    /**
     * Gets User Entity by id
     * @param int $id
     * @return User user entity
     */
    public function getById($id);

    /**
     * Gets User Entity by login
     * @param string $login
     * @return User user entity
     */
    public function getByLogin($login);
}
