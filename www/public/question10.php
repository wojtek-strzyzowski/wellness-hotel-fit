<?php include './src/templates/header.php'; ?>


        <hero class="hero">
        <img id="q10-img"  width="100%" height="100%"  src="/src/img/Frage 10.png">
        </hero>

        <main class="main">
        <p id="error-message" class="warning"></p>      
 <div class="questions-container" >   
            <form action="result.php" onsubmit="return validateInput('questionIndex');" method="post" id="input-frage">
            <h3>An einem typischen Tag: Wie viele deiner
               Malzeiten kommen aus der Mikrowelle
               oder sind schon fertig zubereitet?</h3>
               <input type="hidden" name="questionIndex" value="9">
            <input type="number" name="check-input" id="check-input">
            <input type="submit" value="weiter">
            </form>
 </div>

        </main>
        

<?php include './src/templates/footer.php'; ?>