<?php

// Koneksi database

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// Ambil data dari tabel / query

$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// var_dump($result);
// die;


// $mhs = mysqli_fetch_row($result);
// var_dump($mhs);
// die;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>


    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No. </th>
            <th>Aksi</th>
            <th>Foto</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php while ( $row = mysqli_fetch_assoc($result) ) : ?>
            
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="">Ubah Data</a> |
                    <a href="">Hapus Data</a>
                </td>
                <td><img src="img/<?= $row["gambar"] ?>" width="50" alt=""></td>
                <td><?= $row["npm"] ?></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["email"] ?></td>
                <td><?= $row["jurusan"] ?></td>
            </tr>
            <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>

</html>