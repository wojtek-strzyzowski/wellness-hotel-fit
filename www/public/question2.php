<?php include './src/templates/header.php'; ?>


        <hero class="hero">hero</hero>

        <main class="main">

        <h1>Willkommen im Hotel FIT</h1>
        <p>Um sie individuel betreuen und beraten zu können, bitten wir Sie noch unseren Fragebogen auszufüllen.</p>


        <form action="question3.php" onsubmit="return validateQuestion();" method="post">
        <p>Nehmen Sie Nahrungsergänzungsmittel?</p>
        <input type="radio" id="html" name="fav_language" value="HTML">
        <label for="html">Ja</label><br>
        <input type="radio" id="css" name="fav_language" value="CSS">
        <label for="css">Nein</label><br>
        
            <input type="hidden" name="questionIndex" value="1">
            <p class="spacer"></p>
        

       
            <input type="submit" value="weiter">
        </form>
        
    </main>
        

<?php include './src/templates/footer.php'; ?>