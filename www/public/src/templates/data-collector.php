<?php
 if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }



//print_r(str_contains($_SERVER["SCRIPT_NAME"], "index.php"));

if (isset($_POST["questionIndex"])){

    $lastQuestionID = "question-" . $_POST["questionIndex"];
//<input type="hidden" name="questenIndex" value="0">
    $_SESSION[$lastQuestionID] = $_POST;
}

print_r($_SESSION);
?>
