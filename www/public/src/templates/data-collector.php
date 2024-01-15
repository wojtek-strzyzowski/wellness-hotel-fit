<?php

session_start();

if (isset($_POST["questenIndex"])){
    $lastQuestionID = "question-" . $_POST["questenIndex"];
//<input type="hidden" name="questenIndex" value="0">

$_SESSION[$lastQuestionID] = $_POST;
}

print_r($_SESSION);
?>
