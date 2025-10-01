<?php
// Mengambil informasi tanggal saat ini
$sekarang = getdate();

// Mengambil nilai tanggal, bulan, dan tahun dari array
$tanggal = $sekarang['mday'];   // mday = hari dalam bulan
$bulan = $sekarang['mon'];     // mon = bulan (angka)
$tahun = $sekarang['year'];    // year = tahun

// Menampilkan dengan format dd-mm-yyyy
echo "Tanggal sekarang (dengan getdate): <b>$tanggal-$bulan-$tahun</b>";
?>