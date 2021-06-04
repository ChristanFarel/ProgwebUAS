<?php
session_start();
require "function.php";
if (!isset($_GET['search'])) {
    echo "<script>alert('Silahkan isi kolom search')</script>";
    header("Location: index.php");
}
$keyword = $_GET['search'];

$querySelect = "SELECT id, nama,gambar,harga FROM barang where nama like '%$keyword%' or kategori like '%$keyword%' or tag like '%$keyword%' ;";
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
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="styleAdmin.css"> -->
    <link rel="stylesheet" href="styleCari.css">


</head>

<body>
    <div class="container">
        <!-- header -->
        <div class="atas">
            <a class="BajuBagus" href="71190422.html">BajuBagus
                <span class="dalamBaju">.com</span>
            </a>

            <?php if (!isset($_SESSION['login'])) : ?>
                <div class="login">
                    <button class="tombolLogin"><a href="login.php">Log in</a></button>
                </div>
            <?php else : ?>
                <div class="login">
                    <button class="tombolLogin"><a href="logout.php">Log Out</a></button>
                </div>

                <div class="login">
                    <button class="tombolLogin"><a href="admin.php">Admin</a></button>
                </div>
            <?php endif; ?>
        </div>

        <!-- nav -->
        <div class="nav">
            <a class="active" href="71190422.html">Home</a>
            <a href="#news">Kid</a>
            <a href="detail.html">Adult</a>
            <a href="#about">Men</a>
            <a href="#about">Women</a>
            <a href="#about">Discount</a>
            <a href="#about">About Us</a>
            <div class="searchBar">
                <form action="cari.php" method="GET">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><span class="tbl">Cari</span></button>
                </form>
            </div>

        </div>
        <h2>Hasil Pencarian Dari: <?php echo $keyword; ?></h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($hasil)) : ?>
                    <tr>
                        <td><?= $nomer; ?></td>
                        <td class="td2"> <a href=<?= "detail.php?id=" . $row["id"] ?>><img class="thumbnail" src=<?= $row['gambar']; ?> alt="halo halo"></a></td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['harga']; ?></td>
                    </tr>
                    <?php $nomer++; ?>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>