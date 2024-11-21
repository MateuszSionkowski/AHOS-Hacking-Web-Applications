<?php
require __DIR__ . '/../functions.php';






    


    load_header("User Sign in");
    ?>

    <h2>Authentication Bypass</h2>
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
            $message = "<span style='color: black;'>Login successful! Welcome, $username.</span>";
            $success2="";
            $success1="style='display: none;'";
        } else {
            $message = "Invalid username or password.";
        }
    }
    ?>
    
    <style>
        .lab {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-container h1 {
            color: #1877f2;
            font-size: 32px;
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
        }

        .login-container input {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        .login-container button {
            background-color: #1877f2;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-container button:hover {
            background-color: #145dbf;
        }

        .login-container .footer {
            margin-top: 15px;
            font-size: 14px;
            color: #555;
        }

        .login-container .footer a {
            color: #1877f2;
            text-decoration: none;
        }

        .login-container .footer a:hover {
            text-decoration: underline;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
    <div class="lab">
    <div class="login-container">
        <h1>Social Space</h1>
        <h2 <?php echo $success2 ?>><span style="color:black">Login successful, welcome!</span></h2>
        <p <?php echo $success2 ?>><a href="">Log out</a></p>
        <form method="POST" action="" <?php echo $success1 ?>>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" placeholder="Enter your username" required>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>
            <button type="submit">Login</button>
        </form>
        <p class="error-message" <?php echo $success1 ?>><?php echo htmlspecialchars($message ?? ''); ?></p>
        <div class="footer" <?php echo $success1 ?>>
            <p>Don't have an account? <a href="#">Sign up</a></p>
            <p><a href="#">Forgot password?</a></p>
        </div>
    </div>
    </div>
    




    <?php
    load_footer();






?>
