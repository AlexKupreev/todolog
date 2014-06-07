<?php

namespace app\entity;

class Task
{
    /**
     *
     * @var int $id
     */
    protected $id;

    /**
     *
     * @var int $userId
     */
    protected $userId;

    /**
     *
     * @var string $title
     */
    protected $title;

    /**
     *
     * @var string $description
     */
    protected $description;

    /**
     *
     * @var string $notes
     */
    protected $notes;

    /**
     *
     * @var array $children
     */
    protected $children = [];

    public function __construct($id, $userId, $title, $description, $notes, $children = [])
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->title = $title;
        $this->description = $description;
        $this->notes = $notes;

        if (! empty($children) and is_array($children)) {
            foreach ($children as $child) {
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

    public function getId()
    {
        return $this->id;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getNotes()
    {
        return $this->notes;
    }
}
