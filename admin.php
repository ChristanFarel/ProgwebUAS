<?php

require "function.php";
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: index.php");
}

$querySelect = "SELECT * from barang;";

if (isset($_GET["q"])) {
    $keyword = $_GET["q"];
    $querySelect = "SELECT * FROM barang where nama like '%$keyword%' or kategori like '%$keyword%' or jenis like '%$keyword%' or tag like '%$keyword%' ;";
}

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
    <link rel="stylesheet" href="style/styleAdmin.css">
    <script src="js.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="admin.php">
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
            <form class="form-inline my-2 my-lg-0" method="GET">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="q">
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
                    <td><?= format_num($row['harga']) ?></td>
                    <td><?= $row['ukuran']; ?></td>
                    <td><?= ($row['kondisi'] == 1) ? "baru" : "bekas"; ?></td>
                    <td><?= $row['berat']; ?></td>
                    <td><?= $row['kategori']; ?></td>
                    <td><?= $row['jenis']; ?></td>
                    <td><?= $row['tag']; ?></td>
                    <td>
                        <a role="button" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')" name="id" href=<?= "delete.php?id=" . $row["id"] ?>>Delete</a>
                        <br><br>
                        <a role="button" class="btn btn-primary" name="id" href=<?= "form.php?id=" . $row["id"] ?>>Update</a>
                    </td>
                </tr>
                <?php $nomer++; ?>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>

</html>