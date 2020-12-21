<?php
if(isset($_POST['pateikti'])) {
    session_start();
    $_SESSION['q3'] = $_POST['q3'];
    ?>
    <h5>4. Ar mūsų atsiskaitymo sistema yra patogi? (1-labai nepatogi, 5-labai patogi)</h5>
        <form method="POST" action="question5.php">
            <label for="a1">1</label>
            <input id="a1" type="radio" name="q4" value="1" required><br>
            
            <label for="a2">2</lable>
            <input id="a2"type="radio" name="q4" value="2" required><br>
            
            <label for="a3">3</lable>
            <input id="a3"type="radio" name="q4" value="3" required><br>
            
            <label for="a4">4</lable>
            <input id="a4"type="radio" name="q4" value="4" required><br>
            
            <label for="a5">5</lable>
            <input id="a5"type="radio" name="q4" value="5" required><br>
            <br>
            <br>
            <input type="submit" value="Pateikti atsakyma" name="pateikti">
        </form>
<?php
}

