<?php include './src/templates/header.php'; ?>


        <hero class="hero">
        <img id="q4-img"  width="100%" height="100%"  src="/src/img/Frage 4.png">    
        </hero>

        <main class="main">
       
<div class="questions-container" > 
<div id="validation-warning"></div>
        <form action="question5.php" onsubmit="return validateCheckbox();" method="post" id="checkbox">
        <h3>Welche zusätzliche körperliche Aktivität betreibst du am meisten?</h3>

    <input type="checkbox" id="nix" name="nix" value="nix">
    <label for="vehicle1"> Keine körperlichen Aktivitäten</label><br>
    <input type="checkbox" id="gewichte" name="gewichte" value="gewichte">
    <label for="vehicle2"> Gewichte heben</label><br>
    <input type="checkbox" id="gehen" name="gehen" value="gehen">
    <label for="vehicle3"> Gehen </label><br><br>

    <input type="checkbox" id="wandern" name="wandern" value="wandern">
    <label for="vehicle1"> Wandern</label><br>
    <input type="checkbox" id="joggen" name="joggen" value="joggen">
    <label for="vehicle2"> Joggen</label><br>
    <input type="checkbox" id="rennen" name="rennnen" value="rennen">
    <label for="vehicle3"> Rennen </label><br><br>
    
 

    <input type="checkbox" id="schwimmen" name="schwimmen" value="schwimmen">
    <label for="vehicle1"> Schwimmen</label><br>
    <input type="checkbox" id="tanzen" name="tanzen" value="tanzen">
    <label for="vehicle2"> Tanzen </label><br>
    <input type="checkbox" id="aerobic-pilates" name="aerobic-pilates" value="aerobic-pilates">
    <label for="vehicle3"> Aerobics/Pilates / </label><br>
    <input type="checkbox" id="Team-Sport" name="Team-Sport" value="Team-Sport">
    <label for="vehicle1"> Team Sport</label><br>
    <input type="checkbox" id="Andere" name="Andere" value="Andere">
    <label for="vehicle2"> Andere </label><br>

        
        <input type="hidden" name="questionIndex" value="3">
            <p class="spacer"></p>



            <input type="submit" value="weiter">
        </form>
</div>

        </main>
        

<?php include './src/templates/footer.php'; ?>