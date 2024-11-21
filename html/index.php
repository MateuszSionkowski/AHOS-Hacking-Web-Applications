<?php
require __DIR__ . '/functions.php';

function authenticate($username, $password)
{
    if ((($username=="hacker")&&($password=="future")))
    {
        setcookie("past",1);
        return TRUE;
    }
    else return FALSE;

}

$error_message="";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    } 
    $error_message = "<h2 class='error-message'> Incorrect Username or Password.</h2>";
}




$unauthenticated_page = <<< XXXXXX

<style>

        .login-container {
            margin: 0 auto;
            width: 300px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .error-message {
            color: #b20000; /* Dark red text color */
            background-color: #ffe6e6; /* Light red background */
            border: 1px solid #b20000; /* Dark red border */
            padding: 10px;
            border-radius: 4px;
            margin-top: 15px;
            text-align: center;
            font-weight: bold;
            font-size: 14px;
        }
        .login-container .error-message{
            color: #b20000; /* Dark red text color */
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .login-btn {
            width: 100%;
            padding: 10px;
            background-color: #ff007c;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .login-btn:hover {
            background-color: #c8007a;
        }
        .login-container .register-link {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }
        .login-container .register-link:hover {
            text-decoration: underline;
        }
    </style>

    <h2>Exercise 0</h2>
    <h3>Guess the password to enter the lab</h3>    
    <h3>Username is "hacker"</h3>

    <div class="login-container">

    <h2>Login</h2>
    <form action="index.php" method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="login-btn">Login</button>
        $error_message
        
    </form>
    </div>

XXXXXX;

if ((($_SERVER['REQUEST_METHOD'] === 'POST') && (authenticate($username, $password))) || (isset($_COOKIE['past'])))
{
    header("Location: labs.php");
}
else
{
    load_header("Ethical Hacking labs");
    echo($unauthenticated_page);
    load_footer();

}




?>
