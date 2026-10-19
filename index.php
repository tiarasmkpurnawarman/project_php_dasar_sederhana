<?php 

    // data mahasiswa
    $mahasiswa = [
        [
            "nim" => "25001",
            "nama" => "Hirara",
            "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
            "email" => "hirara@upi.edu",
            "nilai" => 90
        ],
        [
            "nim" => "25002",
            "nama" => "Ling",
            "jurusan" => "Sistem Telekomunikasi",
            "email" => "ling@upi.edu",
            "nilai" => 70
        ],
        [
            "nim" => "25003",
            "nama" => "Odete",
            "jurusan" => "Mekatronika dan Kecerdasan Buatan",
            "email" => "odete@upi.edu",
            "nilai" => 99
        ],
        [
            "nim" => "25004",
            "nama" => "Brody",
            "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
            "email" => "brody@upi.edu",
            "nilai" => 60
        ],
        [
            "nim" => "25005",
            "nama" => "Lunox",
            "jurusan" => "Sistem Telekomunikasi",
            "email" => "lunox@upi.edu",
            "nilai" => 80
        ]
    ];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Daftar Mahasiswa</h2>

        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Nilai</th>
                    <th>Grade</th>
                    <th>Status</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach($mahasiswa as $data): ?>

                    <?php 
                        // menentukan grade
                        if ($data["nilai"] >= 80) {
                            $grade = "A";
                        } elseif ($data["nilai"] >= 70) {
                            $grade = "B";
                        } elseif ($data["nilai"] >= 60) {
                            $grade = "C";
                        } else {
                            $grade = "D";
                        }

                        // menentukan status
                        if ($data["nilai"] >= 70) {
                            $status = "Lulus";
                        } else {
                            $status = "Tidak Lulus";
                        }
                    ?>

                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $data["nim"] ?></td>
                        <td><?= $data["nama"] ?></td>
                        <td><?= $data["jurusan"] ?></td>
                        <td><?= $data["nilai"] ?></td>
                        <td><?= $grade ?></td>
                        <td><?= $status ?></td>
                        <td>
                            <a class="tombol" href="detail.php?nim=<?= $data["nim"] ?>&nama=<?= $data["nama"] ?>&jurusan=<?= $data["jurusan"] ?>&email=<?= $data["email"] ?>&nilai=<?= $data["nilai"] ?>&grade=<?= $grade ?>&status=<?= $status ?>">Lihat Detail</a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach ?>
            </tbody>
        </table>

        <br>
        <a class="tombol" href="form_pesan.php">Isi Form Pesan</a>
    </div>
</body>
</html>
