<?php
if(isset($_POST['pateikti'])) {
    session_start();
    $userID = $_SESSION['user'];
    
    $_SESSION['q5'] = $_POST['q5'];
    
    $a1 = $_SESSION['q1'];
    $a2 = $_SESSION['q2'];
    $a3 = $_SESSION['q3'];
    $a4 = $_SESSION['q4'];
    $a5 = $_SESSION['q5'];
    
    $average= ($a1 + $a2 + $a3 + $a4 + $a5) / 5;
    $_SESSION['rating'] = $average;
    
    $conn = mysqli_connect("localhost", "root", "", "parduotuve");

        if (!$conn) {
            die('Could not connect to the database ' . mysqli_error());
        }
        
        $userRating = "SELECT * FROM vertinimas WHERE vartotojo_id='$userID'";
        $checkRating = mysqli_query($conn, $userRating);
        
        if (mysqli_num_rows($checkRating) < 1) {
            $insertRating = "INSERT INTO vertinimas (vartotojo_id, vertinimas)"
                    . "VALUES ('$userID', '$average')";
            mysqli_query($conn, $insertRating);
        } else if (mysqli_num_rows($checkRating) > 0) {
            $changeRating = "UPDATE vertinimas SET vertinimas='$average'"
                    . "WHERE vartotojo_id='$userID'";
            mysqli_query($conn, $changeRating);
        }
        
        echo "<h3>Jūsų įvertinimas $average</h3> <br>";
}
?>

<html>
    <body>
        
        <form method="POST" action="../inside.php">
            <input type="submit" name="back" value="Grįžti į pagrindinį">
        </form>
    </body>
</html>
