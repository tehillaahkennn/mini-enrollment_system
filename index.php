<?php
require_once __DIR__ . '/Person.php';
require_once __DIR__ . '/Student.php';
require_once __DIR__ . '/Teacher.php';
require_once __DIR__ . '/Department.php';
require_once __DIR__ . '/Course.php';
require_once __DIR__ . '/EmailNotifier.php';
require_once __DIR__ . '/Notifier.php';
require_once __DIR__ . '/Service/EnrollmentService.php';
require_once __DIR__ . '/MyParent.php';
require_once __DIR__ . '/Guardian.php';
require_once __DIR__ . '/Dean.php';
require_once __DIR__ . '/Assessment.php';
require_once __DIR__ . '/AssessmentPerformance.php';
require_once __DIR__ . '/Grade.php';
require_once __DIR__ . '/College.php';

$student = new Student('Tehillah Ken Rivas', 'tehillah@email.com');
$teacher = new Teacher('Maria Santos', 'riaa@email.com');
$department = new Department('DCLIS');
$department->addTeacher($teacher);
$department->addStudent($student);

$course = new Course('ICT 86', 'Object-Oriented Programming');
$course->addModule('Introduction to OOP');
$course->addModule('UML');
$course->addModule('Inheritance');
$course->addModule('Polymorphism');

$college = new College('College of Computing');
$college->addDepartment($department);

$assessment = new Assessment('A1', 'Midterm Assessment');
$grade = new Grade('G1', 'Passed');
$performance = new AssessmentPerformance('P1', 'Excellent performance');

$assessment->addGrade($grade);
$student->addAssessmentPerformance($performance);
$department->addAssessment($assessment);

$emailNotifier = new EmailNotifier();
$enrollmentService = new EnrollmentService($emailNotifier);
$enrollmentService->enrollStudent($student, $course);

$parent1 = new MyParent("Vicente B. Rivas", "vic@gmail.com", "Father", "09928673078");
$parent2 = new MyParent("Marilou J. Rivas", "marilou@gmail.com", "Mother", "09096785467");
$guardian = new Guardian("Magdalena Rivas", "magdalena@gmail.com", "Grandmother", "09231455438");

$dean = new Dean("Rozen Rivas", "rozen@gmail.com");

echo "<br>";
echo "Student Name: " . $student->getName() . "<br>";
echo "Email: " . $student->getEmail() . "<br>";
echo "<br>";
echo "Course: " . $course->getCode() . " - " . $course->getTitle() . "<br>";

foreach ($course->getModules() as $module){
    echo "Module: " . $module->getTitle() . "<br>";
}

echo "Teacher: " . $teacher->getName() . "<br>";
echo "<br>";

echo "Assessment: " . $assessment->getCode() . " - " . $assessment->getDescription() . "<br>";
echo "Grade: " . $grade->getCode() . " - " . $grade->getDescription() . "<br>";
echo "Performance: " . $performance->getCode() . " - " . $performance->getDescription() . "<br>";
echo "<br>";

echo "College: " . $college->getName() . "<br>";
echo "Department: " . $department->getName() . "<br>";
echo "<br>";

echo "Dean: " . $dean->getName() . "<br>";
echo "Email: " . $dean->getEmail() . "<br>" . "<br>";

echo "Guardian Name: " . $guardian->getName() . "<br>";
echo "Relationship: " . $guardian->getRelationship() . "<br>";
echo "Phone Number: " . $guardian->getPhoneNumber() . "<br>" . "<br>";

echo "Parent: " . $parent1->getName() . "<br>";
echo "Relationship: " . $parent1->getRelationship() . "<br>";
echo "Phone number: " . $parent1->getPhoneNumber() . "<br>";
echo "Parent: " . $parent2->getName() . "<br>";
echo "Relationship: " . $parent2->getRelationship() . "<br>";
echo "Phone number: " . $parent2->getPhoneNumber() . "<br>" . "<br>";
?>