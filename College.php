<?php

require_once __DIR__ . '/Department.php';

class College {
    private string $name;
    private array $departments = [];

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function addDepartment(Department $department): void {
        $this->departments[] = $department;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getDepartments(): array {
        return $this->departments;
    }
}
