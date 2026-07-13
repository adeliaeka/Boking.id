<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$lapangan = $_POST['lapangan'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];

$status = "Menunggu";

$sql = "INSERT INTO booking (nama, lapangan, tanggal, jam, status)
        VALUES ('$nama', '$lapangan', '$tanggal', '$jam', '$status')";

if (mysqli_query($conn, $sql)) {
    echo "<script>
            alert('Booking berhasil!');
            window.location='booking.php';
          </script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>