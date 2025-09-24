<?php
// 1. LOGIN SEDERHANA
$username = "admin";
$password = "12345";

if ($username == "rafif" && $password == "123") {
    echo "Login berhasil!<br>";
} else {
    echo "Login gagal! Username atau password salah.<br>";
}

// 2. CEK USIA
$usia = 19;
if ($usia >= 18) {
    echo "Boleh menonton film dewasa.<br>";
} else {
    echo "Hanya boleh menonton film remaja.<br>";
}

// 3. CEK DISKON BELANJA
$totalBelanja = 250000;
if ($totalBelanja >= 200000) {
    echo "Anda mendapat diskon 10%!<br>";
} else {
    echo "Belanja Anda belum cukup untuk diskon.<br>";
}

// 4. CEK NILAI MAHASISWA
$nilai = 82;
if ($nilai >= 85) {
    echo "Nilai Anda: A<br>";
} elseif ($nilai >= 70) {
    echo "Nilai Anda: B<br>";
} elseif ($nilai >= 55) {
    echo "Nilai Anda: C<br>";
} elseif ($nilai >= 40) {
    echo "Nilai Anda: D<br>";
} else {
    echo "Nilai Anda: E<br>";
}

// 5. CEK HARI (switch)
$hari = "Senin";
switch ($hari) {
    case "Senin":
        echo "Selamat bekerja, semangat awal pekan!<br>";
        break;
    case "Jumat":
        echo "Hari Jumat penuh berkah!<br>";
        break;
    case "Minggu":
        echo "Selamat berlibur!<br>";
        break;
    default:
        echo "Hari biasa, tetap semangat!<br>";
}
?>
