<?php
require_once "db.php";
require_once "Student.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
<div class="card shadow p-4">

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $student = new Student(
        $_POST["student_id"],
        $_POST["gmail"],
        $_POST["name"],
        $_POST["course"]
    );

    if ($student->save($conn)) {
        echo "<div class='alert alert-success'>Student Saved Successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error Saving Student</div>";
    }
}

// Retrieve all students
$result = $conn->query("SELECT * FROM students ORDER BY date_created DESC");

echo "<h4 class='mt-4'>Student List</h4>";
echo "<table class='table table-bordered table-striped'>";
echo "<tr>
        <th>ID</th>
        <th>Student ID</th>
        <th>Gmail</th>
        <th>Name</th>
        <th>Course</th>
        <th>Date Created</th>
      </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['student_id']}</td>
            <td>{$row['gmail']}</td>
            <td>{$row['name']}</td>
            <td>{$row['course']}</td>
            <td>{$row['date_created']}</td>
          </tr>";
}

echo "</table>";
?>

<a href="index.php" class="btn btn-secondary">Back</a>

</div>
</div>

</body>
</html>
