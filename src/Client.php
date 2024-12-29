<?php

class Client{

    private $id;
    private $nom;
    private $age;
    private $email;
    private $password;

    public function __construct($nom, $age, $email, $password) {
        $this->nom = $nom;
        $this->age = $age;
        $this->email = $email;
        $this->password = $password;
    }

}