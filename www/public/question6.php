<?php include './src/templates/header.php'; ?>


        <hero class="hero"></hero>

        <main class="main">
       
<div class="questions-container" >       
            <form action="question7.php" onsubmit="return validateQuestion()" method="post">
            <p>An einem typischen Tag: Wie viele deiner
               Malzeiten oder Snacks enthalten
               Kohlenhydrate?</p>
               <input type="hidden" name="questenIndex" value="5">
            <input type="number" name="" id="">
            <input type="submit" value="weiter">
            </form>

</div>
        </main>
        

<?php include './src/templates/footer.php'; ?>