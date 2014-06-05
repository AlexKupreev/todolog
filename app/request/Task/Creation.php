<?php

namespace app\request\Task;

use app\service as Service;

/**
 * Request object to contain external requests
 */
class Creation extends Service\Request
{
    protected $title;
    protected $description;
    protected $notes;

    /**
     *
     * @param mixed $data
     */
    public function __construct($data)
    {
        if (is_array($data)) {
            $this->title = $this->extractFromArray($data, 'title', '');
            $this->description = $this->extractFromArray($data, 'description', '');
            $this->notes = $this->extractFromArray($data, 'notes', '');
        }
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
