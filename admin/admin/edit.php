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
