<?php
// 1. Penjumlahan string angka
$a = "10";
$b = "20";
echo "1. Penjumlahan string angka: $a + $b = " . ($a + $b);
echo "<br><br>";

// 2. Perbedaan operator / dan %
$x = 10;
$y = 3;
echo "2. Hasil pembagian $x / $y = " . ($x / $y);
echo "<br>";
echo "   Hasil modulo $x % $y = " . ($x % $y);
echo "<br><br>";

// 3. Gabungan string tugas1 dan tugas2
$tugas1 = "90";
$tugas2 = "80";
echo "3. Hasil gabungan string tugas1 dan tugas2 = " . ($tugas1 . $tugas2);
echo "<br><br>";

// Contoh penggunaan string single quote
$string1 = 'Ini adalah string sederhana';
$string2 = 'Ini adalah
string yang bisa
memiliki beberapa
baris';
$string3 = 'Dia berkata: "I\'ll be back"';
$string4 = 'Anda telah berhasil menghapus C:\\xampp\\htdoc';
$string5 = 'Kalimat ini tidak akan pindah ke: \n baris baru';
$string6 = 'Variabel juga tidak otomatis ditampilkan $string1 dan $string3';

echo "<h3>Contoh String dengan Single Quote:</h3>";
echo $string1; echo "<br>";
echo $string2; echo "<br>";
echo $string3; echo "<br>";
echo $string4; echo "<br>";
echo $string5; echo "<br>";
echo $string6; echo "<br>";

// Contoh penggunaan string double quote
$string7 = "Kalimat ini akan pindah ke \n baris baru";
$string8 = "Isi variabel string1 adalah: $string1";

echo "<h3>Contoh String dengan Double Quote:</h3>";
echo nl2br($string7); echo "<br>"; // nl2br biar \n jadi baris baru
echo $string8;
?>
