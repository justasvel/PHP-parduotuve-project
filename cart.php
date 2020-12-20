<?php

$conn = mysqli_connect("localhost", "root", "", "parduotuve");
$userID = $_COOKIE['id'];
$vartotojoVardas = $_COOKIE['vardas'];
$good = $_POST['preke'];

if (!$conn) {
    die('Could not connect: ' . mysqli_error());
}

if(isset($_POST['prideti'])) {
    $addItem = "INSERT INTO krepselis(vartotojo_id, preke)"
            . "VALUES ('$userID', '$good')";
    mysqli_query($conn, $addItem);
    header('Location: inside.php');
} else if (isset($_POST['baigti'])) {
    $orderInfoSQL = "SELECT * FROM krepselis LEFT JOIN prekes ON prekes.pavadinimas=krepselis.preke WHERE krepselis.vartotojo_id='$userID'";
    
    $getOrder = mysqli_query($conn, $orderInfoSQL);
    
    $orderTotal = 0;
    echo "<h3>" . ucfirst($vartotojoVardas) . ", jūsų krepšelyje yra: </h3>";
    while ($row = mysqli_fetch_array($getOrder)) {
        echo "<p>" . $row['pavadinimas'] . " " . $row['kaina'] . " &euro; </p>";
        $orderTotal += $row['kaina'];
    }
    
    echo "<h4>Viso: " . $orderTotal . " &euro; </h4>";
}
