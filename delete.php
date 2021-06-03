<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "function.php";

if (isset($_GET["id"])) {
    $id = mysqli_escape_string($conn, $_GET["id"]);
    $queryDelete = "DELETE FROM barang WHERE id = $id ;";
    $hasil = mysqli_query($conn, $queryDelete);

    if (mysqli_affected_rows($conn) > 0) {
        echo '<script>alert("Berhasil dihapus");
        window.location.href="admin.php";</script>';
    } else {
        echo '<script>alert("Gagal dihapus");
        window.location.href="admin.php";</script>';
    }
} else {
    echo '<script>alert("id tidak ditemukan!");
    window.location.href="admin.php";</script>';
}
