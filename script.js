document.getElementById("bookingForm").addEventListener("submit", function(e){

    e.preventDefault();

    let nama = document.getElementById("nama").value;
    let lapangan = document.getElementById("lapangan").value;
    let tanggal = document.getElementById("tanggal").value;
    let jam = document.getElementById("jam").value;

    document.getElementById("hasil").innerHTML = `
    <h2>✅ Booking Berhasil</h2>
    <p><b>Nama :</b> ${nama}</p>
    <p><b>Lapangan :</b> ${lapangan}</p>
    <p><b>Tanggal :</b> ${tanggal}</p>
    <p><b>Jam :</b> ${jam}</p>
    <p>Terima kasih telah melakukan booking.</p>
    `;

    document.getElementById("hasil").style.display = "block";
    document.getElementById("hasil").scrollIntoView({ behavior: "smooth" });

});