<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "function.php";

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: index.php");
} else {
    if (isset($_GET["id"])) {
        $id = mysqli_escape_string($conn, $_GET["id"]);
        $queryDelete = "DELETE FROM barang WHERE id = $id ;";
        $queryPath = "SELECT gambar FROM barang WHERE id = $id LIMIT 1;";
        $hasil = mysqli_query($conn, $queryPath);
        mysqli_query($conn, $queryDelete);

        if (mysqli_affected_rows($conn) > 0) {
            $path = mysqli_fetch_assoc($hasil)["gambar"];
            unlink($path);
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
}
