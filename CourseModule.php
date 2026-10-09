<?php

class CourseModule{

//properties
private string  $title;

//constructor
public function __construct(string $title)
{
    $this->title = $title;
}

//methods for getting the title 
public function getTitle():string
{
    return $this->title;
} 
}