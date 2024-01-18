<?php include './src/templates/header.php'; ?>


        <hero class="hero">
            <img id="q2-img" src="/src/img/Kohlenhydrate Frage 2.png" width="100%" height="100%">
        </hero>

        <main class="main">


    <div class="questions-container" > 
    <div id="validation-warning" class="warning"></div>
        <form action="question3.php" onsubmit="return validateRadio();" method="post">
        <h3>Nehmen Sie Nahrungsergänzungsmittel?</h3>
        <input type="radio" id="check-radio" name="check-radio" value="ja">
        <label for="html">Ja</label><br>
        <input type="radio" id="check-radio" name="check-radio" value="nein">
        <label for="css">Nein</label><br>
        
            <input type="hidden" name="questionIndex" value="1">
            <p class="spacer"></p>
        

       
            <input type="submit" value="weiter">
        </form>
        <div id="validation-warning"></div>
    </div>
        
    </main>
        

<?php include './src/templates/footer.php'; ?>