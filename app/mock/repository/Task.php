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
     * Creates Task entity from a data array
     * @param int $userId
     * @param Request\Task\Creation $request
     * @return Entity\Task
     */
    public function create($id, $userId, Request\Task\Creation $request)
    {
        if (empty($id) or ! $this->isFreeId($id)) {
            $id = $this->getUniqId();
        }
        $task = new Entity\Task($id, $userId, $request->getTitle(), $request->getDescription(), $request->getNotes());
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
