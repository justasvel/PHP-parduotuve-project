<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        $vartotojoVardas = $_COOKIE['vardas'];
        $userID = $_COOKIE['id'];

//Check if user is loged in and print the welcoming
        if (isset($vartotojoVardas)) {
            echo "<h1> " . ucfirst($vartotojoVardas) . ", sveiki prisijungę. </h1>";
        } else if (!isset($vartotojoVardas)) {
            header('Location: login.php');
            exit();
        }
//////////////////////////////////////////////////////MAISTO
//Connection to the database
        $conn = mysqli_connect("localhost", "root", "", "parduotuve");

        if (!$conn) {
            die('Could not connect to the database ' . mysqli_error());
        }

//Select "Maisto prekes" from the database and print
        $maistoSQL = "SELECT * FROM prekes WHERE tipas='maisto'";
        $resultMaisto = mysqli_query($conn, $maistoSQL);

        echo "<h2>Maisto prekės</h2>";
        while ($arrayMaisto = mysqli_fetch_assoc($resultMaisto)) {
            echo "<p>" . ucfirst($arrayMaisto['pavadinimas']) . " " . $arrayMaisto['kaina'] . "&euro;" . "</p>";
        }
        ?>
        <h4>Pasirinkite prekę</h4>
        <form action="cart.php" method="POST">
            <select name="preke">
                <?php
                //Connection to the database
                $conn = mysqli_connect("localhost", "root", "", "parduotuve");

                if (!$conn) {
                    die('Could not connect to the database ' . mysqli_error());
                }

//Select "Maisto prekes" from the database and print
                $maistoSQL = "SELECT * FROM prekes WHERE tipas='maisto'";
                $resultMaisto = mysqli_query($conn, $maistoSQL);

                while ($arrayMaisto = mysqli_fetch_assoc($resultMaisto)) {
                    echo '<option value="' . $arrayMaisto['pavadinimas'] . '">' . $arrayMaisto['pavadinimas'] . '</option>';
                }
                ?>
            </select>
            <input type="submit" name="prideti" value="Pridėti į krepšelį">
        </form>

        <?php
        ///////////////////////////////////////////LAISVALAIKIO
        //Connection to the database
        $conn = mysqli_connect("localhost", "root", "", "parduotuve");

        if (!$conn) {
            die('Could not connect to the database ' . mysqli_error());
        }

        //Select laisvalaikio prekes from database and print
        $laisvalaikioSQL = "SELECT * FROM prekes WHERE tipas='laisvalaikio'";
        $resultLaisvalaikio = mysqli_query($conn, $laisvalaikioSQL);

        echo "<h2>Laisvalaikio prekės</h2>";
        while ($arrayLaisvalaikio = mysqli_fetch_assoc($resultLaisvalaikio)) {
            echo "<p>" . ucfirst($arrayLaisvalaikio['pavadinimas']) . " " . $arrayLaisvalaikio['kaina'] . "&euro;" . "</p>";
        }
        ?>
        <h4>Pasirinkite prekę</h4>
        <form action="cart.php" method="POST">
            <select name="preke">
                <?php
                //Connection to the database
                $conn = mysqli_connect("localhost", "root", "", "parduotuve");

                if (!$conn) {
                    die('Could not connect to the database ' . mysqli_error());
                }

//Select "Maisto prekes" from the database and print
                $laisvalaikioSQLSQL = "SELECT * FROM prekes WHERE tipas='laisvalaikio'";
                $resultLaisvalaikio = mysqli_query($conn, $laisvalaikioSQL);

                while ($arrayLaisvalaikio = mysqli_fetch_assoc($resultLaisvalaikio)) {
                    echo '<option value="' . $arrayLaisvalaikio['pavadinimas'] . '">' . $arrayLaisvalaikio['pavadinimas'] . '</option>';
                }
                ?>
            </select>
            <input type="submit" name="prideti" value="Pridėti į krepšelį">
        </form>
        <?php
        ///////////////////////////////////////////LAISVALAIKIO
        
                //Connection to the database
        $conn = mysqli_connect("localhost", "root", "", "parduotuve");

        if (!$conn) {
            die('Could not connect to the database ' . mysqli_error());
        }

        //Select statybines prekes from database and print
        $statybinesSQL = "SELECT * FROM prekes WHERE tipas='statybines'";
        $resultStatybines = mysqli_query($conn, $statybinesSQL);

        echo "<h2>Laisvalaikio prekės</h2>";
        while ($arrayStatybines = mysqli_fetch_assoc($resultStatybines)) {
            echo "<p>" . ucfirst($arrayStatybines['pavadinimas']) . " " . $arrayStatybines['kaina'] . "&euro;" . "</p>";
        }
        ?>
        <h4>Pasirinkite prekę</h4>
        <form action="cart.php" method="POST" id="finalForm">
            <select name="preke">
                <?php
                //Connection to the database
                $conn = mysqli_connect("localhost", "root", "", "parduotuve");

                if (!$conn) {
                    die('Could not connect to the database ' . mysqli_error());
                }

//Select "Maisto prekes" from the database and print
                $statybinesSQLSQL = "SELECT * FROM prekes WHERE tipas='statybines'";
                $resultStatybines = mysqli_query($conn, $statybinesSQLSQL);

                while ($arrayStatybines = mysqli_fetch_assoc($resultStatybines)) {
                    echo '<option value="' . $arrayStatybines['pavadinimas'] . '">' . $arrayStatybines['pavadinimas'] . '</option>';
                }
                ?>
            </select>
            <input type="submit" name="prideti" value="Pridėti į krepšelį">
        </form>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "parduotuve");
            $checkCartSQL = "SELECT * FROM krepselis WHERE vartotojo_id='$userID'";
            
            $resultCartCheck = mysqli_query($conn, $checkCartSQL);
            
            if (mysqli_num_rows($resultCartCheck) > 0) {
                ?>
                <button type="submit" form="finalForm" style="background-color: green; color:white" name="baigti">Baigti apsipirkimą</button> 
                <?php
            }
        ?>
    </body>
</html>