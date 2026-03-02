<?php
require_once "Student.php";
require_once "functions.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Record Output</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4">

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id     = $_POST["id"];
    $gmail  = $_POST["gmail"];
    $name   = $_POST["name"];
    $course = $_POST["course"];

    // OOP Object
    $student = new Student($id, $gmail, $name, $course);

    echo "<h3 class='text-primary mb-4'>Student Information</h3>";

    echo "<table class='table table-bordered'>";
    echo "<tr><th>ID</th><td>" . strtoupper($student->getID()) . "</td></tr>";
    echo "<tr><th>Email</th><td>" . strtolower($student->getGmail()) . "</td></tr>";
    echo "<tr><th>Name</th><td>" . formatName($student->getName()) . "</td></tr>";
    echo "<tr><th>Course</th><td>" . strtoupper($student->getCourse()) . "</td></tr>";
    echo "</table>";

    // Branching Example
    if (strpos($gmail, "@gmail.com")) {
        echo "<p class='text-success'>Valid Gmail Address</p>";
    } else {
        echo "<p class='text-danger'>Not a Gmail Address</p>";
    }

    echo "<hr>";

    // Repetition Example
    echo "<h5>Name Characters:</h5>";
    $length = strlen($name);

    for ($i = 0; $i < $length; $i++) {
        echo "<span class='badge bg-secondary me-1'>" . $name[$i] . "</span>";
    }

}
?>

        <a href="index.php" class="btn btn-outline-secondary mt-3">Back</a>

    </div>
</div>

</body>
</html>
