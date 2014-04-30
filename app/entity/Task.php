<?php

namespace app\entity;

class Task {
    public $id;
    public $title;
    public $description;
    public $notes;

    function __construct($data) {
        $this->id = $data['id'];
        $this->title = $data['title'];
        $this->description = $data['description'];
        $this->notes = $data['notes'];
    }
}
