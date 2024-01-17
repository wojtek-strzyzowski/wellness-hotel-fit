<?php include './src/templates/header.php'; ?>

       
        <hero class="hero">
        <img id="q7-img"  width="100%" height="100%"  src="/src/img/Frage 7.png">
        </hero>
        

        <main class="main">
        <p id="error-message"></p>
<div class="questions-container" >      
            <form action="question8.php" onsubmit="return validateInput();" method="post" id="input-frage">
            <h3>An einem typischen Tag: Wie viele deiner
               Malzeiten oder Snacks enthalten Protein?</h3>
               <input type="hidden" name="questenIndex" value="6">
            <input type="number" name="check-input" id="check-input">
            <input type="submit" value="weiter">
            </form>
</div>

        </main>
        

<?php include './src/templates/footer.php'; ?>