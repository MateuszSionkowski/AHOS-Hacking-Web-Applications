<?php
require __DIR__ . '/../functions.php';






    


    load_header("Sign in!");
    ?>

    <h2>Challenge: Authentication Bypass</h2>
    <h3>Bypass authentication with SQL Injection</h3> 
    <h3>Username is: thomas</h3>    
    <hr class="divider">


    <?php

    $success1="";
    $success2="style='display: none;'";
    // Connect to the SQLite database
    $db = new SQLite3('challenge.db');
    
    // Check if form is submitted
    $message = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = strtolower($_POST['username']);
        $password = md5($_POST['password']);
        
        // Vulnerable query: concatenates user input directly into SQL statement
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $db->query($query);
    
        if ($result->fetchArray()) {
            $message = "Login successful! Welcome, $username.";
            $success2="";
            $success1="style='display: none;'";
        } else {
            $message = "Invalid username or password.";
        }
    }
    ?>
    
    

    <style>
        .lab {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #000; /* TikTok-style dark background */
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #1c1c1e; /* Dark container background */
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(255, 255, 255, 0.1);
            width: 100%;
            max-width: 350px;
            text-align: center;
            margin: 0 auto;
        }

        .login-container h1 {
            color: #fe2c55; /* TikTok red */
            font-size: 28px;
            margin-bottom: 20px;
        }

        .login-container form {
            display: flex;
            flex-direction: column;
        }

        .login-container label {
            text-align: left;
            margin-bottom: 5px;
            font-size: 14px;
            color: #fff;
        }

        .login-container input {
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #333;
            border-radius: 8px;
            font-size: 16px;
            background-color: #2c2c2e; /* Input background */
            color: #fff;
        }

        .login-container input::placeholder {
            color: #aaa;
        }

        .login-container button {
            background-color: #fe2c55;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-container button:hover {
            background-color: #e52145;
        }

        .error-message {
            color: #ff3860; /* Error message in red */
            margin-top: 10px;
            font-size: 14px;
        }

        .footer {
            margin-top: 15px;
            font-size: 14px;
            color: #aaa;
        }

        .footer a {
            color: #fe2c55;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
        </style>

        <script>
        function validateForm() {
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();
    const errorMessage = document.getElementById('error-message');

    // Check for bad characters in username (allow only letters, numbers, and underscores)
    const usernameRegex = /^[a-zA-Z0-9_]+$/;
    if (!usernameRegex.test(username)) {
        errorMessage.textContent = "Username contains invalid characters. Only letters, numbers, and underscores are allowed.";
        return false; // Prevent form submission
    }

    // Check if the password is empty
    if (password === '') {
        errorMessage.textContent = "Password cannot be empty.";
        return false; // Prevent form submission
    }

    // Clear error message if validation passes
    errorMessage.textContent = '';
    return true; // Allow form submission
}

        </script>



 
    <div class="lab">
    <div class="login-container">
        <h1>Authentication</h1>
        <h2 <?php echo $success2; ?>>Login successful, welcome!</h2>
        <p <?php echo $success2; ?>><a href="">Log out</a></p>
        <form method="POST" action="" <?php echo $success1; ?>    onsubmit="return validateForm();">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" placeholder="Enter your username" required>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>
            <button type="submit">Login</button>
        </form>
        <p class="error-message" id="error-message" <?php echo $success1; ?>><?php echo htmlspecialchars($message ?? ''); ?></p>
        <div class="footer" <?php echo $success1; ?>>
            <p>Don't have an account? <a href="#">Sign up</a></p>
            <p><a href="#">Forgot password?</a></p>
        </div>
    </div>

    </div>


    <?php
    load_footer();






?>
