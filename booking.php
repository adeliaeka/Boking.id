<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Lapangan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav class="navbar">
        <div class="logo">⚽ SportField</div>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="booking.php">Booking</a></li>
            <li><a href="fasilitas.php">Fasilitas</a></li>
            <li><a href="tentang.php">Tentang</a></li>
            <li><a href="kontak.php">Kontak</a></li>
        </ul>
    </nav>

    <h1>Form Booking Lapangan</h1>

    <form action="proses_booking.php" method="POST">

        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" required>

        <label for="lapangan">Pilih Lapangan</label>
        <select id="lapangan" name="lapangan" required>
            <option value="">-- Pilih Lapangan --</option>
            <option value="Futsal">Futsal</option>
            <option value="Badminton">Badminton</option>
            <option value="Basket">Basket</option>
            <option value="Padel">Padel</option>
            <option value="Voli">Voli</option>
        </select>

        <label for="tanggal">Tanggal</label>
        <input type="date" id="tanggal" name="tanggal" required>

        <label for="jam">Jam</label>
        <input type="time" id="jam" name="jam" required>

        <button type="submit">Booking Sekarang</button>

    </form>

</body>

</html>