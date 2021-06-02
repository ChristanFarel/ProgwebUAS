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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="backup_item/b.png" width="30" height="30" alt="">
            Admin
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="form.php">Insert</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
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
                    <td><?= ($row['kondisi'] == 1) ? "baru" : "bekas"; ?></td>
                    <td><?= $row['berat']; ?></td>
                    <td><?= $row['kategori']; ?></td>
                    <td><?= $row['jenis']; ?></td>
                    <td><?= $row['tag']; ?></td>
                    <td>Action</td>
                </tr>
                <?php $nomer++; ?>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>

</html>