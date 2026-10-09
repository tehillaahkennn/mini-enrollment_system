<?php

require_once __DIR__ . '/../Notifier.php';
require_once __DIR__ . '/../Student.php';
require_once __DIR__ . '/../Course.php';

class EnrollmentService{

//properties
private  Notifier $notifier;

public function __construct(Notifier $notifier)
{
    $this->notifier = $notifier;
}

//method student enrollment
public  function enrollStudent (Student $student, Course $course): void
{
    $student->enroll($course);

    echo $this->notifier->send ($student->getEmail(), "Enrolled Suuccessfully in " . $course->getTitle());
    echo PHP_EOL;
}

}