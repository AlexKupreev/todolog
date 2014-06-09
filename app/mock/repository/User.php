<?php

namespace app\mock\repository;

use app\entity as Entity;
use app\repository as Repo;

class User implements Repo\UserInterface
{
    /**
     * Array of stored User Entities
     * @var array
     */
    protected $storage = array();

    /**
     * Creates User entity from a data array
     * @param array $data
     * @return Entity\User 
     */
    public function create($id, $login, $password, $email)
    {
        if (empty($id) or ! $this->isFreeId($id)) {
            $id = $this->getUniqId();
        }
        $user = new Entity\User($id, $login, $password, $email);
        $this->storage[$user->getId()] = $user;

        return $user;
    }

    public function getById($id)
    {

    }

    public function getByLogin($login)
    {
        if (empty($this->storage)) {
            return null;
        }

        foreach ($this->storage as $user) {
            if (strcasecmp($user->getLogin(), $login) == 0) {
                return $user;
            }
        }

        return null;
    }

    protected function isFreeId($id)
    {
        return array_key_exists($id, $this->storage);
    }

    protected function getUniqId()
    {
        $keys = array_keys($this->storage);
        if (empty($keys)) {
            return 1;
        }
        return max($keys) + 1;
    }
}
