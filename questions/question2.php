<?php
if(isset($_POST['pateikti'])) {
    session_start();
    $_SESSION['q1'] = $_POST['q1'];
    ?>
    <h5>2. Kokia mūsų prekių kokybė? (1-labai prasta, 5-labai gera)</h5>
        <form method="POST" action="question3.php">
            <label for="a1">1</label>
            <input id="a1" type="radio" name="q2" value="1" required><br>
            
            <label for="a2">2</lable>
            <input id="a2"type="radio" name="q2" value="2" required><br>
            
            <label for="a3">3</lable>
            <input id="a3"type="radio" name="q2" value="3" required><br>
            
            <label for="a4">4</lable>
            <input id="a4"type="radio" name="q2" value="4" required><br>
            
            <label for="a5">5</lable>
            <input id="a5"type="radio" name="q2" value="5" required><br>
            <br>
            <br>
            <input type="submit" value="Pateikti atsakyma" name="pateikti">
        </form>
<?php
}


