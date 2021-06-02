<?php
require "function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="input-nama">Nama Barang</label>
                <input class="form-control" type="text" placeholder="Masukan nama barang" id="input-nama" name="nama">
            </div>

            <div class="form-group">
                <p>Upload Gambar</p>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="input-gambar">
                    <label class="custom-file-label" for="input-gambar" name="gambar">Choose file</label>
                </div>
            </div>

            <div class="form-group">
                <label for="input-harga">Harga Barang</label>
                <input class="form-control" type="number" placeholder="Masukan harga barang" id="input-harga" name="harga">
            </div>

            <div class="form-group">
                <p>Pilih Ukuran</p>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="ukuran-S" value="S">
                    <label class="custom-control-label" for="ukuran-S" name="ukuran[]">S</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="ukuran-M" value="M">
                    <label class="custom-control-label" for="ukuran-M" name="ukuran[]">M</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="ukuran-L" value="L">
                    <label class="custom-control-label" for="ukuran-L" name="ukuran[]">L</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="ukuran-XL" value="XL">
                    <label class="custom-control-label" for="ukuran-XL" name="ukuran[]">XL</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="ukuran-XXL" value="XXL">
                    <label class="custom-control-label" for="ukuran-XXL" name="ukuran[]">XXL</label>
                </div>
            </div>

            <div class="form-group">
                <p>Kondisi Barang</p>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="input-baru" name="kondisi" class="custom-control-input">
                    <label class="custom-control-label" for="input-baru">Baru</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="input-bekas" name="kondisi" class="custom-control-input" value="bekas">
                    <label class="custom-control-label" for="input-bekas">Bekas</label>
                </div>
            </div>

            <div class="form-group">
                <label for="input-berat">Berat Barang</label>
                <input class="form-control" type="number" placeholder="Masukan berat barang dalam satuan gram" id="input-berat" name="harga" step="0.01">
            </div>

            <div class="form-group">
                <label for="input-kategori">Kategori Barang</label>
                <select class="form-control" id="input-kategori" name="kategori">
                    <option value="pria">pria</option>
                    <option value="wanita">wanita</option>
                    <option value="anak">anak</option>
                    <option value="dewasa">dewasa</option>
                    <option value="discount">discount</option>
                </select>
            </div>

            <div class="form-group">
                <label for="input-jenis">Jenis Barang</label>
                <select class="form-control" id="input-jenis" name="jenis">
                    <option>jaket</option>
                    <option>baju</option>
                    <option>celana pendek</option>
                    <option>celana panjang</option>
                </select>
            </div>

            <div class="form-group">
                <label for="input-keterangan">Keterangan</label>
                <textarea class="form-control" id="input-keterangan" rows="3" name="keterangan"></textarea>
            </div>

            <div class="form-group">
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="hoodie" value="hoodie">
                    <label class="custom-control-label" for="hoodie" name="tags[]">hoodie</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="cold" value="cold">
                    <label class="custom-control-label" for="cold" name="tags[]">cold</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="summer" value="summer">
                    <label class="custom-control-label" for="summer" name="tags[]">summer</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="hypebeast" value="hypebeast">
                    <label class="custom-control-label" for="hypebeast" name="tags[]">hypebeast</label>
                </div>
            </div>
        </form>
    </div>
</body>

</html>