<?php

require_once __DIR__ . '/Student.php';
require_once __DIR__ . '/Teacher.php';
require_once __DIR__ . '/Assessment.php';

class Department{
    //properties
    private string $name;
    private array $students = [];
    private array $teachers = [];
    private array $assessments = [];

    //constructor
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    //methods for adding a student to the department
    public function addStudent(Student $student): void
    {
        $this->students[] = $student;
    }

    //method for adding a teacher to the department
    public function addTeacher(Teacher $teacher): void
    {
        $this->teachers[] = $teacher;
    }

    public function addAssessment(Assessment $assessment): void
    {
        $this->assessments[] = $assessment;
    }

    //method for getting the students of the department
    public function getStudents(): array
    {
        return $this->students;
    }

    //method for getting the teachers of the department
    public function getTeachers(): array
    {
        return $this->teachers;
    }

    public function getAssessments(): array
    {
        return $this->assessments;
    }
}