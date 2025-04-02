<?php
    session_start();
    $_SESSION['username'] = "Anurag Yadav";
    $_SESSION['role'] = "Admin";

    echo "Session variables are set.";
    print_r($matches);
?>