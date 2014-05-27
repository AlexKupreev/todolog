<?php

namespace app\entity;

class Task
{
    public $id;
    public $userId;
    public $title;
    public $description;
    public $notes;
    public $children = [];

    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->userId = $data['userId'];
        $this->title = $data['title'];
        $this->description = $data['description'];
        $this->notes = $data['notes'];

        if ( ! empty($data['children']) and is_array($data['children'])) {
            foreach ($data['children'] as $child) {
                if ($child instanceof Task) {
                    $this->children[] = $child;
                }
            }
        }
    }

    public function addChild(Task $task)
    {
        $this->children[] = $task;
    }
}
