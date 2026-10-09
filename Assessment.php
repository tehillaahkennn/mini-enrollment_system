<?php

require_once __DIR__ . '/Grade.php';

class Assessment {
    private string $code;
    private string $description;
    private array $grades = [];

    public function __construct(string $code, string $description) {
        $this->code = $code;
        $this->description = $description;
    }

    public function addGrade(Grade $grade): void {
        $this->grades[] = $grade;
    }

    public function getCode(): string {
        return $this->code;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getGrades(): array {
        return $this->grades;
    }
}
