<?php include './src/templates/header.php'; ?>


        <hero class="hero">
            <img id="hero-index-img"  width="100%" height="100%"  src="/src/img/wellnesshotel-bayern.jpg">
        </hero>

        <main class="main">

        <h1>Willkommen im Hotel FIT</h1>
        <div class="index-begruessung">
        <p>Unser Wellnesshotel mit Therme
            Wasserwelt des Hotels FIT

            Besuchen Sie das Hotel FIT in  Zürich und freuen Sie sich auf eine Auszeit zum Wohlfühlen in unserem Wellnesshotel mit Therme. Hier erfahren Sie den Inbegriff für Ruhe und Entspannung!  Ihr Wohlbefinden steht an erster Stelle . 

            Um uns auf Ihre Bedürfnisse und Ihr Wohlbefinden einzustellen, bitten wir Sie unsern Gesundheitsfragebogen auszufüllen.</p>

        <div>
            <h2>Wie gesund bist du körperlich?</h2>

        </div>
        <form action="question2.php" onsubmit="return validateQuestion();" method="post">
            <p class="instruction">Schätze deine Gesundheit mit dem Slider ein.</p>

            
            <div class="antworten-frage-1">
                <div class="frage-1-antwort-1">
                    <p>Überhaupt nicht</p>
                </div>
                <div class="frage-1-antwort-2">
                    <p>Extrem gesund</p>
                </div>

            </div>
        

        
            <input type="range" class="form-range" 
             min="0" max="5" step="1" name="range-slider" id="customRange3">
            <input type="hidden" name="questionIndex" value="0">
            <p class="spacer"></p>
            <button type="submit" class="btn btn-primary">Weiter</button>
            <p class="spacer"></p>
           
        </form>
        </main>

<?php include './src/templates/footer.php'; ?>