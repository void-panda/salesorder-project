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
<!DOCTYPE html><html><head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<title>Tambah Customer</title></head><body>
<h2>Tambah Customer</h2>
<form method="POST">
Customer Number: <input type="text" name="customerNumber" required><br>
Customer Name: <input type="text" name="customerName" required><br>
Contact First Name: <input type="text" name="contactFirstName" required><br>
Contact Last Name: <input type="text" name="contactLastName" required><br>
Phone: <input type="text" name="phone" required><br>
City: <input type="text" name="city" required><br>
Country: <input type="text" name="country" required><br>
<button type="submit" name="submit">Simpan</button>
</form></body></html>