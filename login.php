<?php
    if (isset($_COOKIE['user'])) {
        header('Location: inside.php');
    }
?>
<html>
    <head>
        <title>Parduotuve</title>
    </head>
    <body>
        <h3>Prisijungti</h3>
        <form action="validation.php" method="POST">
            <p>Elektroninis pastas: <input type="email" name="elPastas" required></p>
            <p>Slaptazodis: <input type="text" name="slaptazodis" required></p>
            <input type="submit" name="prisijungti" value="prisijungti">
        </form>
    </body>
</html>