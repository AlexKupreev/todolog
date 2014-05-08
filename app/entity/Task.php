<?php

namespace app\entity;

class Task
{
    public $id;
    public $userId;
    public $title;
    public $description;
    public $notes;

    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->userId = $data['userId'];
        $this->title = $data['title'];
        $this->description = $data['description'];
        $this->notes = $data['notes'];
    }
}
