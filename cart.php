<?php

$conn = mysqli_connect("localhost", "root", "", "parduotuve");
$userID = $_COOKIE['id'];
$good = $_POST['preke'];

if (!$conn) {
    die('Could not connect: ' . mysqli_error());
}

if(isset($_POST['prideti'])) {
    $addItem = "INSERT INTO krepselis(vartotojo_id, preke)"
            . "VALUES ('$userID', '$good')";
    mysqli_query($conn, $addItem);
    header('Location: inside.php');
}
