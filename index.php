<!DOCTYPE html>
<html>
<head>
    <title>Student Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4">
        <h3 class="text-center mb-4">Student Record Form</h3>

        <form method="POST" action="process.php">

            <div class="mb-3">
                <label class="form-label">Student ID</label>
                <input type="text" name="student_id" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Gmail</label>
                <input type="email" name="gmail" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Course</label>
                <input type="text" name="course" class="form-control" required>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Save Student</button>
            </div>

        </form>
    </div>
</div>

</body>
</html>
