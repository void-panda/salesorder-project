<?php
include 'koneksi.php';
$id = $_GET['id'];

$query = "DELETE FROM customers WHERE customerNumber='$id'";
if (mysqli_query($conn, $query)) {
    header("Location: list_customers.php");
} else {
    echo "<div class='alert alert-danger'>Gagal hapus: " . mysqli_error($conn) . "</div>";
}
