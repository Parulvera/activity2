<?php
session_start();
if (!isset($_SESSION['score'])) {
    header("Location: quiz.php");
    exit();
}

$score = $_SESSION['score'];
unset($_SESSION['score']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quiz Result</title>
</head>
<body>
    <h2>Quiz Completed!</h2>
    <p>Your Score: <?php echo $score; ?> / 3</p>
    <a href="quiz15.php">Try Again</a>
</body>
</html>