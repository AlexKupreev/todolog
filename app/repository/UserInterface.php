<?php

namespace app\repository;

interface UserInterface
{
    /**
     * Creates a user from a data array
     * @param array $data
     */
    public function create(array $data);

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
