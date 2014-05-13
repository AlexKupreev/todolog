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
    public function create(array $data)
    {
        if (empty($data['id']) OR ! $this->isFreeId($data['id'])){
            $data['id'] = $this->getUniqId();
        }
        $user = new Entity\User($data);
        $this->storage[$user->id] = $user;

        return $user;
    }

    public function getById($id)
    {

    }

    public function getByLogin($login)
    {
        if (empty($this->storage)) {
            return NULL;
        }

        foreach ($this->storage as $user) {
            if (strcasecmp($user->login, $login) == 0) {
                return $user;
            }
        }

        return NULL;
    }

    protected function isFreeId($id) {
        return array_key_exists($id, $this->storage);
    }

    protected function getUniqId() {
        $keys = array_keys($this->storage);
        if (empty($keys)) {
            return 1;
        }
        return max($keys) + 1;
    }
}
