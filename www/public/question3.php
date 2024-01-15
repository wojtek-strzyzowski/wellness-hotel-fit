<?php include './src/templates/header.php'; ?>


        <hero class="hero">hero</hero>

        <main class="main">
       
      
        <form action="question4.php" onsubmit="return validateQuestion();" method="post">
            <p class="instruction">Wie wichtig ist köperliche Aktivität für dich?</p>

            <div class="antworten-frage-1">
                <div class="frage-1-antwort-1">
                    <p>Überhaupt nicht</p>
                </div>
                <div class="frage-1-antwort-2">
                    <p>Sehr wichtig</p>
                </div>

            </div>
        

        
            <input type="range" class="form-range" 
             min="0" max="5" step="2.5" name="range-slider" id="customRange3">
            <input type="hidden" name="questionIndex" value="2">
            <p class="spacer"></p>
            <button type="submit" class="btn btn-primary">Weiter</button>
            <p class="spacer"></p>
        </form>
        </main>
        

<?php include './src/templates/footer.php'; ?>