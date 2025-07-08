<?php
include 'koneksi.php';
$query = "SELECT country, COUNT(*) AS jumlah_customer FROM customers GROUP BY country ORDER BY jumlah_customer DESC";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Laporan Customer</title>
    <style>
        body {
            font-family: Arial;
            margin: 20px;
        }

        table {
            border-collapse: collapse;
            width: 50%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <?php require_once './navigation.php'; ?>

    <div class="container">
        <h3>Laporan Jumlah Customer per Negara</h3>
        <table>
            <tr>
                <th>No</th>
                <th>Negara</th>
                <th>Jumlah Customer</th>
            </tr>
            <?php $no = 1;
            while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['country'] ?></td>
                    <td><?= $row['jumlah_customer'] ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>

</html>