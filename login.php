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
        echo "<scrip>alert('Username atau password salah!')</script>";
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
    <link rel="stylesheet" href="styleLogin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="containerku">
        <div class="kotakinput">
            <div class="samping">
                <img src="image/background/samping.jpg" alt="">
            </div>
            <div class="formlog">
                <h2>Log Into BajuBagus</h2>
                <p>Enter your details below</p>

                <form action="#" method="POST">
                    <label for="username">Username</label> <br>
                    <input class="ipt" type="text" name="username" required> <br> <br>
                    <label for="pass">Password</label> <br>
                    <input class="ipt" type="password" name="pass" required> <br> <br>
                    <input type="submit" value="Login" name="submit">
                </form>
            </div>

        </div>

    </div>


</body>

</html>