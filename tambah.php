<?php 

// koneksi ke dbms

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// cek apakah tombol submit sudah ditekan apa belum

if( isset($_POST["submit"]) ) {

    $npm = $_POST["npm"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    $gambar = $_POST["gambar"];

    // 

    $query = "INSERT INTO mahasiswa VALUES
                ('', '$npm', '$nama', '$email', '$jurusan', '$gambar')";

    mysqli_query($conn, $query);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>

<h1>Tambah Data Mahasiswa</h1>

<form action="" method="post">

    <ul>
        <li>
            <label for="npm">NPM : </label>
            <input type="text" name="npm" id="npm">
        </li>
        <li>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama">
        </li>
        <li>
            <label for="email">Email : </label>
            <input type="text" name="email" id="email">
        </li>
        <li>
            <label for="jurusan">Jurusan : </label>
            <input type="text" name="jurusan" id="jurusan">
        </li>
        <li>
            <label for="gambar">Foto : </label>
            <input type="text" name="gambar" id="gambar">
        </li>

        <li>
            <button type="submit" name="submit">Tambah!</button>
        </li>
    </ul>

</form>
    
</body>
</html>