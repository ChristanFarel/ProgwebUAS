<?php
require "function.php";
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baju Bagus</title>
    <!-- <link rel="shortcut icon" href="b.ico" /> -->
    <link rel="stylesheet" href="style.css">
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

        <div class="vid">
            <video class="gambarBesar" autoplay muted loop>
                <source src="image/iklan.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <div class="trend">
            <h1>Trending</h1>
            <div class="grs">

            </div>
        </div>

        <div class="kategori">
            <div>
                <h4>Category</h4>
                <ul>
                    <li>Fashion Pria</li>
                    <li>Fashion Anak & Bayi</li>
                    <li>Fashion Wanita</li>

                </ul>
                <hr>
            </div>
            <div>
                <h4>Shop Type</h4>
                <input type="checkbox" name="jenis1">
                <label for="jenis1"> Power Merchant</label><br>
                <input type="checkbox" name="jenis2">
                <label for="jenis2"> Official Store</label><br>
                <hr>
            </div>
            <div>
                <h4>Kondisi</h4>
                <input type="checkbox" name="baru">
                <label for="baru"> Baru</label><br>
                <input type="checkbox" name="bekas">
                <label for="bekas"> Bekas</label><br>

                <hr>
            </div>
            <div>
                <h4> Harga</h4>
                <div id="rp">
                    <h3>Rp</h3>
                </div>
                <div> <input id="uang" type="text" placeholder="Harga..."></div>

            </div>

        </div>

        <div class="bajuTrending">
            <div>
                <a href="detail.html"><img class="b1" src="baju1.png" alt=""></a>

                <br>
                <div>
                    <p>Jaket Musim Dingin</p>
                    <p>Rp 150.000,-</p>
                    <div class="overlay">
                        <div class="text"> <a href="">Detail</a> </div>
                    </div>
                </div>
            </div>
            <div>
                <a href="detail.html"><img class="b1" src="baju2.png" alt=""></a>

                <br>
                <div>
                    <p>Celana Chinos</p>
                    <p>Rp 125.000,-</p>
                    <div class="overlay">
                        <div class="text"> <a href="">Detail</a> </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Special Product -->
        <div class="trend">
            <h1>New Product</h1>
            <div class="grs2">

            </div>
        </div>

        <div class="tsp">
            <div class="cuacua">
                <a href="detail.html"><img src="itaci.jpg" alt=""></a>
                T-Shirt Mengekyo Sharingan
                <p>Rp 70.000,-</p>
                <div class="over">
                    <div class="teks"> <a href="">Detail</a> </div>
                </div>
            </div>
            <div class="cuacua">
                <a href="detail.html"><img src="bajuBiru.jfif" alt=""></a>
                T-shirt Polos
                <p>Rp 50.000,-</p>
                <div class="over">
                    <div class="teks"> <a href="">Detail</a> </div>
                </div>
            </div>
            <div class="cuacua">
                <a href="detail.html"><img src="jubahSasageyo.jpg" alt=""></a>
                Jubah Sasageyo
                <p>Rp 135.000,-</p>
                <div class="over">
                    <div class="teks"> <a href="">Detail</a> </div>
                </div>
            </div>
            <div class="cuacua">
                <a href="detail.html"><img src="t-shirt1.jpg" alt=""></a>
                Kemeja Santai di Pantai
                <p>Rp 95.000,-</p>
                <div class="over">
                    <div class="teks"> <a href="">Detail</a> </div>
                </div>
            </div>
        </div>

        <!--Bahan  -->
        <div class="bahan">
            <div>
                <img src="image/other/artistry.png" alt="">
            </div>
            <div class="tlsa">
                <p>asd</p>
                <p>asd</p>
                <p>asd</p>
                <h2>Artistry</h2>
                BIASA prides itself on
                intricate and skilled creative techniques that elevate every garment.
                All items
                are made by hand,
                with high attention to detail. Contrast stitching,
                hand cut and hand sewn appliqué, and hand
                crafted
                design tools such
                as block print are some of our signature brand trademarks.
            </div>
        </div>

        <div class="kain">
            <div>
                <img class="gbrkain" src="image/other/Kain.png" alt="">
            </div>
            <div class="tls">
                <p>asd</p>
                <p>asd</p>
                <p>asd</p>
                <p>asd</p>
                <h2>Fabrics</h2>
                Fabrics and textiles are the bread and butter of any fashion brand. Here at BIASA we ensure to use only
                the finest
                quality raw materials to match the high standard of our finished products. We work with natural fabrics
                that we develop
                in collaboration with highly skilled artisans in India - honing in on a cultural heritage of textiles
                and traditional
                techniques.
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