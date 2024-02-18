<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register Page</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
<div class="form-container">
    <div class="button-group">
        <button id="loginButton">Login</button>
        <button id="registerButton">Register</button>
    </div>

    <form id="loginForm" class="form" action="login.php" method="post">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <form id="registerForm" class="form" action="register.php" method="post" style="display: none;">
        <input type="text" name="name" placeholder="First Name" required>
        <input type="text" name="surname" placeholder="Last Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" id="pass" placeholder="Password" required>
        <input type="password" name="confirm_password" id="pass2" placeholder="Confirm Password" required>
        <div><h3 style="color:red" id="error_message"></h3></div>
        <script>
            function validatePassword() {
                var password = document.getElementById('pass').value;
                var confirm = document.getElementById('pass2').value;
                if (password != confirm) {
                    document.getElementById('error_message').textContent = "Passwords do not match.";
                    document.getElementById("bt").disabled = true
                } else {
                    document.getElementById('error_message').textContent = ""; // Clear the error message
                    document.getElementById("bt").disabled = false
                }
            }
            document.getElementById('pass').oninput = validatePassword;
            document.getElementById('pass2').oninput = validatePassword;

        </script>

        <button type="submit" id="bt">Register</button>
    </form>
</div>
</body>
</html>
