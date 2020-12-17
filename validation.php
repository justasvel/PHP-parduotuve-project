<?php

//User submited info
$email = $_POST['elPastas'];
$password = $_POST['slaptazodis'];

//Connect to database
$conn = mysqli_connect("localhost", "root", "", "parduotuve");

//Check if connection was successful
if (!$conn) {
    die('Connection to database failed' . mysqli_error($conn));
}

//Get the user details from database
$userInfo = mysqli_query($conn, "SELECT elpastas, slaptazodis FROM vartotojai WHERE elpastas='$email'");
$userInfoRow = mysqli_fetch_assoc($userInfo);

//Check the returned data from the database
if ($userInfoRow == null) {
    echo "Tokio vartotojo sistemoje nera. <a href=''> Registruotis</a>.";
} else {
    //Check if email and password matches the database
    if ($email == $userInfoRow['elpastas'] && $password == $userInfoRow['slaptazodis']) {
        setcookie('vartotojas', $email, time() * 60 * 60 * 4);
        header('Location: inside.php');
    } else {
        echo "Prisijungti nepavyko. Neteisingai ivestas slaptazodis arba el. pastas.<br>";
        echo "<a href='login.php'>Bandykite dar karta.</a>";
    }
}