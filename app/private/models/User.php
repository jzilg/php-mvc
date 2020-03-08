<?php

namespace models\user;

class User
{
    protected $id;
    protected $email;

    public function setId($val) {
        $this->id = $val;
    }

    public function getId() {
        return $this->id;
    }

    public function setEmail($val) {
        $this->email = $val;
    }

    public function getEmail() {
        return $this->email;
    }
}
