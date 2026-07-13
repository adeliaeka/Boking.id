<?php
include 'koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM booking");
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Data Booking</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Data Booking</h1>

<table border="1" cellpadding="10">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Lapangan</th>
    <th>Tanggal</th>
    <th>Jam</th>
    <th>Status</th>
</tr>

<?php
$no=1;
while($row=mysqli_fetch_assoc($data)){
?>

<tr>
    <td><?= $no++; ?></td>
    <td><?= $row['nama']; ?></td>
    <td><?= $row['lapangan']; ?></td>
    <td><?= $row['tanggal']; ?></td>
    <td><?= $row['jam']; ?></td>
    <td><?= $row['status']; ?></td>
</tr>

<?php } ?>

</table>

</body>
</html>