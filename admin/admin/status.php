<?php
include '../koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM booking");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Status Booking</title>
    <style>
        table{
            border-collapse: collapse;
            width: 80%;
            margin: 30px auto;
        }
        th, td{
            border:1px solid #000;
            padding:10px;
            text-align:center;
        }
        a{
            text-decoration:none;
            padding:5px 10px;
        }
        .edit{
            background:orange;
            color:white;
        }
        .hapus{
            background:red;
            color:white;
        }
    </style>
</head>
<body>

<h2 align="center">Data Booking</h2>

<table>
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Lapangan</th>
    <th>Tanggal</th>
    <th>Jam</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>

<?php
$no=1;
while($data=mysqli_fetch_array($query)){
?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $data['nama']; ?></td>
    <td><?= $data['lapangan']; ?></td>
    <td><?= $data['tanggal']; ?></td>
    <td><?= $data['jam']; ?></td>
    <td><?= $data['status']; ?></td>
    <td>
        <a class="edit" href="edit.php?id=<?= $data['id']; ?>">Edit</a>

        <a class="hapus"
        href="hapus.php?id=<?= $data['id']; ?>"
        onclick="return confirm('Yakin ingin menghapus?')">
        Hapus
        </a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>