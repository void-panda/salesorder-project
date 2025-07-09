<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    $customerNumber = $_POST['customerNumber'];
    $customerName = $_POST['customerName'];
    $contactFirstName = $_POST['contactFirstName'];
    $contactLastName = $_POST['contactLastName'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $country = $_POST['country'];

    $query = "INSERT INTO customers (customerNumber, customerName, contactFirstName, contactLastName, phone, city, country)
              VALUES ('$customerNumber', '$customerName', '$contactFirstName', '$contactLastName', '$phone', '$city', '$country')";
    mysqli_query($conn, $query);
    header("Location: list_customers.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
<div class="container py-5">
    <h2 class="mb-4">Tambah Customer</h2>
    <form method="POST" class="bg-white p-4 rounded shadow-sm">
        <div class="mb-3">
            <label for="customerNumber" class="form-label">Customer Number</label>
            <input type="text" name="customerNumber" id="customerNumber" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="customerName" class="form-label">Customer Name</label>
            <input type="text" name="customerName" id="customerName" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="contactFirstName" class="form-label">Contact First Name</label>
            <input type="text" name="contactFirstName" id="contactFirstName" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="contactLastName" class="form-label">Contact Last Name</label>
            <input type="text" name="contactLastName" id="contactLastName" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" name="city" id="city" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input type="text" name="country" id="country" class="form-control" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        <a href="list_customers.php" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>
