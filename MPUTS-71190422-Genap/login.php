<?php
require "function.php";
session_start();
if (isset($_SESSION['login'])) {
    header('Location: index.php');
}
if (isset($_POST['submit'])) {

    $user = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

    $querySelect = "SELECT * from user where username = '$user' AND password = '$pass' ;";
    echo $querySelect;

    $hasil = mysqli_query($conn, $querySelect);
    if (mysqli_num_rows($hasil) > 0) {
        $_SESSION['login'] = $user;
        header('Location: index.php');
    } else {
        echo "alert('Username atau password salah!')";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="#" method="POST">
        Username: <input type="text" name="username" required> <br>
        Password: <input type="password" name="pass" required> <br>
        <input type="submit" value="submit" name="submit">
    </form>

</body>

</html>