<?php include './src/templates/header.php'; ?>


        <hero class="hero">
        <img id="q6-img"  width="100%" height="100%"  src="src/img/Frage 6.png">
        </hero>

        <main class="main">
       <p id="error-message"></p>
<div class="questions-container" >       
            <form action="question7.php" onsubmit="return validateInput()" method="post" id="input-frage">
            <h3>An einem typischen Tag: Wie viele deiner
               Malzeiten oder Snacks enthalten
               Kohlenhydrate?</h3>
               <input type="hidden" name="questenIndex" value="5">
            <input type="number" name="check-input" id="check-input">
            <input type="submit" value="weiter">
            </form>

</div>
        </main>
        

<?php include './src/templates/footer.php'; ?>