<?php
echo "<h2>Prodi Bisnis Digital - Workshop Sistem Terintegrasi</h2>";
echo "<h3>Tugas: Array Multidimensi PHP</h3>";
echo "<hr>";

// ====================================================
// SOAL 1
// ====================================================
echo "<h4>Soal 1</h4>";
echo "Buat array 2 dimensi berisi data 3 siswa (Nama, Nilai Matematika, Nilai Bahasa).<br><br>";

$siswa = [
    ["Rafi", 85, 90],
    ["Dina", 78, 88],
    ["Lukman", 92, 80]
];

// Cetak nilai Bahasa dari siswa ke-2
echo "Nilai Bahasa dari siswa ke-2 (" . $siswa[1][0] . "): " . $siswa[1][2] . "<br><br>";

// Cetak semua data menggunakan looping
echo "<b>Data Semua Siswa:</b><br>";
for ($i = 0; $i < count($siswa); $i++) {
    echo "Nama: " . $siswa[$i][0] . 
         " | Matematika: " . $siswa[$i][1] . 
         " | Bahasa: " . $siswa[$i][2] . "<br>";
}

echo "<hr>";

// ====================================================
// SOAL 2 (Versi Baru — Menampilkan Stok per Buah)
// ====================================================
echo "<h4>Soal 2</h4>";
echo "Array berisi data buah: [Nama, Harga, Stok]<br><br>";

$buah = [
    ["Apel", 15000, 10],
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

// Cetak nama buah pertama
echo "Nama buah pertama: " . $buah[0][0] . "<br><br>";

// Tampilkan stok dan nilai per buah
echo "<b>Daftar Nilai Stok per Buah:</b><br>";
$total = 0;
foreach ($buah as $item) {
    $nilai = $item[1] * $item[2];
    echo "- " . $item[0] . ": Rp" . number_format($item[1], 0, ',', '.') .
         " x " . $item[2] . " = Rp" . number_format($nilai, 0, ',', '.') . "<br>";
    $total += $nilai;
}

// Total semua
echo "<br><b>Total nilai seluruh stok buah = Rp" . number_format($total, 0, ',', '.') . "</b>";

echo "<hr>";

// ====================================================
// SOAL 3 (Kategori Non-Elektronik)
// ====================================================
echo "<h4>Soal 3</h4>";
echo "Array asosiatif multidimensi berisi 3 produk e-commerce (nama, kategori, harga, rating).<br><br>";

$produk = [
    ["nama" => "Sneakers", "kategori" => "Fashion", "harga" => 750000, "rating" => 4.6],
    ["nama" => "Serum Wajah", "kategori" => "Kecantikan", "harga" => 250000, "rating" => 4.9],
    ["nama" => "Alat Fitness Mini", "kategori" => "Olahraga", "harga" => 1200000, "rating" => 4.7]
];

// Cetak semua produk
foreach ($produk as $p) {
    echo "Nama: " . $p["nama"] . 
         " | Kategori: " . $p["kategori"] . 
         " | Harga: Rp" . number_format($p["harga"], 0, ',', '.') . 
         " | Rating: " . $p["rating"] . "<br>";
}

// Cari produk dengan harga tertinggi
$hargaTertinggi = $produk[0];
foreach ($produk as $p) {
    if ($p["harga"] > $hargaTertinggi["harga"]) {
        $hargaTertinggi = $p;
    }
}

echo "<br><b>Produk dengan harga tertinggi:</b> " . $hargaTertinggi["nama"] . 
     " (Rp" . number_format($hargaTertinggi["harga"], 0, ',', '.') . ")";

echo "<hr>";

// ====================================================
// SOAL 4
// ====================================================
echo "<h4>Soal 4</h4>";
echo "Array 2 dimensi 3x3 berisi angka acak (1–9):<br><br>";

$matriks = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriks[$i][$j] = rand(1, 9);
    }
}

// Cetak array dalam bentuk matriks
$total = 0;
echo "<table border='1' cellpadding='5' cellspacing='0'>";
for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 3; $j++) {
        echo "<td align='center'>" . $matriks[$i][$j] . "</td>";
        $total += $matriks[$i][$j];
    }
    echo "</tr>";
}
echo "</table>";

echo "<br>Total semua elemen = <b>$total</b>";
?>
