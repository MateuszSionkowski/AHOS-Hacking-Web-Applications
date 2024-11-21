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
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if ( !empty($_GET['user'])) {

        $user = $_GET['user'];
    } 
    $error_message = "Oops! Wrong password. Try again!";
}

$image="";
switch ($user)
{
    case "LuckyWolf": 
        $image="poker1.png";
        break;
    case "BigSnack87":
        $image="poker2.png";
        break;
    case "ChipCollectorXXX": 
        $image="poker3.png";
        break;
    case "RainMoney":
        $image="poker4.png";
        break;
    case "QuickOnFeet":
        $image="poker5.png";
        break;




}




$page = <<< XXXXXX



<h2 >Basic IDOR Exploitation</h2>
<h3 >Find out other player's hand</h3>       
<hr class="divider">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Area</title>
    <style>
        /* General Styles */
        .lab  {
            font-family: 'Comic Sans MS', sans-serif;
            background-color: lightgreen;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            
            margin: 0;
        }

        /* Set the table dimensions and background image */
        .table-container {
            width: 1024px;
            height: 1024px;
            background-image: url('$image'); /* Replace with the path to your image */
            background-size: cover;
            background-repeat: no-repeat;
        }
        
        /* Style each cell to be 1px by 1px */
        table {
            border-collapse: collapse;
            width: 100%;
            height: 100%;
        }

        td {
            width: 341px;
            height: 256px;
            padding: 0;
            margin: 0;
        }

        .container {
            text-align: center;
            max-width: 1400px;
            
            padding: 20px;
            background-color: darkgreen;
            border: 2px dashed #ff69b4;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .lab h1 {
            font-size: 24px;
            color: gold;
        }

        .lab p {
            font-size: 16px;
            color: white;
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
        .table-container p {
            color: white;
            font-size: larger;
            font-weight: bolder;
          }
    </style>

<div class="lab">

<div class="container">
    <div class="icon">&#128142;</div>
    <h1>Welcome $user</h1>
    <p>The game will resume shortly...</p>

    <!-- Password Form -->
 

    <div class="table-container">
    <table>
        <!-- Generate the 1024x1024 grid -->
        <tbody>
            <tr> <td></td> <td><p style="padding-bottom: 100px;" >LuckyWolf</p></td> <td><p>BigSnack87<p></td> </tr>
            <tr> <td></td> <td></td> <td><p style="padding-left:100px;padding-bottom: 100px;">ChipCollectorXXX</p></td> </tr>
            <tr> <td><p>QuickOnFeet</p></td> <td></td> <td></td> </tr>
            <tr> <td></td> <td><p>RainMoney</p></td> <td></td> </tr>
            
        </tbody>
    </table>
    </div>

    <!-- Message for incorrect password (example) -->
    <!-- Uncomment this line to display the error message -->
    <p class="message" style="color: #dc143c;"></p>
</div>

</div>



XXXXXX;


$error_page = <<< XXXXXX




<h2 >Basic IDOR Exploitation</h2>
<h3 >Find out other player's hand</h3>       
<hr class="divider">



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Area</title>
    <style>
        /* General Styles */
        .lab  {
            font-family: 'Comic Sans MS', sans-serif;
            background-color: lightgreen;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            
            margin: 0;
        }

        
        /* Style each cell to be 1px by 1px */
        table {
            border-collapse: collapse;
            width: 100%;
            height: 100%;
        }

        td {
            width: 341px;
            height: 256px;
            padding: 0;
            margin: 0;
        }

        .container {
            text-align: center;
            max-width: 1400px;
            margin: 150px;
            padding: 20px;
            background-color: darkgreen;
            border: 2px dashed #ff69b4;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .lab h1 {
            font-size: 24px;
            color: gold;
        }

        .lab p {
            font-size: 16px;
            color: white;
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
        .table-container p {
            color: white;
            font-size: larger;
            font-weight: bolder;
          }
    </style>

<div class="lab">

<div class="container">
    <h1><h1>
    <h1>Something went wrong.</h1>
  



    <div class="table-container">
 
    </div>

    <!-- Message for incorrect password (example) -->
    <!-- Uncomment this line to display the error message -->
    <p class="message" style="color: #dc143c;"></p>
</div>

</div>



XXXXXX;




if ((($_SERVER['REQUEST_METHOD'] === 'GET') && (in_array($user, ["LuckyWolf","BigSnack87","ChipCollectorXXX","RainMoney","QuickOnFeet"]))) )
{
    load_header("Poker Room");
    echo($page);
    load_footer();
}
else
{
    load_header("Poker Room");
    echo($error_page);
    load_footer();

}




?>
