<?php
session_start();
$userID = $_COOKIE['id'];
$_SESSION['logout'] = $_POST['logout'];

if (isset($_POST['back'])) {
    header('Location: inside.php');
} else if (isset($_POST['remove'])) {
    $conn = mysqli_connect("localhost", "root", "", "parduotuve");
    $removeItems = "DELETE FROM krepselis WHERE vartotojo_id='$userID'";
    mysqli_query($conn, $removeItems);
    header ('Location: inside.php');
} else if (isset($_POST['logout'])) {
    setcookie('user', '', time() - 3600);
    setcookie('vardas', '', time() - 3600);
    setcookie('id', '', time() - 3600);
    header('Location: login.php');
}
