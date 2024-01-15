<?php include './src/templates/header.php'; ?>


        <hero class="hero"></hero>

        <main class="main">
       
      
            <form action="result.php" onsubmit="return validateQuestion();" method="post">
            <p>An einem typischen Tag: Wie viele deiner
               Malzeiten oder Snacks enthalten Früchte?</p>
               <input type="hidden" name="questenIndex" value="8">
            <input type="number" name="" id="">
            <input type="submit" value="weiter">
            </form>
        </main>
        

<?php include './src/templates/footer.php'; ?>