<?php

namespace app\entity;

class User {
    public $id;
    public $email;
    public $password;

    public function __construct($data) {
        $this->id = $data['id'];
        $this->email = $data['email'];
        $this->password = $data['password'];
    }
}
