<?php
require "function.php";
session_start();

if (!isset($_GET["id"])) {
    echo '<script>alert("ID barang tidak ditemukan");
    window.location.href="index.php";</script>';
}
$id = $_GET["id"];
$querySelect = "SELECT * FROM barang WHERE id = $id LIMIT 1;";
$hasil = mysqli_query($conn, $querySelect);
$row = mysqli_fetch_assoc($hasil);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baju Bagus</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div class="container">
        <!-- header -->
        <div class="atas">
            <a class="BajuBagus" href="index.php">BajuBagus
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
            <a class="active" href="index.php">Home</a>
            <a href="cari.php?search=anak">Kid</a>
            <a href="cari.php?search=dewasa">Adult</a>
            <a href="cari.php?search=pria">Men</a>
            <a href="cari.php?search=wanita">Women</a>
            <a href="">About Us</a>
            <div class="searchBar">
                <form action="cari.php" method="GET">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><span class="tbl">Cari</span></button>
                </form>
            </div>
        </div>

        <div class="dami">
            <h1>hahahah</h1>
        </div>

        <div class="kotakBesar">
            <div class="gambarDetail">
                <div>
                    <img src=<?= $row["gambar"] ?> alt=<?= $row["nama"] ?>>
                </div>

                <div class="hgr">
                    <span> <b><?= format_num($row["harga"]) ?></b> </span>
                </div>

                <label for="ukuran">Choose Your Size:</label>
                <br>
                <?php
                $sizes = explode(", ", $row["ukuran"]);
                ?>

                <select name="ukuran" id="ukuran">
                    <?php foreach ($sizes as $size) : ?>
                        <option value=<?= $size ?>><?= $size ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="penjelasan">
                <div>
                    <h2><?= $row["nama"] ?></h2>
                    <!-- <h6>14,248 Rating | 238 answered ratings</h6> -->
                    <?php $tags = explode(", ", $row["tag"]) ?>
                    <h6>
                        tags:
                        <?php foreach ($tags as $tag) : ?>
                            <a href="#"><?= $tag ?></a>
                        <?php endforeach; ?>
                    </h6>
                    <hr>
                </div>

                <p>Condition: <span><?= ($row["kondisi"] == 1) ? "baru" : "bekas" ?></span></p>
                <p>Weight: <span><?= $row["berat"] ?>gr</span></p>
                <p>Category: <span><?= $row["jenis"] . " " . $row["kategori"] ?></span></p>
                <br>
                <input type="checkbox" class="read-more-state" id="post-2" />
                <ul class="read-more-wrap">
                    <span>Details:</span>
                    <p>
                        <?= $row["keterangan"] ?>
                    </p>
                    <!-- <li>95% Rayon, 5% Spandex</li>
                    <li>Hand Wash Only</li>
                    <li class="read-more-target">US Regular Size: XS(US 0-2),S(US 4-6),M(US 8-10),L(US 12-14),XL(US
                        16-18),2XL(US
                        20-22),3XL(US
                        24).</li>
                    <li class="read-more-target">Features: casual style,short length,long sleeve,O-neck,soft and
                        stretchy, comfortable to wear.</li>
                    <li class="read-more-target">Occasion:This Basic Long Tunic Top Mini T-shirt Dress glad for daily,
                        Beach,going out,
                        party,
                        work, casual wear. Loose
                        t-shirt dress design,put on a belt and paired with a pair of boots will make you looks
                        great.
                    </li>
                    <li class="read-more-target">Note:Hand Wash Seperately in Cold Water. Package Content: 1 x Women
                        Dress.</li> -->
                </ul>
                <label for="post-2" class="read-more-trigger"></label>
            </div>

            <div class="cart">

                <button>
                    <div><img src="icon/cart.png" alt=""></div>
                    <div class="keran">
                        <span>Buy Now!</span>
                    </div>
                </button>

                <p>Share </p>
                <span><img src="icon/facebook.png" alt=""> <img src="icon/instagram.png" alt="">
                    <img src="icon/twitter.png" alt=""></span>
                <P>Other Picture:</P>
                <img class="dw" src=<?= $row["gambar"] ?> alt="">

            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="dalamFooter">
                <div class="mi">
                    <h3>More Info</h3>
                    <li> Term & Condition</li>
                    <li>Return Policy</li>
                    <li>Shipping</li>
                </div>
                <div class="fs">
                    <h3>Find Us</h3>
                    <li> <img src="icon/instagram.png" alt="">@BajuBagus</li>
                    <li> <img src="icon/facebook.png" alt=""> Baju Bagus Official</li>
                    <li> <img src="icon/twitter.png" alt="">@BajuBagus</li>
                </div>
                <div class="store">
                    <h3>Our Store</h3>
                    <p>Jl. Jogja Solo KM19 Cucukan, Sanggarahan, Prambanan, Klatem
                    <p>085701708030</p>

                    email : bajubagus@gmail.com</p>
                </div>
                <hr>
                <p>Copyright &copy; 2021 Baju Bagus Indonesia. All Right Reserved </p>

            </div>

        </div>
    </div>

</body>

</html>