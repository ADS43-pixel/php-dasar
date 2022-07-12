<?php

$conn = mysqli_connect("localhost", "root", "phpdsr");

$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
var_dump($result);
 
?>
<!DOCTYPE html>
<html>
<head>
    
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>

        <tr>
            <td>1</td>
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
</td>
<td><img src="aaku1.png" width="100"></td>
<td>3.34.20.4.02</td>
<td>Anggia Dea Saputri</td>
<td>anggiadea02@gmail.com</td>
<td>Teknik Informatika</td>
</tr>
</body>
</html>