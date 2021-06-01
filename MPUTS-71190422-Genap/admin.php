<?php
require "function.php";

$querySelect = "SELECT * from barang;";

$hasil = mysqli_query($conn, $querySelect);

$nomer = 1;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styleAdmin.css">
</head>

<body>
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand" href="insert.php">Insert</a>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>


    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Ukuran</th>
                <th scope="col">Kondisi</th>
                <th scope="col">Berat</th>
                <th scope="col">Kategori</th>
                <th scope="col">Jenis</th>
                <th scope="col">Tags</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($hasil)) : ?>
                <tr>
                    <td><?= $nomer; ?></td>
                    <td> <img class="thumbnail" src=<?= $row['gambar']; ?> alt="halo halo"></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['harga']; ?></td>
                    <td><?= $row['ukuran']; ?></td>
                    <td><?= $row['kondisi']; ?></td>
                    <td><?= $row['berat']; ?></td>
                    <td><?= $row['kategori']; ?></td>
                    <td><?= $row['jenis']; ?></td>
                    <td><?= $row['tag']; ?></td>
                    <td>Action </td>
                </tr>
                <?php $nomer++; ?>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>

</html>