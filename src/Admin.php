<?php

class Admin{

private $id;
private $nom;
private $email;
private $password;

public function __construct($nom,$email, $password) {
  
    $this->nom = $nom;
    $this->email = $email;
    $this->password = $password;
   
}
}