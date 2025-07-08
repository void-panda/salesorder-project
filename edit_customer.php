<?php
include 'koneksi.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM customers WHERE customerNumber='$id'");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $customerName = $_POST['customerName'];
    $contactFirstName = $_POST['contactFirstName'];
    $contactLastName = $_POST['contactLastName'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $country = $_POST['country'];

    $query = "UPDATE customers SET customerName='$customerName', contactFirstName='$contactFirstName',
              contactLastName='$contactLastName', phone='$phone', city='$city', country='$country'
              WHERE customerNumber='$id'";
    mysqli_query($conn, $query);
    header("Location: list_customers.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-light">
    <div class="container py-5">
        <h2 class="mb-4">Edit Customer</h2>
        <form method="POST" class="bg-white p-4 rounded shadow-sm">
            <div class="mb-3">
                <label for="customerName" class="form-label">Customer Name</label>
                <input type="text" name="customerName" id="customerName" class="form-control" value="<?= $row['customerName'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="contactFirstName" class="form-label">Contact First Name</label>
                <input type="text" name="contactFirstName" id="contactFirstName" class="form-control" value="<?= $row['contactFirstName'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="contactLastName" class="form-label">Contact Last Name</label>
                <input type="text" name="contactLastName" id="contactLastName" class="form-control" value="<?= $row['contactLastName'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" value="<?= $row['phone'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" name="city" id="city" class="form-control" value="<?= $row['city'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <input type="text" name="country" id="country" class="form-control" value="<?= $row['country'] ?>" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
            <a href="list_customers.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>

</html>