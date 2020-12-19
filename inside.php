<?php
$vartotojoVardas = $_COOKIE['vardas'];

//Check if user is loged in and print the welcoming
if(isset($vartotojoVardas)) {
    echo "<h1> " . ucfirst($vartotojoVardas) . ", sveiki prisijunge. </h1>"; 
} else if (! isset($vartotojoVardas)) {
    header('Location: login.php');
    exit();
}