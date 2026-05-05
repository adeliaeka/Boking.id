document.getElementById("bookingForm").addEventListener("submit", function(e){

e.preventDefault();

let nama = document.getElementById("nama").value;
let lapangan = document.getElementById("lapangan").value;
let tanggal = document.getElementById("tanggal").value;
let jam = document.getElementById("jam").value;

document.getElementById("hasil").innerHTML =
"Booking berhasil! <br>" +
"Nama: " + nama + "<br>" +
"Lapangan: " + lapangan + "<br>" +
"Tanggal: " + tanggal + "<br>" +
"Jam: " + jam;

});