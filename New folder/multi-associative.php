<?php
// Multi-associative array
$employees = array(
    array(
        "nama" => "John Doe",
        "posisi" => "Manager",
        "gaji" => 5000
    ),
    array(
        "nama" => "Jane Smith",
        "posisi" => "Supervisor",
        "gaji" => 4000
    ),
    array(
        "nama" => "Mark Johnson",
        "posisi" => "Staff",
        "gaji" => 3000
    )
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Data Karyawan</h2>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Posisi</th>
                <th>Gaji</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?php echo $employee['nama']; ?></td>
                    <td><?php echo $employee['posisi']; ?></td>
                    <td><?php echo $employee['gaji']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
