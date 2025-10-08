<?php
// Membuat array 3 dimensi
$array = [
    [ // Tabel 1
        ['elemen111', 'elemen112', 'elemen113'],
        ['elemen121', 'elemen122', 'elemen123']
    ],
    [ // Tabel 2
        ['elemen211', 'elemen212', 'elemen213'],
        ['elemen221', 'elemen222', 'elemen223']
    ]
];

// Menampilkan isi array
echo "<h2>Output Array 3 Dimensi</h2>";

for ($i = 0; $i < count($array); $i++) {
    echo "<h3>Tabel " . ($i + 1) . "</h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    for ($j = 0; $j < count($array[$i]); $j++) {
        echo "<tr>";
        for ($k = 0; $k < count($array[$i][$j]); $k++) {
            echo "<td>" . $array[$i][$j][$k] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table><br>";
}
?>
