<?php
// Koneksi Database
$koneksi = mysqli_connect("localhost", "root", "", "sportfield");

if (!$koneksi) {
    die("Koneksi Gagal : " . mysqli_connect_error());
}