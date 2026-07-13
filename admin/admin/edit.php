<?php
// Koneksi Database
$koneksi = mysqli_connect("localhost", "root", "", "sportfield");

if (!$koneksi) {
    die("Koneksi Gagal : " . mysqli_connect_error());
}
// Ambil ID dari URL
$id = $_GET['id'];

// Ambil Data Booking
$query = mysqli_query($koneksi, "SELECT * FROM booking WHERE id='$id'");
$data = mysqli_fetch_assoc($query);
// Proses Update
if (isset($_POST['update'])) {

    $nama      = $_POST['nama'];
    $lapangan  = $_POST['lapangan'];
    $tanggal   = $_POST['tanggal'];
    $jam       = $_POST['jam'];
    $durasi    = $_POST['durasi'];
    $no_hp     = $_POST['no_hp'];

    $update = mysqli_query($koneksi, "UPDATE booking SET
        nama='$nama',
        lapangan='$lapangan',
        tanggal='$tanggal',
        jam='$jam',
        durasi='$durasi',
        no_hp='$no_hp'
        WHERE id='$id'
    ");

     if ($update) {
        echo "<script>
                alert('Data booking berhasil diupdate!');
                window.location='data_booking.php';
              </script>";
    } else {
        echo "<script>alert('Data gagal diupdate!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Booking Lapangan</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:#f2f2f2;
}

.container{
    width:500px;
    margin:40px auto;
    background:#fff;
    padding:30px;
    border-radius:10px;
    box-shadow:0 5px 15px rgba(0,0,0,.2);
}
h2{
    text-align:center;
    margin-bottom:20px;
}

label{
    display:block;
    margin-top:10px;
    margin-bottom:5px;
    font-weight:bold;
}
input,select{
    width:100%;
    padding:10px;
    border:1px solid #ccc;
    border-radius:5px;
}
input,select{
    width:100%;
    padding:10px;
    border:1px solid #ccc;
    border-radius:5px;
}
button{
    width:100%;
    padding:12px;
    margin-top:20px;
    background:#28a745;
    color:white;
    border:none;
    border-radius:5px;
    cursor:pointer;
    font-size:16px;
}
button:hover{
    background:#218838;
}

a{
    display:block;
    text-align:center;
    margin-top:15px;
    text-decoration:none;
    color:#555;
}

a:hover{
    color:red;
}
