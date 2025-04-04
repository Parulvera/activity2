<?php
    if(isset($_POST['submit'])) {
        session_start();
        $score = 0;
        $answer = $_POST['answer'];
        if($answer == "4") {
            $score++;
        }
        $answer = $_POST['answer2'];
        if($answer == "2") {
            $score++;
        }
        $answer = $_POST['answer3'];
        if($answer == "3") {
            $score++;
        }
        $_SESSION['score'] = $score;
        header("Location: variable.php");
        exit();
    }
?>