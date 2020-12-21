<?php
if(isset($_POST['test'])) {
    session_start();
    echo "Norėdami atlikti apklausą atsakykite į 5 klausimus.";
    
    ?>
<h5>1. Koks yra mūsų puslapio funkcionalumas? (1-labai prastas, 5-labai geras)</h5>
        <form method="POST" action="question2.php">
            <label for="a1">1</label>
            <input id="a1" type="radio" name="q1" value="1" required><br>
            
            <label for="a2">2</lable>
            <input id="a2"type="radio" name="q1" value="2" required><br>
            
            <label for="a3">3</lable>
            <input id="a3"type="radio" name="q1" value="3" required><br>
            
            <label for="a4">4</lable>
            <input id="a4"type="radio" name="q1" value="4" required><br>
            
            <label for="a5">5</lable>
            <input id="a5"type="radio" name="q1" value="5" required><br>
            <br>
            <br>
            <input type="submit" value="Pateikti atsakyma" name="pateikti">
        </form>
<?php
} 