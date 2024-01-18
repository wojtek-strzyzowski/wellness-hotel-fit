<?php include './src/templates/header.php'; ?>


        <hero class="hero">hero</hero>

        <main class="main">
                <?php include './src/templates/evaluate-user-input.php';?>
       
<div class="questions-container" >      
            <form action="index.php" onsubmit="return validateQuestion();">
            <p>Wie geht es dir heute?</p>
            <input type="submit" value="home">
            </form>

            
</div>            
        </main>
        

<?php include './src/templates/footer.php'; ?>


<?php session_destroy(); ?>