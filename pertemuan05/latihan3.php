<?php
    $mahasiswa = [
        ["Ramadhan", "H1101191035", "Sistem Informasi", "madha@student.untan.ac.id"],
        ["Madha", "H1101211070", "Sistem Informasi", "madhakun@student.untan.ac.id"],
        ["Rama", "H1101221005", "Sistem Informasi", "rama@student.untan.ac.id"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs ) : ?>
    <ul>
        

        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NIM : <?= $mhs[1]; ?></li>
        <li>Prodi : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>