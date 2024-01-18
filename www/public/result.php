<?php include './src/templates/header.php'; ?>


        <hero class="hero"></hero>

        <main class="main">
          <p class="resultat">Vielen herzlichen Dank fürs mitmachen!!</p>     
        <div class="resultat">
              <?php include './src/templates/evaluate-user-input.php';?>
       
        </div>

<div class="questions-container" >      
            
        <div class="home-button"></div>
        <form action="index.php" onsubmit="return validateQuestion();">
            
            <input type="submit" value="home">
        </form>
        </div>
            
</div>            
        </main>
        

<?php include './src/templates/footer.php'; ?>

<?php session_destroy(); ?> 