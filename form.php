<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>

<?php
$nameErr = $emailErr = $messageErr = "";
$name = $email = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    if (empty($name) || !preg_match("/^[a-zA-Z ]+$/", $name)) {
        $nameErr = "Enter a valid name (letters only)";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Enter a valid email";
    }
    if (empty($message)) {
        $messageErr = "Message cannot be empty";
    }

    if (empty($nameErr) && empty($emailErr) && empty($messageErr)) {
        echo "<h3>Contact us</h3>";
        echo"<p>Thank you $name Your inquiry has been received.</p>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Message:</strong> $message</p>";
    } else {
        echo "<h3> Invalid input</h3>";
        
    }
}
?>

</body>
</html>
