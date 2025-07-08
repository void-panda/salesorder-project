<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    $employeeNumber = $_POST['employeeNumber'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $jobTitle = $_POST['jobTitle'];
    if ($employeeNumber && $firstName && $email) {
        $query = "INSERT INTO employees (employeeNumber, firstName, lastName, email, jobTitle) VALUES ('$employeeNumber', '$firstName', '$lastName', '$email', '$jobTitle')";
        mysqli_query($conn, $query);
        header("Location: list_employees.php");
    } else {
        echo "Field wajib tidak boleh kosong!";
    }
}
?>
<!DOCTYPE html><html><head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<title>Tambah Employee</title></head><body>
<h2>Tambah Employee</h2>
<form method="POST">
Employee Number: <input type="text" name="employeeNumber" required><br>
First Name: <input type="text" name="firstName" required><br>
Last Name: <input type="text" name="lastName"><br>
Email: <input type="email" name="email" required><br>
Job Title: <input type="text" name="jobTitle"><br>
<button type="submit" name="submit">Simpan</button>
</form></body></html>