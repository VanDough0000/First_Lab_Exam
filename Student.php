<?php

class Student {

    private $id;
    private $gmail;
    private $name;
    private $course;

    public function __construct($id, $gmail, $name, $course) {
        $this->id = $id;
        $this->gmail = $gmail;
        $this->name = $name;
        $this->course = $course;
    }

    public function getID() {
        return $this->id;
    }

    public function getGmail() {
        return $this->gmail;
    }

    public function getName() {
        return $this->name;
    }

    public function getCourse() {
        return $this->course;
    }
}

?>
