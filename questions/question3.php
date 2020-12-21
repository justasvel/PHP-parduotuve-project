<?php
if(isset($_POST['pateikti'])) {
    session_start();
    $_SESSION['q2'] = $_POST['q2'];
    ?>
    <h5>3. Kaip įvertintumėte mūsų prekių pristatymo greitį? (1-labai prastas, 5-labai geras)</h5>
        <form method="POST" action="question4.php">
            <label for="a1">1</label>
            <input id="a1" type="radio" name="q3" value="1" required><br>
            
            <label for="a2">2</lable>
            <input id="a2"type="radio" name="q3" value="2" required><br>
            
            <label for="a3">3</lable>
            <input id="a3"type="radio" name="q3" value="3" required><br>
            
            <label for="a4">4</lable>
            <input id="a4"type="radio" name="q3" value="4" required><br>
            
            <label for="a5">5</lable>
            <input id="a5"type="radio" name="q3" value="5" required><br>
            <br>
            <br>
            <input type="submit" value="Pateikti atsakyma" name="pateikti">
        </form>
<?php
}
