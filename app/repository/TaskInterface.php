<?php

namespace app\repository;

use app\request as Request;

interface TaskInterface
{
    /**
     * Creates a task from a data array
     * @param int $userId
     * @param Request\Task\Creation $request
     */
    public function create($userId, Request\Task\Creation $request);
}
