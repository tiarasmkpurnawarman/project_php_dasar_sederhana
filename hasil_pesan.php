<?php 

    // cek apakah ada data di $_POST atau tidak
    if(
        !isset($_POST["nama"]) ||
        !isset($_POST["kelas"]) ||
        !isset($_POST["pesan"])
    ) {
        // redirect
        header("Location: form_pesan.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pesan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container sempit">
        <h2>Pesan Berhasil Dikirim</h2>

        <p>Terima kasih, <?= $_POST["nama"] ?>.</p>

        <ul>
            <li>Nama : <?= $_POST["nama"] ?></li>
            <li>Kelas : <?= $_POST["kelas"] ?></li>
            <li>Pesan / Kesan : <?= $_POST["pesan"] ?></li>
        </ul>

        <a class="tombol" href="index.php">Kembali ke Halaman Utama</a>
    </div>
</body>
</html>
