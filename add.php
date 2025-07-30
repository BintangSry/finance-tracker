<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Transaksi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <h1 class="text-2xl font-bold mb-4">Tambah Transaksi</h1>
    <form action="save.php" method="POST" class="space-y-4 bg-white p-6 rounded shadow max-w-md">
        <input type="text" name="description" placeholder="Deskripsi" required class="w-full border p-2 rounded" />
        <input type="number" step="0.01" name="amount" placeholder="Jumlah" required class="w-full border p-2 rounded" />
        <select name="type" required class="w-full border p-2 rounded">
            <option value="">Pilih Tipe</option>
            <option value="income">Pemasukan</option>
            <option value="expense">Pengeluaran</option>
        </select>
        <input type="date" name="date" required class="w-full border p-2 rounded" />
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</body>
</html>
