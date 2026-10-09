<?php

require_once __DIR__ . '/Person.php';

class Teacher extends Person{

//methods
public function getRole(): string
{
    return 'Teacher';
} 
}