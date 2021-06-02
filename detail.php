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
    <link rel="shortcut icon" href="b.ico" />
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

        <div class="dami">
            <h1>hahahah</h1>
        </div>

        <div class="kotakBesar">
            <div class="gambarDetail">
                <div>
                    <img src="image/trending/baju1.png" alt="">
                </div>

                <div class="hgr">
                    <span> <b>Rp. 150.000</b> </span>
                </div>

                <label for="ukuran">Choose Your Size:</label>
                <br>
                <select name="ukuran" id="ukuran">
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                </select>
            </div>

            <div class="penjelasan">
                <div>
                    <h2>Jaket Musim Dingin</h2>
                    <h6>14,248 Rating | 238 answered ratings</h6>
                    <h6>tags: <a href="#">Hoodie</a> , <a href="#">Men</a> , <a href="#">Cold</a> </h6>
                    <hr>
                </div>

                <p>Condition: <span>Baru</span></p>
                <p>Weight: <span>750gr</span></p>
                <p>Category: <span>Hoodie Pria</span></p>
                <br>
                <input type="checkbox" class="read-more-state" id="post-2" />
                <ul class="read-more-wrap">
                    <span>Details:</span>
                    <li>95% Rayon, 5% Spandex</li>
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
                        Dress.</li>
                </ul>
                <label for="post-2" class="read-more-trigger"></label>
            </div>

            <div class="cart">

                <button>
                    <div><img src="cart.png" alt=""></div>
                    <div class="keran">
                        <span>Buy Now!</span>
                    </div>
                </button>

                <p>Share </p>
                <span><img src="icon/facebook.png" alt=""> <img src="icon/instagram.png" alt="">
                    <img src="icon/twitter.png" alt=""></span>
                <P>Other Picture:</P>
                <img class="dw" src="hoodie.jfif" alt="">

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
                    <li> <img src="instagram.png" alt="">@BajuBagus</li>
                    <li> <img src="facebook.png" alt=""> Baju Bagus Official</li>
                    <li> <img src="twitter.png" alt="">@BajuBagus</li>
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