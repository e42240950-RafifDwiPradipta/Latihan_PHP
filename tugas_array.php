<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Penjumlahan Matriks 3x3</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
        }
        table {
            border-collapse: collapse;
            margin: 20px 0;
        }
        td, th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        .operator {
            font-size: 24px;
            padding: 0 15px;
        }
    </style>
</head>
<body>

    <h1>Program Penjumlahan Matriks 3x3 dengan PHP</h1>

    <?php
    // Definisikan Matriks A
    $matriks_A = [
        [1, 1, 1],
        [2, 2, 2],
        [3, 3, 3]
    ];

    // Definisikan Matriks B
    $matriks_B = [
        [3, 3, 3],
        [2, 2, 2],
        [1, 1, 1]
    ];

    // Inisialisasi Matriks Hasil (C) dengan nilai 0
    $matriks_C = [
        [0, 0, 0],
        [0, 0, 0],
        [0, 0, 0]
    ];

    // Proses penjumlahan matriks menggunakan looping
    // Loop untuk baris (i)
    for ($i = 0; $i < 3; $i++) {
        // Loop untuk kolom (j)
        for ($j = 0; $j < 3; $j++) {
            // Jumlahkan elemen pada posisi (i, j) dan simpan ke matriks C
            $matriks_C[$i][$j] = $matriks_A[$i][$j] + $matriks_B[$i][$j];
        }
    }

    // Fungsi untuk menampilkan matriks dalam format tabel HTML
    function tampilkanMatriks($matriks, $namaMatriks) {
        echo "<h3>Matriks {$namaMatriks}</h3>";
        echo "<table>";
        for ($i = 0; $i < count($matriks); $i++) {
            echo "<tr>";
            for ($j = 0; $j < count($matriks[$i]); $j++) {
                echo "<td>" . $matriks[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    // Tampilkan matriks A, B, dan hasil (C)
    tampilkanMatriks($matriks_A, "A");
    echo '<div class="operator">+</div>';
    tampilkanMatriks($matriks_B, "B");
    echo '<div class="operator">=</div>';
    tampilkanMatriks($matriks_C, "C (Hasil)");

    ?>

</body>
</html>