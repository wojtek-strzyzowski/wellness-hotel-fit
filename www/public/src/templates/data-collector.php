<?php
session_start();

//wenn auf der Index seite Stehst lösche mir den Array
if (str_contains($_SERVER["SCRIPT_NAME"], "index.php")){
    session_destroy();
    session_start();
}

if (isset($_POST["questionIndex"])){

    $lastQuestionID = "question-" . $_POST["questionIndex"];
//<input type="hidden" name="questenIndex" value="0">
    $_SESSION[$lastQuestionID] = $_POST;
}

print_r($_SESSION);
?>
