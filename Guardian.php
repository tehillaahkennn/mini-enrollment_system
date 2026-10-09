<?php

require_once __DIR__.'/Person.php';

class Guardian extends Person{

    private string $relationship;
    private string $phoneNumber;

    public function __construct(string $name, string $email, string $relationship, string $phoneNumber){
        parent::__construct($name, $email);
        $this->relationship = $relationship;
        $this->phoneNumber = $phoneNumber;
    }

    public function getName(): string{
        return $this->name;
    }
    public function getEmail(): string{
        return $this->email;
    }
    public function getRelationship(): string{
        return $this->relationship;
    }
    public function getPhoneNumber(): string{
        return $this->phoneNumber;
    }
}