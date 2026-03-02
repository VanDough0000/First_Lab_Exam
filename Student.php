<?php

class Student {

    private $student_id;
    private $gmail;
    private $name;
    private $course;

    public function __construct($student_id, $gmail, $name, $course) {
        $this->student_id = $student_id;
        $this->gmail = $gmail;
        $this->name = $name;
        $this->course = $course;
    }

    public function save($conn) {

        $stmt = $conn->prepare("INSERT INTO students (student_id, gmail, name, course) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $this->student_id, $this->gmail, $this->name, $this->course);
        return $stmt->execute();
    }
}

?>
