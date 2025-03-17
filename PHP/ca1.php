<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <script>
        function validateForm() {
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var message = document.getElementById('message').value;
            
            
            if (!/^[a-zA-Z ]*$/.test(name)) {
                alert("Name must contain only letters and spaces.");
                return false;
            }

            
            var emailPattern = /^[^@]+@[^@]+\.[a-zA-Z]{2,}$/;
            if (!emailPattern.test(email)) {
                alert("Invalid email format.");
                return false;
            }

            
            if (message.trim() === "") {
                alert("Message cannot be empty.");
                return false;
            }

            
            return true;
        }
    </script>
</head>
<body>
    <h2>Contact Us</h2>
    <form action="process_form.php" method="POST" onsubmit="return validateForm()">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" required></textarea><br><br>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>
