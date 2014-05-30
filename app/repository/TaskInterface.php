<?php

namespace app\repository;

interface TaskInterface
{
    /**
     * Creates a task from a data array
     * @param array $data
     */
    public function create(array $data);

}
