<?php

namespace app\repository;

use app\entity as Entity;

interface TaskInterface
{
    /**
     * Creates a task object from a data array
     * @param int $id
     * @param int $userId
     * @param string $title
     * @param string $description
     * @param string $notes
     * 
     * @return Entity\Task
     */
    public function create($id, $userId, $title, $description, $notes);

    /**
     * Adds a task to the storage
     * @param Entity\Task $task
     *
     */
    public function add(Entity\Task $task);
}
