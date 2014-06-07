<?php

namespace app\repository;

use app\request as Request;

interface TaskInterface
{
    /**
     * Creates a task from a data array
     * @param int $id
     * @param int $userId
     * @param Request\Task\Creation $request
     */
    public function create($id, $userId, Request\Task\Creation $request);
}
