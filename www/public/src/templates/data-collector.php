<?php
session_start();

if (isset($_POST["questionIndex"])){

    $lastQuestionID = "question-" . $_POST["questionIndex"];
//<input type="hidden" name="questenIndex" value="0">
    $_SESSION[$lastQuestionID] = $_POST;
}

print_r($_SESSION);
?>
