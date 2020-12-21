<?php
if(isset($_POST['pateikti'])) {
    session_start();
    $_SESSION['q5'] = $_POST['q5'];
    
    $a1 = $_SESSION['q1'];
    $a2 = $_SESSION['q2'];
    $a3 = $_SESSION['q3'];
    $a4 = $_SESSION['q4'];
    $a5 = $_SESSION['q5'];
    
    $average= ($a1 + $a2 + $a3 + $a4 + $a5) / 5;
    
    echo $average;
}