<?php include './src/templates/header.php'; ?>


        <div class="hero">
            <img id="hero-index-img"  width="100%" height="100%"  src="/src/img/wellnesshotel-bayern.jpg">
        </div>

        <main class="main">
    <div class="container-text">
        <h1>Willkommen im Hotel FIT</h1>
        <div class="index-begruessung">
        <p>Unser Wellnesshotel mit Therme
            Wasserwelt des Hotels FIT

            Besuchen Sie das Hotel FIT in  Zürich und freuen Sie sich auf eine Auszeit zum Wohlfühlen in unserem Wellnesshotel mit Therme. Hier erfahren Sie den Inbegriff für Ruhe und Entspannung!  Ihr Wohlbefinden steht an erster Stelle . 

            Um uns auf Ihre Bedürfnisse und Ihr Wohlbefinden einzustellen, bitten wir Sie unsern Gesundheitsfragebogen auszufüllen.</p>
        </div>
        
            <h2>Wie gesund bist du körperlich?</h2>
    </div>

    <div class="slider1">
            <div id="slider1">
        <form action="question2.php" onsubmit="return validateRange('rangeSlider');" method="post">
            <h3 class="instruction">Schätze deine Gesundheit mit dem Slider ein.</h3>

            
            <div class="antworten-frage-1">
                <div class="frage-1-antwort-1">
                    <p>Überhaupt nicht</p>
                </div>
                <div class="frage-1-antwort-2">
                    <p>Extrem gesund</p>
                </div>

            </div>
        

           
            <input type="range" class="form-range" 
             min="0" max="10" step="1" name="range-slider" id="rangeSlider" value="0">
            
            <p id="validation-warning" class="warning"></p>
             <input type="hidden" name="questionIndex" value="0">
            <p class="spacer"></p>
            <input type="submit" class="btn btn-primary" value="weiter">
            <p class="spacer"></p>
           
        </form>
        </div>
        </div>
        </main>

<?php include './src/templates/footer.php'; ?>