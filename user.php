<?php

class User
{
    //Declaration des attributs
    public String $name;
    public String $lastname;
    public String $email;

    public function __construct($name,$lastname,$email)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
    }
    

    //Declaration de mes accesseurs
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    public function getLastname(): string 
    {
        return $this->lastname;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getEmail(): string
    {
        return $this->email;
    }


}
