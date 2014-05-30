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
     * Array of occupied task IDs
     * @var array
     */
    protected $taskIds = [];

    /**
     * Creates Task entity from a data array
     * @param array $data
     * @return Entity\Task
     */
    public function create(array $data)
    {
        if (empty($data['id']) or ! $this->isFreeId($data['id'])) {
            $data['id'] = $this->getUniqId();
        }
        $task = new Entity\Task($data);
        $this->taskIds[] = $task->id;

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
