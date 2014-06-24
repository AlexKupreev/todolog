<?php

namespace app\mock\repository;

use app\entity as Entity;
use app\repository as Repo;

class Task implements Repo\TaskInterface
{
    /**
     * Array of root Task Entities
     * @var array
     */
    protected $root = [];

    /**
     * {@inheritDoc}
     */
    public function create($id, $userId, $title, $description, $notes)
    {
        return new Entity\Task($id, $userId, $title, $description, $notes);
    }

    /**
     * {@inheritDoc}
     */
    public function add(Entity\Task $task)
    {
        if ( ! $task->getId() or ! $this->isFreeId($task->getId())) {
            $task->setId($this->getUniqId());
        }

        $this->root[$task->getId()] = $task;

        return true;
    }

    protected function isFreeId($id)
    {
        return array_key_exists($id, $this->root);
    }

    protected function getUniqId()
    {
        $keys = array_keys($this->root);
        if (empty($keys)) {
            return 1;
        }
        return max($keys) + 1;
    }
}
