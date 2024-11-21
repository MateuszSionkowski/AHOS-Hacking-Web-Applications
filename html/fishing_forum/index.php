<?php
require __DIR__ . '/../functions.php';

function authenticate($username, $password)
{
    if (((strtolower($username)=="bassadmiral")&&($password=="qwer1234")))
    {
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


    <h2>Challenge: Dictionary attack on password</h2>
    <h3>Log in to the forum by hacking the password</h3>    
    <h3>I wonder what the username might be...</h3>
    <hr class='divider'>
    <title>Fishing Forum</title>
    <style>
        /* Basic styling for layout */
        .lab {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            color: black;
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



        
        /* Header styling */
        .header {
            background-color: #333;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        
        /* Login form styling */
        .login-form {
            display: flex;
            gap: 5px;
        }
        
        .login-form input[type="text"],
        .login-form input[type="password"] {
            padding: 5px;
            font-size: 14px;
            border: none;
            border-radius: 3px;
        }
        
        .login-form button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
            font-size: 14px;
        }
        
        .login-form button:hover {
            background-color: #45a049;
        }
        
        /* Forum container styling */
        .forum-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        /* Forum topics styling */
        .forum-topic {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        
        .forum-topic:last-child {
            border-bottom: none;
        }
        
        .forum-topic h2 {
            font-size: 18px;
            margin: 0;
        }
        
        .forum-topic p {
            margin: 5px 0;
            color: #666;
            font-size: 14px;
        }
    </style>

<div class="lab">
<!-- Header with title and login form -->
<div class="header">
    <h1>&#128031; Fishing Forum</h1>
    <form class="login-form" action="index.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    
</div>
$error_message
<!-- Forum content container -->
<div class="forum-container">
    <div class="forum-topic">
        <h2>Welcome to the Forum</h2>
        <p>Posted by <b>BassAdmiral</b> on October 1, 2024</p>
        <p>Feel free to introduce yourself and start discussions!</p>
    </div>
    
    <div class="forum-topic">
        <h2>My biggest catch</h2>
        <p>Posted by <b>BassAdmiral</b> on October 2, 2024</p>
        <p>Share photos of your biggest catch!</p>
    </div>
    
    <div class="forum-topic">
        <h2>Technical Support</h2>
        <p>Posted by <b>BassAdmiral</b> on October 3, 2024</p>
        <p>Having issues? Post here and our team will assist you.</p>
    </div>
    
    <div class="forum-topic">
        <h2>Feedback and Suggestions</h2>
        <p>Posted by <b>BassAdmiral</b> on October 4, 2024</p>
        <p>We value your feedback. Let us know how we can improve!</p>
    </div>
</div>
</div>

XXXXXX;



$authenticated_page = <<< XXXXXX


    <h2>Challenge: Dictionary attack on password</h2>
    <h3>Log in to the forum by hacking the password</h3>    
    <h3>I wonder what the username might be...</h3>
       <hr class='divider'>

    <title>Fishing Forum</title>
    <style>
        /* Basic styling for layout */
        .lab {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            color: black;
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
        .correct-message {
            color: #007700; /* Dark green text color */
            background-color: #e6ffe6; /* Light green background */
            border: 1px solid #007700; /* Dark green border */
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



        
        /* Header styling */
        .header {
            background-color: #333;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        
        /* Login form styling */
        .login-form {
            display: flex;
            gap: 5px;
        }
        
        .login-form input[type="text"],
        .login-form input[type="password"] {
            padding: 5px;
            font-size: 14px;
            border: none;
            border-radius: 3px;
        }
        
        .login-form button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
            font-size: 14px;
        }
        
        .login-form button:hover {
            background-color: #45a049;
        }
        
        /* Forum container styling */
        .forum-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        /* Forum topics styling */
        .forum-topic {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        
        .forum-topic:last-child {
            border-bottom: none;
        }
        
        .forum-topic h2 {
            font-size: 18px;
            margin: 0;
        }
        
        .forum-topic p {
            margin: 5px 0;
            color: #666;
            font-size: 14px;
        }
    </style>


<!-- Header with title and login form -->
<div class="lab">
<div class="header">
    <h1>&#128031; Fishing Forum</h1>
    <form class="login-form" action="index.php" method="GET">
        <button type="submit">Log out</button>
    </form>
    
</div>
<h2 class="correct-message"> Welcome <b>BassAdmiral</b></h2>
<!-- Forum content container -->
<div class="forum-container">
    <div class="forum-topic">
        <h2>Welcome to the Forum</h2>
        <p>Posted by <b>BassAdmiral</b> on October 1, 2024</p>
        <p>Feel free to introduce yourself and start discussions!</p>
    </div>
    
    <div class="forum-topic">
        <h2>My biggest catch</h2>
        <p>Posted by <b>BassAdmiral</b> on October 2, 2024</p>
        <p>Share photos of your biggest catch!</p>
    </div>
    
    <div class="forum-topic">
        <h2>Technical Support</h2>
        <p>Posted by <b>BassAdmiral</b> on October 3, 2024</p>
        <p>Having issues? Post here and our team will assist you.</p>
    </div>
    
    <div class="forum-topic">
        <h2>Feedback and Suggestions</h2>
        <p>Posted by <b>BassAdmiral</b> on October 4, 2024</p>
        <p>We value your feedback. Let us know how we can improve!</p>
    </div>
</div>
</div>


XXXXXX;




if ((($_SERVER['REQUEST_METHOD'] === 'POST') && (authenticate($username, $password))) )
{
    load_header("Fishing Forum");
    echo($authenticated_page);
    load_footer();
}
else
{
    load_header("Fishing Forum");
    echo($unauthenticated_page);
    load_footer();

}




?>
