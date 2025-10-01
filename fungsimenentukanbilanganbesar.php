<?php
// Mendefinisikan fungsi bernama 'bilanganTerbesar'
function bilanganTerbesar($a, $b) {
  if ($a > $b) {
    return $a; // Jika $a lebih besar, kembalikan nilai $a
  } else {
    return $b; // Jika tidak, kembalikan nilai $b
  }
}

// Contoh penggunaan fungsi
$bilangan1 = 100;
$bilangan2 = 150;
$terbesar = bilanganTerbesar($bilangan1, $bilangan2);

echo "Antara $bilangan1 dan $bilangan2, bilangan terbesarnya adalah: <b>$terbesar</b>";
?>