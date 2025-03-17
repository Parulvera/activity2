<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation</title>
</head>
<body>

<h2>Contact Form</h2>
<form method="post" action="form.php">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Message: <textarea name="message" required></textarea><br><br>
    <input type="submit" value="Submit Inquiry">
</form>

</body>
</html>
