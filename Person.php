<?php

abstract class Person{

//properties
protected string $name;
protected string $email;

//constructor
public  function __construct(string $name, string $email){
    $this->name = $name;
    $this->email = $email;
}

//methods
public  function getName():  string
{
    return $this->name;
}
public function getEmail(): string
{
    return $this->email;
}
}