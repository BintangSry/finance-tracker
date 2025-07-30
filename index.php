<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Catatan Keuangan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Catatan Keuangan</h1>
        <a href="add.php" class="bg-green-600 text-white px-4 py-2 rounded">+ Tambah</a>
    </div>

    <table class="w-full bg-white rounded shadow">
        <thead>
            <tr class="bg-gray-200">
                <th class="p-3 text-left">Tanggal</th>
                <th class="p-3 text-left">Deskripsi</th>
                <th class="p-3 text-left">Jumlah</th>
                <th class="p-3 text-left">Tipe</th>
                <th class="p-3 text-left">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $conn->query("SELECT * FROM transactions ORDER BY date DESC");
            while ($row = $result->fetch_assoc()) {
                echo "<tr class='border-b'>";
                echo "<td class='p-3'>{$row['date']}</td>";
                echo "<td class='p-3'>{$row['description']}</td>";
                echo "<td class='p-3'>Rp " . number_format($row['amount'], 2, ',', '.') . "</td>";
                echo "<td class='p-3'>" . ucfirst($row['type']) . "</td>";
                echo "<td class='p-3'><a href='delete.php?id={$row['id']}' class='text-red-600'>Hapus</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
