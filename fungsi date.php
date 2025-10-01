<?php
// Menampilkan tanggal dengan format 'd-F-Y'
// d = tanggal (01-31)
// F = nama bulan lengkap (e.g., October)
// Y = tahun (4 digit)
echo "Tanggal sekarang (dengan date): <b>" . date('d-F-Y') . "</b>";

// Jika ingin format sama seperti getdate() (dd-mm-yyyy)
// m = bulan dalam angka (01-12)
echo "<br>Format lain (dengan date): <b>" . date('d-m-Y') . "</b>";
?>