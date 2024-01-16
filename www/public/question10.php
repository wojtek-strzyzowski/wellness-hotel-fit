<?php include './src/templates/header.php'; ?>


        <hero class="hero"></hero>

        <main class="main">
       
 <div class="questions-container" >   
            <form action="result.php" onsubmit="return validateQuestion();" method="post">
            <p>An einem typischen Tag: Wie viele deiner
               Malzeiten kommen aus der Mikrowelle
               oder sind schon fertig zubereitet?</p>
               <input type="hidden" name="questenIndex" value="9">
            <input type="number" name="" id="">
            <input type="submit" value="weiter">
            </form>
 </div>

        </main>
        

<?php include './src/templates/footer.php'; ?>