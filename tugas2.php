<?php
$nama = "Rafif";

// Single Quote
echo '1. Single Quote dengan teks biasa: ';
echo 'Halo Dunia';
echo "<br>";

echo '2. Single Quote dengan escape \n: ';
echo 'Halo\nDunia'; // tidak pindah baris
echo "<br>";

echo '3. Single Quote dengan variabel: ';
echo 'Halo $nama'; // variabel tidak diproses
echo "<br><br>";

// Double Quote
echo "4. Double Quote dengan teks biasa: ";
echo "Halo Dunia";
echo "<br>";

echo "5. Double Quote dengan escape \n: ";
echo "Halo\nDunia"; // pindah baris, perlu nl2br untuk tampil di browser
echo "<br>";

echo "6. Double Quote dengan variabel: ";
echo "Halo $nama"; // variabel diproses
echo "<br><br>";

// Tambahan agar \n terlihat di browser (karena HTML abaikan newline)
echo "<h3>Dengan nl2br:</h3>";
echo nl2br("Halo\nDunia");
?>
