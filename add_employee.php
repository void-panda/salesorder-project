<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    $employeeNumber = $_POST['employeeNumber'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $jobTitle = $_POST['jobTitle'];

    if ($employeeNumber && $firstName && $email) {
        $query = "INSERT INTO employees (employeeNumber, firstName, lastName, email, jobTitle)
                  VALUES ('$employeeNumber', '$firstName', '$lastName', '$email', '$jobTitle')";
        mysqli_query($conn, $query);
        header("Location: list_employees.php");
    } else {
        echo "<div class='alert alert-danger'>Field wajib tidak boleh kosong!</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
<div class="container py-5">
    <h2 class="mb-4">Tambah Employee</h2>
    <form method="POST" class="bg-white p-4 rounded shadow-sm">
        <div class="mb-3">
            <label for="employeeNumber" class="form-label">Employee Number</label>
            <input type="text" name="employeeNumber" id="employeeNumber" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" name="firstName" id="firstName" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" name="lastName" id="lastName" class="form-control">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="jobTitle" class="form-label">Job Title</label>
            <input type="text" name="jobTitle" id="jobTitle" class="form-control">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        <a href="list_employees.php" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>
