<?php
require __DIR__ . '/../functions.php';

function authenticate($username, $password)
{
    if ((($password=="007")))
    {
        return TRUE;
    }
    else return FALSE;

}

$error_message="";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ( !empty($_POST['password'])) {

        $password = $_POST['password'];
    } 
    $error_message = "Oops! Wrong password. Try again!";
}




$unauthenticated_page = <<< XXXXXX



<h2 >Challenge: Brute force attack on password</h2>
<h3 >Break the password with brute force</h3>    
<hr class="divider">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Area</title>
    <style>
        /* General Styles */
        .lab  {
            font-family: 'Comic Sans MS', sans-serif;
            background-color: #ffebcd;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
            max-width: 400px;
            width: 90%;
            padding: 20px;
            background-color: #fff8dc;
            border: 2px dashed #ff69b4;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .lab h1 {
            font-size: 24px;
            color: #ff4500;
        }

        .lab p {
            font-size: 16px;
            color: #333;
        }

        /* Form Styling */
        .password-form {
            margin-top: 15px;
        }

        .password-form input[type="password"] {
            width: 80%;
            padding: 10px;
            font-size: 16px;
            border: 2px solid #ff69b4;
            border-radius: 5px;
            margin: 10px 0;
            background-color: #fff0f5;
        }

        .password-form button {
            width: 50%;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            background-color: #ff69b4;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .password-form button:hover {
            background-color: #ff4500;
        }

        /* Access denied message */
        .message {
            color: #dc143c;
            margin-top: 15px;
            font-weight: bold;
        }

        /* Fun decorative icons */
        .icon {
            font-size: 50px;
            color: #ff69b4;
            margin-bottom: 10px;
        }
    </style>

<div class="lab">

<div class="container">
    <div class="icon">🔒</div>
    <h1>Exclusive Membership Area</h1>
    <p>Enter the secret password to access fun and exclusive content!</p>

    <!-- Password Form -->
    <form class="password-form" method="POST" action="">
        <input type="password" name="password" placeholder="Enter password" required>
        <button type="submit">Enter</button>
    </form>

    <!-- Message for incorrect password (example) -->
    <!-- Uncomment this line to display the error message -->
    <p class="message" style="color: #dc143c;">$error_message</p>
</div>

</div>



XXXXXX;



$authenticated_page = <<< XXXXXX

<h2 >Challenge: Brute force attack on password</h2>
<h3 >Break the password with brute force</h3>    
<hr class="divider">




    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Area</title>
    <style>
        /* General Styles */
        .lab  {
            font-family: 'Comic Sans MS', sans-serif;
            background-color: #ffebcd;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
            max-width: 1200px;
            width: 90%;
            padding: 20px;
            background-color: #fff8dc;
            border: 2px dashed #ff69b4;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .lab h1 {
            font-size: 24px;
            color: #ff4500;
        }

        .lab p {
            font-size: 16px;
            color: #333;
        }

        /* Form Styling */
        .password-form {
            margin-top: 15px;
        }

        .password-form input[type="password"] {
            width: 80%;
            padding: 10px;
            font-size: 16px;
            border: 2px solid #ff69b4;
            border-radius: 5px;
            margin: 10px 0;
            background-color: #fff0f5;
        }

        .password-form button {
            width: 50%;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            background-color: #ff69b4;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .password-form button:hover {
            background-color: #ff4500;
        }

        /* Access denied message */
        .message {
            color: #dc143c;
            margin-top: 15px;
            font-weight: bold;
        }

        /* Fun decorative icons */
        .icon {
            font-size: 50px;
            color: #ff69b4;
            margin-bottom: 10px;
        }
    </style>

<div class="lab">

<div class="container">
    <div class="icon">🎉</div>
    <h1>Welcome to our c0rn site!</h1>
    <p>Feel free to browse the exclusive content!</p>
    <img src="corn1.png" width=250 height=250 />
    <img src="corn2.png" width=250 height=250 />
    <img src="corn3.png" width=250 height=250 />
    <img src="corn4.png" width=250 height=250 />



</div>

</div>




XXXXXX;




if ((($_SERVER['REQUEST_METHOD'] === 'POST') && (authenticate($username, $password))) )
{
    load_header("Corn Site");
    echo($authenticated_page);
    load_footer();
}
else
{
    load_header("Corn Site");
    echo($unauthenticated_page);
    load_footer();

}




?>
