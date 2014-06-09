<?php

namespace app\repository;

use app\request as Request;

interface TaskInterface
{
    /**
     * Creates a task from a data array
     * @param int $id
     * @param int $userId
     * @param string $title
     * @param string $description
     * @param string $notes
     * 
     * @return Entity\Task
     */
    public function create($id, $userId, $title, $description, $notes);
}
