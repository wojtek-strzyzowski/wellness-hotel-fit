<?php include './src/templates/header.php'; ?>


        <hero class="hero"></hero>

        <main class="main">
       
      
            <form action="question9.php" onsubmit="return validateQuestion();" method="post">
            <p>An einem typischen Tag: Wie viele deiner
               Malzeiten oder Snacks enthalten
               Gemüse?</p>
               <input type="hidden" name="questenIndex" value="7">
            <input type="number" name="" id="">
            <input type="submit" value="weiter">
            </form>
        </main>
        

<?php include './src/templates/footer.php'; ?>