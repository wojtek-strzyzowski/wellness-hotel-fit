<?php include './src/templates/header.php'; ?>


        <hero class="hero">
        <img id="q4-img"  width="100%" height="100%"  src="/src/img/Frage 4.png">    
        </hero>

        <main class="main">
       
<div class="questions-container" > 
<div id="validation-warning" class="warning"S></div>
        <form action="question5.php" onsubmit="return validateCheckbox();" method="post" id="checkbox">
        <h3>Welche zusätzliche körperliche Aktivität betreibst du am meisten?</h3>

    <input type="checkbox" id="nix" name="chbox-1" value="nix">
    <label for="nix"> Keine körperlichen Aktivitäten</label><br>
    <input type="checkbox" id="gewichte" name="chbox-2" value="gewichte">
    <label for="Gewichte heben"> Gewichte heben</label><br>
    <input type="checkbox" id="gehen" name="chbox-3" value="gehen">
    <label for="gehen"> Gehen </label><br><br>

    <input type="checkbox" id="wandern" name="chbox-4" value="wandern">
    <label for="wandern"> Wandern</label><br>
    <input type="checkbox" id="joggen" name="chbox-5" value="joggen">
    <label for="joggen"> Joggen</label><br>
    <input type="checkbox" id="rennen" name="chbox-6" value="rennen">
    <label for="rennen"> Rennen </label><br><br>
    
 

    <input type="checkbox" id="schwimmen" name="chbox-7" value="schwimmen">
    <label for="schwimmen"> Schwimmen</label><br>
    <input type="checkbox" id="tanzen" name="chbox-8" value="tanzen">
    <label for="tanzen"> Tanzen </label><br>
    <input type="checkbox" id="aerobic-pilates" name="chbox-9" value="aerobic-pilates">
    <label for="arobic-pilates"> Aerobics/Pilates / </label><br>
    <input type="checkbox" id="Team-Sport" name="chbox-10" value="Team-Sport">
    <label for="team-sport"> Team Sport</label><br>
    <input type="checkbox" id="Andere" name="chbox-11" value="Andere">
    <label for="andere"> Andere </label><br>

        
        <input type="hidden" name="questionIndex" value="3">
            <p class="spacer"></p>



            <input type="submit" value="weiter">
        </form>
</div>

        </main>
        

<?php include './src/templates/footer.php'; ?>