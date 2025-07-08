<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM employees WHERE employeeNumber='$id'");
$row = mysqli_fetch_assoc($data);

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $jobTitle = $_POST['jobTitle'];

    $query = "UPDATE employees SET firstName='$firstName', lastName='$lastName', email='$email', jobTitle='$jobTitle' WHERE employeeNumber='$id'";
    mysqli_query($conn, $query);
    header("Location: list_employees.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-light">
    <div class="container py-5">
        <h2 class="mb-4">Edit Employee</h2>
        <form method="POST" class="bg-white p-4 rounded shadow-sm">
            <div class="mb-3">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" name="firstName" id="firstName" class="form-control" value="<?= $row['firstName'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" name="lastName" id="lastName" class="form-control" value="<?= $row['lastName'] ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="<?= $row['email'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="jobTitle" class="form-label">Job Title</label>
                <input type="text" name="jobTitle" id="jobTitle" class="form-control" value="<?= $row['jobTitle'] ?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
            <a href="list_employees.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>

</html>