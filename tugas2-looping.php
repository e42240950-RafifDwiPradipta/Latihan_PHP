<?php
// --- BAGIAN LOGIKA PHP (Tidak berubah) ---
$tasks = [
    ['task' => 'Belajar dasar-dasar PHP', 'completed' => true],
    ['task' => 'Memahami cara kerja perulangan (loop)', 'completed' => true],
    ['task' => 'Membuat kasus To-Do List', 'completed' => true],
    ['task' => 'Menambahkan fitur baru ke proyek', 'completed' => false],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List Interaktif</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #f0f2f5;
            color: #1c1e21;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .todolist-container {
            background-color: #fff;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 500px;
        }
        h1 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #333;
        }
        .task-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .task-item {
            display: flex;
            align-items: center;
            padding: 1rem;
            border-bottom: 1px solid #ddd;
            font-size: 1.1rem;
            cursor: pointer; /* <== TAMBAHAN: Mengubah kursor jadi tangan saat diarahkan */
            transition: background-color 0.2s ease;
        }
        .task-item:hover {
            background-color: #f9f9f9; /* <== TAMBAHAN: Efek hover */
        }
        .task-item:last-child {
            border-bottom: none;
        }
        .task-item.completed span.task-text {
            text-decoration: line-through;
            color: #888;
        }
        .task-item .icon {
            margin-right: 1rem;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>

    <div class="todolist-container">
        <h1>Tugas Hari Ini 🖱️</h1>
        <ul class="task-list">
            <?php foreach ($tasks as $task): ?>
                <li class="task-item <?= $task['completed'] ? 'completed' : '' ?>">
                    <span class="icon"><?= $task['completed'] ? '✅' : '⬜' ?></span>
                    <span class="task-text"><?= htmlspecialchars($task['task']) ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <script>
        // 1. Pilih elemen daftar tugas utama
        const taskList = document.querySelector('.task-list');

        // 2. Tambahkan 'event listener' yang akan memantau semua klik di dalam daftar
        taskList.addEventListener('click', function(event) {
            
            // 3. Cari tahu elemen 'li' mana yang paling dekat dengan titik yang diklik
            const clickedItem = event.target.closest('.task-item');

            // Jika yang diklik bukan bagian dari 'li', abaikan
            if (!clickedItem) {
                return;
            }

            // 4. Tambah/hapus (toggle) class 'completed' pada elemen 'li'
            clickedItem.classList.toggle('completed');
            
            // 5. Cari ikon di dalam 'li' yang diklik
            const icon = clickedItem.querySelector('.icon');
            
            // 6. Ganti ikon berdasarkan status 'completed'
            if (clickedItem.classList.contains('completed')) {
                icon.textContent = '✅'; // Jika sekarang selesai, ganti ikon jadi centang
            } else {
                icon.textContent = '⬜'; // Jika tidak, ganti ikon jadi kotak
            }
        });
    </script>
    
</body>
</html>