<?php include './src/templates/header.php'; ?>


        <div class="hero">
            <img id="q3-img" width="100%" height="100%" src="/src/img/Frage 3.png">
        </div>

        <main class="main">
       
      <div class="questions-container" > 
        <form  action="question4.php" onsubmit="return validateRange('rangeSlider');" method="post">
            <h3 class="instruction">Wie wichtig ist köperliche Aktivität für dich?</h3>

            
            <div class="antworten-frage-1">
                <div class="frage-1-antwort-1">
                    <p>Überhaupt nicht</p>
                </div>
                <div class="frage-1-antwort-2">
                    <p>Sehr wichtig</p>
                </div>

            </div>
        

        
            <input type="range" class="form-range" 
             min="0" max="5" step="1" name="range-slider" id="rangeSlider" value="0">
             <p id="validation-warning" class="warning"></p>
             <input type="hidden" name="questionIndex" value="2">
            <p class="spacer"></p>
            <button type="submit" class="btn btn-primary">Weiter</button>
            <p class="spacer"></p>
        </form>
        </div>
        </main>
        

<?php include './src/templates/footer.php'; ?>