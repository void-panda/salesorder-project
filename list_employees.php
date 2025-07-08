<?php
include 'koneksi.php';

$search = isset($_GET['search']) ? $_GET['search'] : '';
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 10;
$offset = ($page - 1) * $limit;

$query = "SELECT * FROM employees WHERE firstName LIKE '%$search%' LIMIT $limit OFFSET $offset";
$result = mysqli_query($conn, $query);

$total_result = mysqli_query($conn, "SELECT COUNT(*) as total FROM employees WHERE firstName LIKE '%$search%'");
$total_data = mysqli_fetch_assoc($total_result)['total'];
$total_pages = ceil($total_data / $limit);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Data Employees</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body class="bg-light">
    <?php require_once './navigation.php'; ?>

    <div class="container py-4">
        <h2>Data Employees</h2>

        <form method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" value="<?= htmlspecialchars($search) ?>" class="form-control" placeholder="Cari...">
                <button class="btn btn-primary">Cari</button>
            </div>
        </form>

        <div class="d-flex justify-content-end mb-3">
            <a href="add_employee.php" class="btn btn-success">Tambah Employee</a>
        </div>

        <table class="table table-bordered table-striped">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Employee Number</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Job Title</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = $offset + 1;
                while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row['employeeNumber'] ?></td>
                        <td><?= $row['firstName'] ?></td>
                        <td><?= $row['lastName'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['jobTitle'] ?></td>
                        <td>
                            <a href="edit_employee.php?id=<?= $row['employeeNumber'] ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="delete_employee.php?id=<?= $row['employeeNumber'] ?>" onclick="return confirm('Hapus data?')" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <nav>
            <ul class="pagination mt-3">
                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                    <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                        <a class="page-link" href="?search=<?= urlencode($search) ?>&page=<?= $i ?>"><?= $i ?></a>
                    </li>
                <?php endfor; ?>
            </ul>
        </nav>
    </div>
</body>

</html>