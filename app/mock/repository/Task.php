<?php

namespace app\mock\repository;

use app\entity as Entity;
use app\repository as Repo;
use app\request as Request;

class Task implements Repo\TaskInterface
{
    /**
     * Array of root Task Entities
     * @var array
     */
    protected $root = [];

    /**
     * Array of occupied task IDs
     * @var array
     */
    protected $taskIds = [];

    /**
     * {@inheritDoc}
     */
    public function create($id, $userId, $title, $description, $notes)
    {
        if (empty($id) or ! $this->isFreeId($id)) {
            $id = $this->getUniqId();
        }
        $task = new Entity\Task($id, $userId, $title, $description, $notes);
        $this->taskIds[] = $task->getId();

        return $task;
    }

    protected function isFreeId($id)
    {
        return array_key_exists($id, $this->taskIds);
    }

    protected function getUniqId()
    {
        $keys = array_keys($this->taskIds);
        if (empty($keys)) {
            return 1;
        }
        return max($keys) + 1;
    }
}
