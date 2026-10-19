<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container sempit">
        <h2>Form Pesan Mahasiswa</h2>

        <form action="hasil_pesan.php" method="POST">
            Nama :
            <br>
            <input type="text" name="nama" required>
            <br>
            <br>
            Kelas :
            <br>
            <input type="text" name="kelas" required>
            <br>
            <br>
            Pesan / Kesan :
            <br>
            <textarea name="pesan" rows="5" required></textarea>
            <br>
            <br>
            <button class="tombol" type="submit" name="tombol_kirim">Kirim Pesan</button>
        </form>

        <br>
        <a class="tombol" href="index.php">Kembali</a>
    </div>
</body>
</html>
