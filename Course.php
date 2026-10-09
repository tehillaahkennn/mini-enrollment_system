<?php

require_once __DIR__ . '/CourseModule.php';

class Course{
    //properties
    private string $code;
    private string $title;
    private array $modules=[];

    //constructor
    public function __construct(string $code, string $title)
    {
        $this->code = $code;
        $this->title =$title;
    }

    //methods for adding a module to the course
    public function addModule (string $title):void
    {
        $this->modules[] = new CourseModule($title);
    }

    public function addModules(string $title): void
    {
        $this->addModule($title);
    }

    //methods for getting the modules of  the  course
    public function getModules():array
    {
        return $this->modules;
    }

    //method for getting the course code
    public function getCode():string
    {
        return $this->code;
    }

    //method for getting the course title
    public function getTitle():string
    {
        return $this->title;
    }

}
