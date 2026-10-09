<?php

require_once __DIR__ . '/Person.php';
require_once __DIR__ . '/Course.php';
require_once __DIR__ . '/AssessmentPerformance.php';

class Student extends Person{

//properties
private array $courses = [];
private array $assessmentPerformances = [];

//method for adding a course
    public function enroll(Course $course): void
{
        $this->courses[] = $course;
}

    public function addAssessmentPerformance(AssessmentPerformance $performance): void
    {
        $this->assessmentPerformances[] = $performance;
    }

//methods for fetching the courses
public function getCourses(): array
{
    return $this->courses;
}

public function getAssessmentPerformances(): array
{
    return $this->assessmentPerformances;
}

}