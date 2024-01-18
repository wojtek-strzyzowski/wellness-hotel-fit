<?php include './src/templates/header.php'; ?>


        <div class="hero">
                <img id="q8-img"  width="100%" height="100%"  src="/src/img/Frage 8.png">
        </div>

        <main class="main">
        <p id="error-message" class="warning"></p>
        
<div class="questions-container" >     
            <form action="question9.php" onsubmit="return validateInput('questionIndex');" method="post" id="input-frage">
            <h3>An einem typischen Tag: Wie viele deiner
               Malzeiten oder Snacks enthalten
               Gemüse?</h3>
               <input type="hidden" name="questionIndex" value="7">
            <input type="number" name="check-input" id="check-input">
            <input type="submit" value="weiter">
            </form>
</div>

        </main>
        

<?php include './src/templates/footer.php'; ?>