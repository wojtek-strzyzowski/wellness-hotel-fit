<?php include './src/templates/header.php'; ?>


        <div class="hero">
            <img id="q5-img"  width="100%" height="100%"  src="/src/img/Frage 5.png">
        </div>

        <main class="main">
       
<div class="questions-container" >      
<form action="question6.php" onsubmit="return validateRange('rangeSlider');" method="post">            
            <h3 class="instruction">Hast du das Gefühl, zu wenig, genügend
                oder viel zu viel zusätzliche körperliche Aktivitäten zu betreiben?</h3>

            <div class="antworten-frage-1">
                <div class="frage-1-antwort-1">
                    <p>Viel zu wenig</p>
                </div>
                <div class="frage-1-antwort-2">
                    <p>Genau richtig</p>
                </div>
                <div class="frage-1-antwort-2">
                    <p>Viel zu Viel </p>
                </div>

            </div>
        

        
            <input type="range" class="form-range" 
             min="0" max="10" step="1" name="range-slider" id="rangeSlider" value="0">
             <p id="validation-warning" class="warning"></p>             
             <input type="hidden" name="questionIndex" value="4">
            <p class="spacer"></p>
            <button type="submit" class="btn btn-primary">Weiter</button>
            <p class="spacer"></p>
        </form>
</div>        
        
        </main>
        

<?php include './src/templates/footer.php'; ?>