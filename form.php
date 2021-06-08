<?php
require "function.php";
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: index.php");
}

$tmp = array("nama" => "", "harga" => "", "kondisi" => "", "berat" => "", "keterangan" => "", "status" => "", "jenis" => "", "kategori" => "");

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $file_gambar = $_FILES["gambar"];
    $harga = $_POST["harga"];
    $ukuran = implode(", ", $_POST["ukuran"]);
    $kondisi = ($_POST["kondisi"] == "baru") ? 1 : 0;
    $berat = $_POST["berat"];
    $kategori = $_POST["kategori"];
    $jenis = $_POST["jenis"];
    $keterangan = $_POST["keterangan"];
    $tags = implode(", ", $_POST["tags"]);
    $status = $_POST["status"];

    $ext = "." . pathinfo($file_gambar["name"], PATHINFO_EXTENSION);
    if ($ext == ".jpeg" || $ext == ".png" || $ext == ".jpg") {
        $path = "image/" . $status . "/" . time() . $ext;

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $queryInsert = "UPDATE barang set nama = '$nama', gambar = '$path', harga = '$harga' , ukuran = '$ukuran', kondisi = '$kondisi', berat = '$berat', kategori = '$kategori', jenis = '$jenis', keterangan = '$keterangan', tag = '$tags' WHERE id = $id;";
        } else {
            $queryInsert = "INSERT INTO barang VALUES(DEFAULT, '$nama', '$path', 
    '$harga', '$ukuran', $kondisi, '$berat', '$kategori', '$jenis', 
    '$keterangan', '$tags');";
        }

        if (mysqli_query($conn, $queryInsert)) {
            move_uploaded_file($file_gambar["tmp_name"], $path);
        }

        header("Location: admin.php");
    } else {
        echo '<script>alert("Ekstensi File tidak valid!")</script>';
    }
} else {
    if (isset($_GET["id"])) {

        $id = $_GET['id'];

        $querySelect = "SELECT * FROM barang WHERE id = $id LIMIT 1;";

        $hasil = mysqli_query($conn, $querySelect);
        if ($hasil) {
            $row = mysqli_fetch_assoc($hasil);
            $tmp["nama"] = $row["nama"];
            $tmp["harga"] = $row["harga"];
            $tmp["kondisi"] = $row["kondisi"];
            $tmp["berat"] = $row["berat"];
            $tmp["keterangan"] = $row["keterangan"];
            $tmp["status"] = explode("/", $row["gambar"])[1];
            $tmp["kategori"] = $row["kategori"];
            $tmp["jenis"] = $row["jenis"];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="container">
        <h1>FORM</h1>
        <form method="POST" onsubmit="return validateForm();" enctype="multipart/form-data">
            <div class="form-group">
                <label for="input-nama">Nama Barang</label>
                <input class="form-control" type="text" placeholder="Masukan nama barang" id="input-nama" name="nama" required value=<?= $tmp["nama"] ?>>
            </div>

            <div class="form-group">
                <p>Upload Gambar</p>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="input-gambar" name="gambar" onchange="validateExt();" required>
                    <label class="custom-file-label" for="input-gambar">Choose file</label>
                </div>
            </div>

            <div class="form-group">
                <label for="input-harga">Harga Barang</label>
                <input class="form-control" type="number" placeholder="Masukan harga barang" min="0" id="input-harga" name="harga" required value=<?= $tmp["harga"] ?>>
            </div>

            <div class="form-group" required>
                <p>Pilih Ukuran</p>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="ukuran-S" name="ukuran[]" value="S">
                    <label class="custom-control-label" for="ukuran-S">S</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="ukuran-M" name="ukuran[]" value="M">
                    <label class="custom-control-label" for="ukuran-M">M</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="ukuran-L" name="ukuran[]" value="L">
                    <label class="custom-control-label" for="ukuran-L">L</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="ukuran-XL" name="ukuran[]" value="XL">
                    <label class="custom-control-label" for="ukuran-XL">XL</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="ukuran-XXL" name="ukuran[]" value="XXL">
                    <label class="custom-control-label" for="ukuran-XXL">XXL</label>
                </div>
            </div>

            <div class="form-group">
                <p>Kondisi Barang</p>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="input-baru" name="kondisi" class="custom-control-input" value="baru" <?= ($tmp["kondisi"] == 1) ? "checked" : "" ?> required>
                    <label class="custom-control-label" for="input-baru">Baru</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="input-bekas" name="kondisi" class="custom-control-input" value="bekas" <?= ($tmp["kondisi"] == 0) ? "checked" : "" ?>>
                    <label class="custom-control-label" for="input-bekas">Bekas</label>
                </div>
            </div>

            <div class="form-group">
                <label for="input-berat">Berat Barang</label>
                <input class="form-control" type="number" placeholder="Masukan berat barang dalam satuan gram" id="input-berat" name="berat" step="0.01" min="1" value=<?= $tmp["berat"] ?> required>
            </div>

            <div class="form-group">
                <label for="input-kategori">Kategori Barang</label>
                <select class="form-control" id="input-kategori" name="kategori" required>
                    <option value="pria" <?= ($tmp["kategori"] == "pria") ? "selected" : "" ?>>pria</option>
                    <option value="wanita" <?= ($tmp["kategori"] == "wanita") ? "selected" : "" ?>>wanita</option>
                    <option value="anak" <?= ($tmp["kategori"] == "anak") ? "selected" : "" ?>>anak</option>
                    <option value="dewasa" <?= ($tmp["kategori"] == "dewasa") ? "selected" : "" ?>>dewasa</option>
                    <option value="discount" <?= ($tmp["kategori"] == "discount") ? "selected" : "" ?>>discount</option>
                </select>
            </div>

            <div class="form-group">
                <label for="input-jenis">Jenis Barang</label>
                <select class="form-control" id="input-jenis" name="jenis" required>
                    <option value="jaket" <?= ($tmp["jenis"] == "jaket") ? "selected" : "" ?>>jaket</option>
                    <option value="baju" <?= ($tmp["jenis"] == "baju") ? "selected" : "" ?>>baju</option>
                    <option value="celana pendek" <?= ($tmp["jenis"] == "celana pendek") ? "selected" : "" ?>>celana pendek</option>
                    <option value="celana panjang" <?= ($tmp["jenis"] == "celana panjang") ? "selected" : "" ?>>celana panjang</option>
                </select>
            </div>

            <div class="form-group">
                <label for="input-keterangan">Keterangan</label>
                <textarea class="form-control" id="input-keterangan" rows="3" name="keterangan" required><?= $tmp["keterangan"] ?></textarea>
            </div>

            <div class="form-group" required>
                <p>Tags</p>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="hoodie" name="tags[]" value="hoodie">
                    <label class="custom-control-label" for="hoodie">hoodie</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="cold" name="tags[]" value="cold">
                    <label class="custom-control-label" for="cold">cold</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="summer" name="tags[]" value="summer">
                    <label class="custom-control-label" for="summer">summer</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="hypebeast" name="tags[]" value="hypebeast">
                    <label class="custom-control-label" for="hypebeast">hypebeast</label>
                </div>
                <!-- tambah js untuk other biar bisa tambah banyak tags nya -->
            </div>

            <div class="form-group">
                <p>Status</p>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="trending" name="status" class="custom-control-input" value="trending" <?= ($tmp["status"] == "trending") ? "checked" : "" ?> required>
                    <label class="custom-control-label" for="trending">Trending</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="new" name="status" class="custom-control-input" value="new" <?= ($tmp["status"] == "new") ? "checked" : "" ?>>
                    <label class="custom-control-label" for="new">New</label>
                </div>
            </div>

            <button type="submit" id="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
        </form>
    </div>
</body>

</html>