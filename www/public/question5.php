<?php include './src/templates/header.php'; ?>


        <hero class="hero">hero</hero>

        <main class="main">main
       
<div class="questions-container" >      
        <form action="question6.php" onsubmit="return validateQuestion();" method="post">
            <p class="instruction">Hast du das Gefühl, zu wenig, genügend
                oder viel zu viel zusätzliche körperliche Aktivitäten zu betreiben?</p>

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
             min="0" max="5" step="1" name="range-slider" id="customRange3">
            <input type="hidden" name="questionIndex" value="4">
            <p class="spacer"></p>
            <button type="submit" class="btn btn-primary">Weiter</button>
            <p class="spacer"></p>
        </form>
</div>        
        
        </main>
        

<?php include './src/templates/footer.php'; ?>