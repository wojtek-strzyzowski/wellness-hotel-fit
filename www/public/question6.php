<?php include './src/templates/header.php'; ?>


        <div class="hero">
                <img id="q6-img"  width="100%" height="100%"  src="src/img/Frage 6.png">
        </div>

        <main class="main">
       <p id="error-message" class="warning"></p>
       
<div class="questions-container" >       
            <form action="question7.php" onsubmit="return validateInput('questionIndex')" method="post" id="input-frage">
            <h3>An einem typischen Tag: Wie viele deiner
               Malzeiten oder Snacks enthalten
               Kohlenhydrate?</h3>
               <input type="hidden" name="questionIndex" value="5">
            <input type="number" name="check-input" id="check-input">
            <input type="submit" value="weiter">
            </form>

</div>
        </main>
        

<?php include './src/templates/footer.php'; ?>