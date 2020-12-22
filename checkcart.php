<?php

$userID = $_COOKIE['id'];

if (isset($_POST['back'])) {
    header('Location: inside.php');
} else if (isset($_POST['remove'])) {
    $conn = mysqli_connect("localhost", "root", "", "parduotuve");
    $removeItems = "DELETE FROM krepselis WHERE vartotojo_id='$userID'";
    mysqli_query($conn, $removeItems);
    header('Location: inside.php');
} else if (isset($_POST['logout'])) {
    setcookie('user', '', time() - 3600);
    setcookie('vardas', '', time() - 3600);
    setcookie('id', '$userID', time() - 3600);
    unset($_COOKIE['user']);
    unset($_COOKIE['vardas']);
    unset($_COOKIE['id']);
    header('Location: login.php');
}
